<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 16-Jun-17
 * Time: 01:26
 */
require 'libs/Smarty.class.php';
require_once("baza.php");

session_start();
if(!isset($_SESSION['username'])){
    header("Location:prijava.php");
}
$username =  $_SESSION['username'];
$baza= new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT c.category_id, c.title FROM category c, user_category uc, users u WHERE uc.category_id=c.category_id AND  uc.user_id=u.id AND  u.username='$username'");

foreach ($result as  $value){
    $data[$value["category_id"]]=$value["title"];
}

$smarty = new Smarty;

$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->assign("title" , "Dodaj uslugu");
$smarty->display("header.tpl");
$smarty->assign('myOptions', $data
);
$smarty->assign('mySelect', 1);
$smarty->display("modAddService.tpl");