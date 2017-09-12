<?php
/**
 * Created by IntelliJ IDEA.
 * User: ljesc
 * Date: 09-Jun-17
 * Time: 14:00
 */

require_once 'baza.php';
session_start();
$database = new baza();
$database->spojiDB();
if(isset($_POST["koris"])) {
    $userVal = $_POST["koris"];
    $userValQuery = "SELECT username FROM users WHERE username='$userVal'";
    $checker = $database->selectDB($userValQuery);
    $num = mysqli_num_rows($checker);
    if ($num > 0) {
        print 1;
    } else {
        print "success";
    }
}

if(isset($_POST["email"])) {
    $userVal = $_POST["email"];
    $userValQuery = "SELECT username FROM users WHERE mail='$userVal'";
    $checker = $database->selectDB($userValQuery);
    $num = mysqli_num_rows($checker);
    if ($num > 0) {
        print 1;
    } else {
        print "success";
    }
}

if (isset($_POST["rezerviraj"])&&isset($_POST["service"])&&isset($_POST["date"])&&isset($_POST["time"])){
  $username = $_POST["rezerviraj"];
   $servic = $_POST["service"];
   $date = $_POST["date"]." ".$_POST["time"].":00";


    $userValQuery = "SELECT id FROM users  WHERE username='$username'";
    $checker3 = $database->selectDB($userValQuery);
    $userid=mysqli_fetch_assoc($checker3);
    $userid=$userid["id"];
    $userValQuery = "SELECT service_id FROM service WHERE name='$servic'";
    $checker4 = $database->selectDB($userValQuery);
    $servic_id=mysqli_fetch_assoc($checker4);
    $servic_id=$servic_id["service_id"];

  $userValQuery = "SELECT 1 FROM reservation r, users u WHERE u.username='$username' AND u.id=r.user_id AND r.date_from='$date'";
    $checker = $database->selectDB($userValQuery);
    $checker = mysqli_num_rows($checker);
    $userQuery =  "SELECT 1 FROM reservation r, service s WHERE s.name='$servic' AND r.service_id=s.service_id AND r.date_from<'$date' AND '$date'<r.date_to AND r.status=1";
    $checker2 = $database->selectDB($userQuery);
    $checker2 = mysqli_num_rows($checker2);

    if($checker||$checker2){
        $data = array('error' => 'There was an error uploading your files');
        echo json_encode($data);

    }
    else{
        echo false;
        $userQuery =  "INSERT INTO reservation VALUES (DEFAULT ,'$servic_id','$userid', DEFAULT ,'$date', DEFAULT ,DEFAULT )";
        $checker2 = $database->updateDB($userQuery);
    }
}

if (isset($_POST["catTitle"])&&isset($_POST["desc"])&&isset($_POST["mod"])){
    $cat=$_POST["catTitle"];
    $desc=$_POST["desc"];
    $mod=$_POST["mod"];

    $userValQuery = "INSERT INTO category VALUES (DEFAULT, '$cat','$desc',DEFAULT )";
    $checker3 = $database->updateDB($userValQuery);
    $userQuery =  "SELECT category_id FROM category WHERE title='$cat'";
    $checker2 = $database->selectDB($userQuery);
    $catid=mysqli_fetch_assoc($checker2);
    $catid=$catid["category_id"];
    $catid = intval($catid);
    $mod = intval($mod);
    $userValQuery1 = "INSERT INTO user_category VALUES ($mod, $catid ,DEFAULT ,1 )";
    $checker3 = $database->updateDB($userValQuery1);
    print 1;
}

