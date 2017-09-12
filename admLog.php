<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 16-Jun-17
 * Time: 11:36
 */

session_start();
if(!isset($_SESSION['username']) && $_SESSION['role']<3){
    header("Location:index_signed.php");
}

require 'libs/Smarty.class.php';
require_once("baza.php");
$smarty = new Smarty;
$baza = new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT * FROM log");
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

$smarty->assign("title","LOG");
$smartyUser = $_SESSION['username'][0];
$smarty->assign("gumb", "block");
$smarty->assign("user", $smartyUser);
$smarty->display("header.tpl");
$smarty->display("navAdm.tpl");
$smarty->display("section.tpl");
$smarty->assign("data", $data);
$smarty->display("admStatisticTable.tpl");
$smarty->display("footer.tpl");

$baza->zatvoriDB();