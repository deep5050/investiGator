<?php
session_start();


if(isset($_POST['submit']))
{
    
include_once('../dbcon.php');
$email = $_POST["email"];
$email =stripslashes($email);
$pwd=$_POST["password"];
$pwd=stripslashes($pwd);


$sql = "SELECT Admin_Id,Admin_pwd FROM admin WHERE Admin_Id='$email'";
//echo($sql);

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1)
{

    while($row = mysqli_fetch_assoc($result)) {
       // $row = mysqli_fetch_row($result);
		$db_id= $row['Admin_Id'];
        $db_pass = $row['Admin_pwd'];
        echo $db_id;
        echo $db_pass;
        if($db_pass==$pwd)
        {
            
            $_SESSION['admin_id'] = $db_id;
            header('Location: ../../admin_dashboard.php');
            //echo $db_pass;
            exit();
        }
     }
		
    }
        
    else {
      header('Location: ../../admin_login.php?error=1');
      exit();
    }
    

mysqli_close($conn);
}

?>