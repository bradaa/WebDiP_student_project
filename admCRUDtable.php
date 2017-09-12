<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 14-Jun-17
 * Time: 22:56
 */

session_start();
if(!isset($_SESSION['username']) && $_SESSION['role']<3){
    header("Location:index_signed.php");
}

require 'libs/Smarty.class.php';
require_once("baza.php");
$table = "";
if(isset($_GET["table"]))
    $table = $_GET["table"];

$smarty = new Smarty;
$baza = new baza();
$baza->spojiDB();
$result = $baza->selectDB("SELECT * FROM $table");
while($row = mysqli_fetch_assoc($result)){
    global  $data;
    $data[] = $row;
}

$smarty->assign("title","CRUD");
$smarty->assign("gumb", "block");
$smarty->display("head.tpl");
$smarty->assign("data", $data);
$smarty->assign("tblName",$table);
$smarty->display("admCRUDtable.tpl");
$smarty->display("footer.tpl");

$baza->zatvoriDB();