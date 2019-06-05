
<?php

session_start();
if(!isset($_SESSION['admin_id']))
{
    header('Location: ../../admin_login.php');
    exit();
}
require_once('../dbcon.php');


$officer_id=$_POST['officer_id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$contact=(int)$_POST['contact'];
$age=(int)$_POST['age'];
$designation=$_POST['designation'];
$address=$_POST['address'];
$pin=(int)$_POST['pin'];
$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));




function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 
//If I want a 4-digit PIN code.
$pwd = (int)generatePIN();






$sql = "INSERT INTO `officer` values(?,?,?,?,?,?,?,?,?,?)";
// echo $sql;
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"sssiissiib",$officer_id,$name,$sex,$contact,$age,$designation,$address,$pin,$pwd,$img);

$result=mysqli_stmt_execute($stmt);
if($result)
{
   header('Location: ../../admin_addofficer.php?err=0');
   exit();
}
else{
    header('Location: ../../admin_addofficer.php?err=1');
        exit();
}

mysqli_stmt_close($stmt);

mysqli_close($conn);








?>