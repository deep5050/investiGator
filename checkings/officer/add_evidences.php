<?php
session_start();
if(isset($_POST['submit']))
{
    $officer_id= $_SESSION['officer_id'];
  //  $e_no=(int) $_POST['e_no'];
    $case_id =(int) $_SESSION['case_id'];
    $description= $_POST['description'];
    $type= $_POST['type'];
    $strength= (int) $_POST['strength'];
    $date =$_POST['date'];
    $images= $_FILES['image']['name'];
    echo $images;
    $remark= $_POST['remark'];
    $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    require_once('../dbcon.php');
    $sql = "INSERT INTO evidences (Case_Id,Officer_Id,Description,Type,Strength,Date,Image,Remarks) values(?,?,?,?,?,?,?,?)";
    echo $sql;
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"isssisbs",$case_id,$officer_id,$description,$type,$strength,$date,$img,$remark);
    $result=mysqli_stmt_execute($stmt);
    if($result)
    {
        header('Location: ../../evidences.php?err=0');
        exit();
    }
    else{
        header('Location: ../../eidences.php?err=1');
        exit();
    }
    mysqli_stmt_close($stmt);

    mysqli_close($conn);
}


// if(isset($_SESSION['officer_id']) && isset($_POST['e_no']) && isset($_POST['case_id']) && isset($_POST['description']) && isset($_POST['type']) && isset($_POST['strength']) && isset($_POST['date']) && isset($_POST['image']) && isset($_POST['remark']) && isset($_POST['submit'])) 
// {
//     echo "kkkk";
//    
//     require_once('../dbcon.php');

// $sql = "INSERT INTO suspects (Sus_Id,Sus_Name,Sex,Contact,Age,'Address',Pin,Relation,Motive,'Rank','Image',Remarks,Case_Id,Officer_Id) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
// $stmt=mysqli_prepare($conn,$sql);
// mysqli_stmt_bind_param($conn,"sssiisissibsis",$suspect_id,$name,$sex,$contact,$age,$address,$pin,$relation,$motive,$rank,$img,$remark,$case_id,$officer_id);

// mysqli_stmt_execute($stmt);

// $dd =mysqli_stmt_fetch($stmt);
// echo $dd;

// mysqli_stmt_close($stmt);
    


// }


?>