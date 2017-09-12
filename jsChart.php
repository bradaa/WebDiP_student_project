<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 04-Jul-17
 * Time: 07:43
 */

include_once 'baza.php';
$database = new baza();
$database->spojiDB();

$statsQuery = $baza->selectDB("SELECT username, name, surname, points, points_all, points-points_all as 'spent' FROM users");

$result = $database->selectDB($statsQuery);


$encodeToJson = array();
while($row = mysqli_fetch_assoc($result))
    $encodeToJson[] = $row['name'].",".$row['points'];

echo json_encode($encodeToJson);
