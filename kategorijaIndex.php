<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 09-Jun-17
 * Time: 19:04
 */

require 'libs/Smarty.class.php';
require_once("baza.php");
$smarty = new Smarty;
$kate = $_GET["kate"];
$baza = new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT s.name FROM category c, service s WHERE c.category_id=s.category AND c.title='$kate' LIMIT 3");
$data = mysqli_fetch_assoc($result);

$smarty->assign("title","Top 3 usluge");
$smarty->display("head.tpl");
$smarty->display("section.tpl");

foreach ($result as $value ){
    $title=$value["name"];
    $first=substr($title, 0, 1);
    $smarty->assign("naslov","$title");
    $smarty->assign("firstNaslov", "$first");
    $smarty->assign("opis","");
    $smarty->assign("disable", "pointer-events: none;");
    $smarty->display("box.tpl");
}

$baza->zatvoriDB();


