<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 10-Jun-17
 * Time: 00:56
 */
require ("database_log.php");
session_start();
writeLog("Log_out","user loged out");


session_destroy();
header("Location: index.php");