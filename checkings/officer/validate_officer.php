<?php
session_start();



if(isset($_POST['submit']))
{
    
include_once('../dbcon.php');
$email = $_POST["email"];
$email =stripslashes($email);
$pwd=$_POST["password"];
$pwd=stripslashes($pwd);


$sql = "SELECT Officer_Id,Officer_Pwd,Officer_Name,Designation FROM officer WHERE Officer_Id='$email'";
//echo($sql);

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1)
{

    while($row = mysqli_fetch_assoc($result)) {
       // $row = mysqli_fetch_row($result);
		$db_id= $row['Officer_Id'];
        $db_pass = $row['Officer_Pwd'];
        echo $db_id;
        echo $db_pass;
        if($db_pass==$pwd)
        {
            
            $_SESSION['officer_id'] = $db_id;
            $_SESSION['officer_name']=$row['Officer_Name'];
            //$_SESSION['officer_Address'] = $row['Address'];
            $_SESSION['officer_desig']=$row['Designation'];
            header('Location: ../../officer_dashboard.php');
            //echo $db_pass;
            exit();
        }
     }
		
    }
        
    else {
      header('Location: ../../homepage.php?error=1');
      exit();
    }
    

mysqli_close($conn);
}

?>