// Admin Update
if (isset($_POST["value"])&&isset($_POST["colname"])&&isset($_POST["tblname"])&&isset($_POST["fircol"])&&isset($_POST["id"])){
    $value=$_POST["value"];
    $colname=$_POST["colname"];
    $tblName=$_POST["tblname"];
    $fircol=$_POST["fircol"];
    $id=intval($_POST["id"]);

    $userValQuery1 = "UPDATE $tblName SET $colname='$value' WHERE $fircol=$id";

    $checker3 = $database->updateDB($userValQuery1);

    print 1;
}
if (isset($_POST["tblname"])&&isset($_POST["fircol"])&&isset($_POST["idDelete"])) {
    $tblName=$_POST["tblname"];
    $fircol=$_POST["fircol"];
    $id=intval($_POST["idDelete"]);

    $userValQuery1 = "DELETE FROM $tblName WHERE $fircol=$id";
    $checker3 = $database->updateDB($userValQuery1);

    print 1;
        }

if (isset($_POST["addRow"])) {
    $tblName = $_POST["addRow"];
    $i=0;

    $userValQuery1 = "INSERT INTO $tblName VALUES ()";
    $checker3 = $database->updateDB($userValQuery1);

    $userQuery =  "SELECT * FROM $tblName ORDER BY 1 DESC LIMIT 1 ";
    $checker = $database->selectDB($userQuery);
    $checker = mysqli_fetch_assoc($checker);
    foreach ($checker as $key => $value )
        $data[$i++]=$value;
    print intval($data[0]);
}

if (isset($_POST["serTitle"])&&isset($_POST["desc"])&&isset($_POST["cat"])&&isset($_POST["duration"])){
    $ser=$_POST["serTitle"];
    $desc=$_POST["desc"];
    $cat=intval($_POST["cat"]);
    $duration=$_POST["duration"];


    $userValQuery = "INSERT INTO service VALUES (DEFAULT, '$ser', '$desc',DEFAULT ,'$duration',DEFAULT ,DEFAULT ,$cat)";
    $checker3 = $database->updateDB($userValQuery);

    print 1;
}

if (isset($_POST["couponid"])&&isset($_POST["value"])&&isset($_POST["datefrom"])&&isset($_POST["dateto"])){
    $ser=intval($_POST["couponid"]);
    $desc=intval($_POST["value"]);
    $cat=$_POST["datefrom"];
    $duration=$_POST["dateto"];


    $userValQuery = "UPDATE coupons SET value='$desc', date_from='$cat', date_to='$duration' WHERE coupon_id='$ser'";
    $checker3 = $database->updateDB($userValQuery);

    print 1;
}



if(isset($_POST["share"])&&isset($_SESSION["username"])){
   $username= $_SESSION['username'];
    $userValQuery = "UPDATE users SET points=points+5, points_all=points_all+5 WHERE username=$username";
    $checker3 = $database->updateDB($userValQuery);

    $userValQuery = "INSERT INTO log VALUES (DEFAULT, 'FACE_SHARE','korisnik je podjelio sadržaj', '$username',current_timestamp )";
    $checker3 = $database->updateDB($userValQuery);


}

if(isset($_POST["brbodova"])&&isset($_SESSION["username"])){
    $username= $_SESSION['username'];

    $userQuery =  "SELECT points FROM users WHERE username='$username' ORDER BY 1 DESC LIMIT 1 ";
    $checker = $database->selectDB($userQuery);
    $checker = mysqli_fetch_assoc($checker);

    print $checker["points"];
}

if (isset($_POST["status"])&&isset($_POST["username"])) {
    $username = $_POST["username"];
    $status = $_POST["status"];
    print $status;
    if ($status=="active"){
        $userValQuery = "UPDATE users SET status='block' WHERE username='$username'";
        $checker3 = $database->updateDB($userValQuery);
    }
    else{
        $userValQuery = "UPDATE users SET status='active', sign_attemp=0 WHERE username='$username'";
        $checker3 = $database->updateDB($userValQuery);

    }
    print 1;
}

if (isset($_POST["modCheckCoupon"])){
    $code=$_POST["modCheckCoupon"];

    $userQuery =  "SELECT 1 FROM coupons WHERE code='$code' AND date_from<CURRENT_DATE AND date_to>current_date ";
    $checker = $database->selectDB($userQuery);
    $checker = mysqli_fetch_assoc($checker);

    print $checker;

}









$database->zatvoriDB();