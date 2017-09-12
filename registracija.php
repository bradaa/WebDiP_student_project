<?php

session_start();
if(isset($_SESSION['username'])){
    header("Location:index.php");
}


require_once("baza.php");

$imeErr  =  $preErr = $emaErr = $korErr = $lozErr = $lozpErr = $capErr = $linErr = $twoStep = "";
$predaja1 = 1;



if(!isset($_COOKIE["novi_proizvod"])) {
    setcookie("novi_proizvod", time(), time() + 600);
}

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $chPass = lozinka();
    $chMail = email();
    $chPass1 = lozinkeIste();
    $chUser = korisnik();
    $chCap = cap();
    $imeErr = imeProvjera("ime");
    $preErr = imeProvjera("prezime");



    //$predaja1=1;
    if($predaja1){
        $username=$_POST["koris"];
        $password=$_POST["lozinka"];
        $mail=$_POST["email"];
        $name=$_POST["ime"];
        $surname=$_POST["prezime"];
        $twoStep = $_POST["twoStep"];

        if (empty($twoStep)) $twoStep=0;

        $Salt = "MatijaJeZakon";
        $sha1 = hash("sha1", ($Salt . $password ));

        $chars = "1234567890qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM";
        $genRandomChars="";
        for($i=0; $i<=8; $i++){
            $genRandomChars.=$chars[rand(0, strlen($chars)-1)];
        }

        $baza = new baza();
        $baza->spojiDB();
        $baza->updateDB("INSERT INTO users (ID, username, password, password_hash, mail, name, surname, joined, activation_id,  two_step, points, points_all, role) VALUES (DEFAULT,'$username','$password','$sha1','$mail','$name','$surname', DEFAULT,'$genRandomChars','$twoStep',20,20,1)");
        $baza->zatvoriDB();

            $sendTO =$_POST['email'];
            $sentFrom= "From: matljesca@foi.hr";
            $sub = "Aktivacioni e-majl";
            $link = "http://barka.foi.hr/WebDiP/2016/zadaca_04/matljesca/aktivacija.php?id=$genRandomChars";
            $sadrzaj = "Otvori ovaj link kako bi se akitivirao :D ".$link."";

            if(mail($sendTO, $sub, $sadrzaj,$sentFrom)) {
                echo("Registracija je uspješna! Preusmjeravanje na prijavu za 10 sekundi!");
                header("refresh:10;url=prijava.php");
            }


    }

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

function lozinkeIste(){
    global $lozpErr,$predaja1;

    if (!($_POST["lozinka"]==$_POST["lozinka_p"]))
    {
        $lozpErr = "block";
        $predaja1 = false;
        return false;
    }
    else {
        $lozpErr = "none";
        $predaja1=true;
        return true;
    }
}

function email(){
    global $emaErr,$predaja1;
    $rez = preg_match_all('/.+@.+\..+/', $_POST["email"]);

    $baza= new baza();
    $upit = "select 1 from users where mail ='".$_POST["email"]."'";
    $baza->spojiDB();
    $rezultat_korime = $baza->selectDB($upit);
    $baza->zatvoriDB();
    $rezultat_korime = $rezultat_korime->num_rows;
    //var_dump($rezultat_korime);


    if (!$rez||$rezultat_korime)
    {

        $emaErr = "block";
        $predaja1 = false;
        return false;
    }
    else {
        $emaErr = "none";
        $predaja1=true;
        return true;
    }
}

function korisnik(){
    global $korErr,$predaja1;


    $baza= new baza();
    $upit = "SELECT 1 FROM users WHERE username ='".$_POST["koris"]."'";
    $baza->spojiDB();
    $rezultat_korime = $baza->selectDB($upit);
    $baza->zatvoriDB();
    $rezultat_korime = $rezultat_korime->num_rows;


    if ($rezultat_korime)
    {

        $korErr = "block";
        $predaja1 = false;
        return false;
    }
    else {
        $korErr = "none";
        $predaja1=true;
        return true;
    }
}

function cap(){
    global  $capErr, $predaja1, $captcha;
    if(isset($_POST['g-recaptcha-response']))
        $captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
        $capErr = "block";
        $predaja1 = false;
        return false;

    }

    $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdTsx8UAAAAAMcOoX6pTVuLi42zFIxOptkP1Z8r&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

    if($response['success'] == false)
    {
        $capErr = "block";
        $predaja1 = false;
        return false;
    }
    else{
        $capErr = "none";
        $predaja1 = true;
        return true;
    }

}

