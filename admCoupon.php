<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 28-Jun-17
 * Time: 16:28
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
$result = $baza->selectDB("SELECT category_id, title FROM category ");

foreach ($result as  $value){
    $data[$value["category_id"]]=$value["title"];
}

$smarty = new Smarty;

$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->assign("title" , "Kreiraj kupon");
$smarty->display("header.tpl");
$smarty->assign('myOptions', $data
);
$smarty->assign('mySelect', 1);
$smarty->display("admCoupon.tpl");