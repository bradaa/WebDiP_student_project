<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location:index_signed.php");
}

require 'libs/Smarty.class.php';
require_once("baza.php");

$smarty = new Smarty;
$baza = new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT c.title, c.description FROM service s, category c WHERE c.category_id=s.category GROUP BY 1,2");


$smarty->assign("title" , "Početna");
$smarty->display('index.tpl');

foreach ($result as $value ){
    $title=$value["title"];
    $desc=$value["description"];
    $first=substr($title, 0, 1);
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("firstNaslov", "$first");
    $smarty->assign("disable", "");
    $smarty->display("box.tpl");
}

$smarty->display("footer.tpl");

$baza->zatvoriDB();
?>



