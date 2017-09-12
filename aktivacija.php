<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 02-May-17
 * Time: 10:26
 */
require_once("baza.php");

$database = new baza();
$database->spojiDB();
if(!empty($_GET["id"])) {
    $findUser = "SELECT * FROM users WHERE activation_id='" . $_GET["id"] . "' ";
    $findUserRes = $database->selectDB($findUser);
    $findUserRes = mysqli_num_rows($findUserRes);
    if ($findUserRes > 0) {
        $query = "UPDATE users set status = 'active' WHERE activation_id='" . $_GET["id"] . "'";
        $result = $database->updateDB($query);
        if (!empty($result)) {
            echo "Vaš račun je aktiviran! Molim pričekajte...";
            header("refresh:3;url=prijava.php");

        } else {
            echo "Dogodio se problem pri aktivaciji! Molim pričekajte...";
            header("refresh:3;url=registracija.php");
        }
    }
}
$baza->zatvoriDB();