<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 11-Jun-17
 * Time: 08:36
 */


include_once ('../baza.php');
$table= $result = "";

$database = new baza();
$database->spojiDB();

$searchUsers = "SELECT username, name, surname, mail, password FROM users ";
$allUsers = $database->selectDB($searchUsers);


$table.= "<table>
    <tr>
        <th>Korisničko ime</th>
        <th class='drugi'> Ime</th>
        <th class='treci'>Prezime</th>
        <th class='cetvrti'>Email</th>
        <th class='peti'>Password</th>
    </tr>";
    foreach ($allUsers as $result){
    $table.= "<tr>";
        $user = $result["username"];
        $name = $result["name"];
        $table.= "<td>" . $user . "</td>";
        $table.= "<td class='drugi'>" . $name . "</td>";
        $table.= "<td class='treci'>" . $result['surname'] . "</td>";
        $table.= "<td class='cetvrti'>" . $result['mail'] . "</td>";
        $table.= "<td class='peti'>" . $result['password'] . "</td>";
        $table.= "</tr>";
    }
    $table.= "</table>";

?>

<!DOCTYPE html>

<html lang="hr">
<head>
    <title>Popis proizvoda</title>
    <meta charset="UTF-8">
    <meta name="title" content="Popis proizvoda">
    <meta name="keywords" content="WebDiP,html,css,prva_vjezba">
    <meta name="author" content="Matija Ljescanin">
    <meta name="date" content="07/03/2017">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/matljesca.css">
    <link rel="icon" type="img/ico" href="../img/fav.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header class="header">
    <figure id="leti" >
        <img id="leti1" src="../img/material.png" alt="logo" usemap="#Map">
        <figcaption></figcaption>
    </figure>
    <map name="Map" id="Map">
        <area alt="Lijevo" title="Lijevo" href="index.php" shape="rect" coords="0,0,40,80" />
        <area alt="Desno" title="Desno" href="index.php" shape="rect" coords="0,0,80,80" target="a" />
    </map>


    <h1>Popis proizvoda</h1>
</header>



<section class="sekcija">
    <h6>.</h6>
    <?php echo  $table  ?>
</section>

<footer class="footer">
    <p>Vrijeme potrebno: 4 sata</p>
    <figure>
        <a href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2016/zadaca_02/matljesca/matljesca.css"><img src="../img/CSS3.png" alt="CSS3" ></a>
        <figcaption></figcaption>
    </figure>
    <figure>
        <a href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2016/zadaca_02/matljesca/popis_proizvoda.html"><img src="../img/HTML5.png" alt="HTML5"></a>
        <figcaption></figcaption>
    </figure>
</footer>

</body>
</html>
