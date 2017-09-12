<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 12-Jun-17
 * Time: 22:06
 */


include_once 'baza.php';



    function writeLog($title, $desc )
    {
        $database = new baza();
        $database->spojiDB();




        if(isset($_SESSION["username"])){
            $user = $_SESSION["username"];
            $query = "INSERT INTO log  values (DEFAULT ,'$title','$desc','$user',now())";
            $database->updateDB($query);
        }
        else{
            $query = "INSERT INTO log  values (DEFAULT ,'$title','$desc','unknown',now())";
            $database->updateDB($query);
        }


        $database->zatvoriDB();
    }

?>
