<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 12-Jun-17
 * Time: 04:01
 */
require 'libs/Smarty.class.php';
require_once("baza.php");
require ("database_log.php");
session_start();
//if(!isset($_SESSION['username'])){
//    header("Location: prijava.php");
//}


$usrVal = $_SESSION['username'];
$smarty = new Smarty;
$kate = "";
if(isset($_GET["kate"]))
$kate = $_GET["kate"];

$smarty->assign("title", "Rezervacija");
$smarty->display("head.tpl");
$smarty->assign("username","$usrVal");
$smarty->assign("ser", "$kate");
$smarty->display("rezervacija.tpl");
