


<?php

session_start();
session_start();
if(!isset($_SESSION['admin_id']))
{
    header('Location: ../../admin_login.php');
    exit();
}
require_once('../dbcon.php');


$officer_id=$_POST['officer_id'];
$case_id=(int)$_POST['case_id'];




$sql = "INSERT INTO `assigns` (Case_Id,Officer_Id) values(?,?)";
echo $sql;
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"is",$case_id,$officer_id);

$result=mysqli_stmt_execute($stmt);
if($result)
{
    header('Location: ../../admin_add_caseofficer.php?err=0');
    exit();
}
else{
     header('Location: ../../admin_add_caseofficer.php?err=1');
        exit();
}

mysqli_stmt_close($stmt);

mysqli_close($conn);










?>