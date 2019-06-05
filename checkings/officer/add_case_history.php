<?php
session_start();
if(isset($_POST['submit']))
{
    $officer_id= $_SESSION['officer_id'];
   $entry_no=(int) $_POST['entry_no'];
    $case_id =(int) $_POST['case_id'];
    $date=$_POST['date'];
    $progress=$_POST['progress'];
    $status=$_POST['status'];
   
    require_once('../dbcon.php');
    $sql = "INSERT INTO case_log (Entry_No,Case_Id,Officer_Id,Date,Progress_Info,Case_Status) values(?,?,?,?,?,?)";
    echo $sql;
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"iissss",$entry_no,$case_id,$officer_id,$date,$progress,$status);
    $result=mysqli_stmt_execute($stmt);
    if($result)
    {
        header('Location: ../../casehistory.php?err=0');
        exit();
    }
    else{
        header('Location: ../../casehistory.php?err=1');
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