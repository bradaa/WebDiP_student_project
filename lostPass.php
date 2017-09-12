<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 09-Jun-17
 * Time: 23:05
 */

include("baza.php");
require ("database_log.php");
session_start();
$genRandomChars="";

$lostPassMessageText = "Unesite email!";


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $get = $_POST["lostPass"];
    $baza = new baza();
    $baza->spojiDB();
    $result = $baza->selectDB("SELECT 1 FROM users WHERE mail='$get'");
    $result = $result->num_rows;

   if($result){
       $chars = "1234567890qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM";
       global $genRandomChars;
       $genRandomChars="";
       for($i=0; $i<=8; $i++){
           $genRandomChars.=$chars[rand(0, strlen($chars)-1)];
       }

       $Salt = "MatijaJeZakon";
       $sha1 = hash("sha1", ($Salt . $genRandomChars ));

       $baza->updateDB("UPDATE users SET password='$genRandomChars', password_hash='$sha1' WHERE mail='$get'");

       $sendTO =$get;
       $sentFrom= "From: matljesca@foi.hr";
       $sub = "Novi pass";
       $link = "$genRandomChars";
       $sadrzaj = "Tvoj novi pass je: ".$link."";
       writeLog("Lost_pass","user requested new password and was successful");
       mail($sendTO, $sub, $sadrzaj,$sentFrom);
       $lostPassMessageText = "Novi password je poslan na email";

   }
   else{
       $lostPassMessageText = "Email ne postoji";
       writeLog("Lost_pass","user requested new password and wasn't successful");

   }

    $baza->zatvoriDB();
}

?>

<!DOCTYPE html>

<html lang="hr">
<head>
    <title>Prijava</title>
    <meta charset="UTF-8">
    <meta name="title" content="Prijava">
    <meta name="keywords" content="WebDiP,html,css,prva_vjezba">
    <meta name="author" content="Matija Ljescanin">
    <meta name="date" content="07/03/2017">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/ico" href="img/fav.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
            background-color: transparent;
            width: 300px;
            height: 150px;
            margin: 0;


        }
        p{
            font-family: 'Roboto', 'Helvetica', sans-serif;
            background-color: transparent;
        }
        input{
            border: none;
            border-bottom: red solid 1px;
            outline: none;
            background-color: transparent;
        }
        button{
            margin-top: 20px;
            float: right;
            border: none;
            outline: none;
            cursor: pointer;
            background: #E91E63;
            color: white;
            padding: 4px 20px 5px;
            border-radius: 2px;
            font-size: 12px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        }
    </style>

</head>
<body >
<form class="reg_form" action="lostPass.php" method="post">
    <div style="margin-left: auto; margin-right: auto; width: 200px;height: 130px; background-color: transparent;">
        <p id="lostPassText"> <?php echo $lostPassMessageText." [novi_pass: ".$genRandomChars."]";?></p>
        <input  type="text" name="lostPass" title="nesto">
        <button class="gumb_prijava" type="submit" value="pošalji"> <i id="ikona" class="material-icons">send</i> </button>
    </div>
</form>


</body>
</html>