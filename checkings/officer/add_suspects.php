<?php
session_start();
if(isset($_SESSION['officer_id']) )
{
 
    $suspect_id =$_POST['suspect_id'];
    $case_id=$_POST['case_id'];
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $pin=$_POST['pin'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $case_id=(int) $_POST['case_id'];
    $officer_id=$_SESSION['officer_id'];
    $rank=(int) $_POST['rank'];
    $remark=$_POST['remark'];
    $contact =(int) $_POST['contact'];
    $relation = $_POST['relation'];
    $motive=$_POST['motive'];

    $img = file_get_contents($_FILES['image']['tmp_name']);

    require_once('../dbcon.php');

$sql = "INSERT INTO suspects values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"sssiisissibsis",$suspect_id,$name,$sex,$contact,$age,$address,$pin,$relation,$motive,$rank,$img,$remark,$case_id,$officer_id);

$result=mysqli_stmt_execute($stmt);
if($result){
    header('Location: ../../suspects.php?case='.$case_id.'&err=0');
    exit();
}
else{
    header('Location: ../../suspects.php?case='.$case_id.'&err=1');
    exit();
}

// $dd =mysqli_stmt_fetch($stmt);
// echo $dd;

mysqli_stmt_close($stmt);
    

}
else
{
    //
}
mysqli_close($conn);

?>