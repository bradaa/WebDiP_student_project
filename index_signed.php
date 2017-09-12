<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 08-Jun-17
 * Time: 21:07
 */

session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}

require 'libs/Smarty.class.php';
require_once("baza.php");
$smarty = new Smarty;
$baza = new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT c.title, s.name ,s.description FROM  category c, service s WHERE c.category_id=s.category GROUP BY 1,2");
$nesto[]="";
$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->assign("title" , "Početna");
$smarty->display("header.tpl");


$smarty->display('index_signed.tpl');


if($_SESSION["role"]==2)
$smarty->display("navMod.tpl");
elseif ($_SESSION["role"]==1)
    $smarty->display("navUsr.tpl");
elseif ($_SESSION["role"]==3)
    $smarty->display("navAdm.tpl");

foreach ($result as  $value){
    $data[$value["title"]] [$value["name"]]= $value["description"];
}


foreach ($data as $key => $value1 ){

    echo "<h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>".$key."</h2>"."<div style='float: left; max-width: none; '>";

    foreach ($value1 as $keys => $nes){
    $smarty->assign("naslov",$keys);
    $first=substr($keys[0], 0, 1);
    $smarty->assign("opis",$nes);
    $smarty->assign("firstNaslov", "$first");
    $smarty->assign("disable", "");
    $smarty->display("box_category.tpl");

    }
    echo "</div>";
}

$smarty->display("footer.tpl");

$baza->zatvoriDB();
