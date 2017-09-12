<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 28-Jun-17
 * Time: 14:04
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
$result = $baza->selectDB("SELECT co.coupon_id, co.title FROM category c, coupons co , user_category uc, users u, coupon_category cc WHERE co.coupon_id=cc.coupon_id and cc.category_id=uc.category_id AND uc.category_id=c.category_id AND  uc.user_id=u.id AND  u.username='$username'");

foreach ($result as  $value){
    $data[$value["coupon_id"]]=$value["title"];
}

$smarty = new Smarty;

$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->assign("title" , "Provjeri kupon");
$smarty->display("header.tpl");

$smarty->display("modCheckCoupon.tpl");