function imeProvjera($input){
    global $predaja1;

    if (empty($_POST[$input]))
    {
        $predaja1 = false;
        return  "block";
    }
    else {
        $predaja1=true;
        return "none";
    }
}






?>

<!DOCTYPE html>

<html lang="hr">

<head>
    <title>Registracija</title>
    <meta charset="UTF-8">
    <meta name="title" content="Registracija">
    <meta name="keywords" content="WebDiP,html,css,prva_vjezba">
    <meta name="author" content="Matija Ljescanin">
    <meta name="date" content="07/03/2017">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/matljesca.css">
    <link rel="icon" type="img/ico" href="img/fav.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<header class="header">
    <figure id="leti" >
        <img id="leti1" src="img/material.png" alt="logo" >
        <figcaption></figcaption>
    </figure>

    <button id="menu_button" ><i id="menu_button1" class="material-icons">menu</i></button>

    <h1>Registracija</h1>
</header>
<div class="notifications-wrapper">

</div>
<nav class="nav">
    <ul>
        <li id="nav0"><strong><a href="./index.php" > <i id="nav1" class="material-icons">home</i>Početna</a></strong></li>
        <li id="nav1"><a href="./o_autoru.html"> <i id="nav2" class="material-icons">add_shopping_cart</i>O Autoru</a></li>
        <li id="nav2"><a href="./dokumentacija.html"> <i id="nav3" class="material-icons">view_list</i>Dokument</a></li>
        <li id="nav3"><a href="./prijava.php"> <i id="nav4" class="material-icons">group</i>prijava</a></li>
        <li id="nav5"  class="aktivni"><a href="./registracija.php"> <i id="nav6" class="material-icons">group_add</i>Registracija</a></li>

    </ul>
</nav>


<section class="sekcija">
    <h6>.</h6>
    <form  class="reg_form" action="registracija.php" method="post">
        <p>
            <label for="ime" > Ime: </label>
            <input id="ime" name="ime" type="text" placeholder="Ime"/>
        </p>
        <p id="error7" class="error" style="display: <?php echo $imeErr;?>" >Ime krivo!</p>
        <p>
            <label for="prezime" > Prezime: </label>
            <input id="prezime" name="prezime" type="text" placeholder="Prezime" />
        </p>
        <p id="error8" class="error" style="display: <?php echo $preErr;?>" >Prezime krivo!</p>
        <p>
            <label for="koris" > Korisničko ime: </label>
            <input id="koris" name="koris" type="text" placeholder="Korisničko ime" />
        </p>
        <p id="error9" class="error" style="display: <?php echo $korErr;?>" >Korisničko ime postoji</p>
        <p>
            <label for="email" > Email: </label>
            <input id="email" name="email" type="email" placeholder="Email" />
        </p>
        <p id="error10" class="error" style="display: <?php echo $emaErr;?>" >Unesite validan email ili već postoji!</p>
        <p>
            <label for="lozinka" > Lozinka: </label>
            <input id="lozinka" name="lozinka" type="password" placeholder="Lozinka" />
        </p>
        <p id="error11" class="error" style="display: <?php echo $lozErr;?>" >Lozinka nije ispravna!</p>
        <p>
            <label for="lozinka_p" > Potvrda loznike </label>
            <input id="lozinka_p" name="lozinka_p" type="password" placeholder="Potvrda lozinke" />
        </p>
        <p id="error12" class="error" style="display: <?php echo $lozpErr;?>" >Lozinka ne odgovara!</p>

        <p>
            <label for="twoStepIn" > Two-step: </label>
            <input id="twoStepIn" name="twoStepIn" type="checkbox" value="1"/>
        </p>

        <div class="g-recaptcha" data-sitekey="6LdTsx8UAAAAAA1_49Pyu17piNMf9Uio1r0_2az8"></div>

        <p id="error13" class="error" style="display: <?php echo $capErr;?>" >Označite captcha!</p>

        <p class="form_gumb">
            <button class="gumb_prijava" name="registracija" value="registracija" type="submit"><i id="ikona" class="material-icons">&#xE163;</i>  REGISTRACIJA</button>
        </p>
        <p id="link" class="error" style="display: <?php echo $linErr;?>" ><?php $link; ?></p>
    </form>
</section>


<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/userCheck.js"></script>
</body>

</html>



