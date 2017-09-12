<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 14-Jun-17
 * Time: 17:25
 */
require 'libs/Smarty.class.php';
require_once("baza.php");

session_start();
if(!isset($_SESSION['username']) && $_SESSION['role']<3){
    header("Location:prijava.php");
}
$baza= new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT id, concat(name,' ',surname) as 'ime' FROM users WHERE role=2");

foreach ($result as  $value){
    $data[$value["id"]]=$value["ime"];

}

$smarty = new Smarty;

$smarty->assign("title","Kreiranje Kategorija");
$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->display("header.tpl");
$smarty->display("navAdm.tpl");
$smarty->assign('myOptions', $data
);
$smarty->assign('mySelect', 1);
$smarty->display("admCreateCategory.tpl");

$baza->zatvoriDB();