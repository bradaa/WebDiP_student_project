<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 14-Jun-17
 * Time: 22:06
 */
require 'libs/Smarty.class.php';
require_once("baza.php");

session_start();
if(!isset($_SESSION['username']) && $_SESSION['role']<3){
    header("Location:prijava.php");
}
/*$baza= new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT id, concat(name,' ',surname) as 'ime' FROM users WHERE role=2");

foreach ($result as  $value){
    $data[$value["id"]]=$value["ime"];

}*/
$result=array("category", "service", "roles", "reservation", "users", "coupons", "log", "user_category", "user_coupons", "user_settings");
$smarty = new Smarty;

$smarty->assign("title","CRUD");
$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->display("header.tpl");
$smarty->display("navAdm.tpl");
$smarty->display("section.tpl");
foreach ($result as $value ){
    $title=$value;

    $first=substr($title, 0, 1);
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","");
    $smarty->assign("firstNaslov", "$first");
    $smarty->assign("disable", "");
    $smarty->display("admCRUD.tpl");
}
$smarty->display("footer.tpl");
//$baza->zatvoriDB();