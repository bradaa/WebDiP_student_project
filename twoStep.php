<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 04-May-17
 * Time: 22:54
 */
include("baza.php");
session_start();

$get = $_SESSION["username"];
$baza = new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT activation_id FROM users WHERE username='$get'");
$result = mysqli_fetch_assoc($result);
$twoStepMessageText = "Unesite kod!";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["twoStepInput"]==$result["activation_id"]){
        $twoStepMessageText = "Uspješna prijava! Zatvorite prozor i nastavite ";
        $baza->updateDB("UPDATE users set activation_id=''");

    }
    else{
        $twoStepMessageText = "Krivi unos!";
    }

}
$baza->zatvoriDB();
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
    <form class="reg_form" action="twoStep.php" method="post">
        <div style="margin-left: auto; margin-right: auto; width: 200px;height: 130px; background-color: transparent;">
            <p id="twoStepText"> <?php echo $twoStepMessageText." kod: ".$result["activation_id"];?></p>
            <input  type="text" name="twoStepInput" title="nesto">
            <button class="gumb_prijava" type="submit" value="pošalji"> <i id="ikona" class="material-icons">send</i> </button>
        </div>
    </form>


</body>
</html>