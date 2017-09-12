<?php

if(!isset($_SERVER["HTTPS"]))
{
  header("Location: https://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
    exit();
}



require 'libs/Smarty.class.php';
require_once("baza.php");
require ("database_log.php");
session_start();
if(isset($_SESSION['username'])){
    header("Location:index_signed.php");
}

$imeErr  =  $preErr = $emaErr = $korErr = $lozErr = $lozpErr = $capErr = $linErr = $twoStep = "";
$predaja1 = 1;
$nesto = $cookie_user = $cookiesm =  "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $username=$_POST["koris"];

    $baza = new baza();
    $baza->spojiDB();
    $result = $baza->selectDB("SELECT username, password, status, sign_attemp, two_step, mail, role FROM users WHERE username='$username' ");

    $data = mysqli_fetch_assoc($result);

    $user =  $data["username"];
    $pass = $data["password"];
    $two = $data["two_step"];
    $sign = intval($data["sign_attemp"]);
    $status = $data["status"];


    if (($username==$user)&&($_POST["lozinka"]==$pass)&&($sign<4)&&($status=="active")){
        $_SESSION["username"]=$user;
        $_SESSION["role"]=$data["role"];
        $_SESSION["mail"]=$data["mail"];

        $baza->updateDB("UPDATE users SET sign_attemp=0, points=points+5, points_all=points_all+5 WHERE username='$user'");

        if ($two){
            $chars = "1234567890qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM";
            $genRandomChars="";
            for($i=0; $i<=4; $i++){
                $genRandomChars.=$chars[rand(0, strlen($chars)-1)];
            }

            $sendTO =$data['mail'];
            $sentFrom= "From: matljesca@foi.hr";
            $sub = "TwoStep Kod";
            $link = "$genRandomChars";
            $baza->updateDB("UPDATE users set activation_id='$genRandomChars',points=points+5, points_all=points_all+5 WHERE username='$user'");

            $sadrzaj = "Ovo je tvoj kod za prijavu, unesi ga na stranicu, brzo brzo :D ".$link."";
            global $nesto, $cookie_user;
            $nesto = "block";

            if(!isset($_COOKIE["username"])&&($_POST["rad"]=="Da")) {
                setcookie("username", $user, time() + 600);
                $cookie_user=$user;
            }
            writeLog("Loged_in", "user loged in with two step auth");

            mail($sendTO, $sub, $sadrzaj,$sentFrom);

        }
        else{
            global $twoStepMessageText;

            if(!isset($_COOKIE["username"])&&($_POST["rad"]=="Da")) {
                setcookie("username", $user, time() + 600);
                $cookie_user=$user;
            }

            $twoStepMessageText = "Uspješna prijava";
            header("Location:index_signed.php");
            writeLog("Loged_in", "user loged in");
        }
    }
    else{
        $data = $baza->updateDB("UPDATE users SET sign_attemp=(sign_attemp+1) WHERE username='$user'");
        writeLog("Login_error","user missed password or username");
        echo "Krivi login";
    }

    $baza->zatvoriDB();

}

function lozinka(){
    global $lozErr,$predaja1;
    $rez = preg_match_all('/^(?=.+\d)(?=.{2,}[a-z])(?=.{2,}[A-Z]).{5,15}$/', $_POST["lozinka"]);

    if (!$rez)
    {

        $lozErr = "block";
        $predaja1 = false;
        return false;
    }
    else {
        $lozErr = "none";
        $predaja1=true;
        return true;
    }
}
$smarty = new Smarty;

$smarty->assign("title","Prijava");
$smarty->assign("gumb","none");
$smarty->display("header.tpl");
$smarty->display("nav.tpl");
$smarty->assign("nesto","$nesto");
if(isset($_COOKIE["username"])) {
    $cookiesm=$_COOKIE["username"];
}
$smarty->assign("cookie_user", "$cookiesm");
$smarty->display("prijava.tpl");


