<?php


session_start();
if(!isset($_SESSION['admin_id']))
{
    header('Location: ../../admin_login.php');
    exit();
}
require_once('../dbcon.php');


$title=$_POST['title'];
$summary=$_POST['summary'];
$fir_date=$_POST['date'];
$admin_id=$_SESSION['admin_id'];

$sql = "INSERT INTO `case` (Title,Summary,Date_Of_FIR,Admin_Id) values(?,?,?,?)";
echo $sql;
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"ssss",$title,$summary,$fir_date,$admin_id);

$result=mysqli_stmt_execute($stmt);
if($result)
{
    header('Location: ../../admin_dashboard.php?err=0');
    exit();
}
else{
     header('Location: ../../admin_dashboard.php?err=1');
        exit();
}

mysqli_stmt_close($stmt);

mysqli_close($conn);







?>