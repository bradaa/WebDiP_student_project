<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 30-Jun-17
 * Time: 20:20
 */
require_once 'baza.php';
session_start();
$database = new baza();
$database->spojiDB();
$data = array();
if(isset($_GET['files']))
{

    $error = false;
    $files = array();

    $uploaddir = './uploads/';
    foreach($_FILES as $file)
    {
        if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
        {
            $files[] = $uploaddir .$file['name'];
        }
        else
        {
            $error = true;
        }
    }
    $data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);

}
else
{
    if(isset($_POST['filenames']))
    $pdf=$_POST['filenames'];
    $title=$_POST['koris2'];
    $categoryid= intval($_POST['admCoupon']);

    $chars = "qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM";
    $genRandomChars="";
    for($i=0; $i<=8; $i++){
        $genRandomChars.=$chars[rand(0, strlen($chars)-1)];
    }

    $userValQuery = "INSERT INTO coupons VALUES (default,'$title',null,'$pdf[0]','$pdf[1]',NULL ,NULL ,NULL ,'$genRandomChars')";
    $checker3 = $database->updateDB($userValQuery);

    $userValQuery = "SELECT coupon_id FROM coupons WHERE title='$title'";
    $checker4 = $database->selectDB($userValQuery);
    $servic_id=mysqli_fetch_assoc($checker4);
    $servic_id=intval($servic_id["coupon_id"]);

    $userValQuery = "INSERT INTO coupon_category VALUES ($categoryid, $servic_id)";
    $checker3 = $database->updateDB($userValQuery);

    $data = array('success' => 'Form was submitted', 'formData' => $_POST);

}
echo json_encode($data);
$database->zatvoriDB();