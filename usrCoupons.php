<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 27-Jun-17
 * Time: 17:03
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
$username= $_SESSION['username'];
$result = $baza->selectDB("SELECT c.title as 'tit', cs.title ,cs.value, cs.img_url, cs.pdf_url FROM  category c, coupons cs, coupon_category cc, users u WHERE cc.coupon_id=cs.coupon_id AND  cc.category_id=c.category_id and u.points>cs.value AND  u.username='$username' AND  cs.date_from<CURRENT_DATE AND cs.date_to>current_date GROUP BY 1,2");
$nesto[]="";
$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->assign("title" , "Kuponi akcija!");
$smarty->display("header.tpl");

$smarty->display('index_signed.tpl');
$smarty->display("navUsr.tpl");


foreach ($result as  $value){
    $data[$value["tit"]] [$value["title"]]= [$value["value"], $value["pdf_url"], $value["img_url"]];
}


foreach ($data as $key => $value1 ){

    echo "<h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>".$key."</h2>"."<div style='float: left; max-width: none; '>";

    foreach ($value1 as $keys => $nes){
        $title=substr($keys, 4);
        $smarty->assign("naslov",$title);
        $first=substr($keys, 0, 3);
        $smarty->assign("opis",$nes[0]);
        $smarty->assign("pdf",$nes[1]);
        $smarty->assign("img",$nes[2]);
        $smarty->assign("firstNaslov", "$first");
        $smarty->assign("disable", "");
        $smarty->display("usrBoxCoupon.tpl");

    }
    echo "</div>";
}

$smarty->display("footer.tpl");

$baza->zatvoriDB();
