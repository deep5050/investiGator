
<?php
    session_start();
    if(isset($_SESSION['officer_id']) && isset($_GET['case']))
    {
        $case_id = $_GET['case'];
        $_SESSION['case_id']=$case_id;
    }else if(!isset($_GET['case']))
    {
        header('Location: officer_dashboard.php');
        exit();
    }else
    {
        headr('Location: homepage.php');
        exit();
    }

    require_once('./checkings/dbcon.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Suspects</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<style>.nodisplay{
 display:none;   
}</style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
           
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            <a href="./officer_dashboard.php">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                     
                        <li>
                            <a href="evidences.php">
                                <i class="fas fa-chart-bar"></i>Evidence</a>
                        </li>
                        <li>
                            <a href="casehistory.php">
                                <i class="fas fa-table"></i>Case History</a>
                        </li>
                        <li>
                            <a href="criminalrecords.php">
                                <i class="far fa-check-square"></i>Criminal Records</a>
                        </li>
                        <li>
                            <a href="criminalrecords.php">
                                <i class="far fa-check-square"></i>Prime Suspect</a>
                        </li>
                       
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
 
                                <input class="au-input au-input--xl nodisplay" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                           
                                   
                                </button>
                            
                            <?php echo '<h4>CASE ID: '.$case_id.'</h4>'?>
                            <div class="header-button ">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu nodisplay">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu nodisplay">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item nodisplay">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu nodisplay">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['officer_name'] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['officer_id'] ?></span>
                                                </div>
                                            </div>
                                          
                                            <div class="account-dropdown__footer">
                                                <a href="./checkings/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                  
                    <?php

if(isset($_GET['err']))
{
    if($_GET['err']=='1')
    {
        echo '<div class="alert alert-danger" role="alert">
        Something Went Wrong !!
      </div>';
    }
    else if($_GET['err']=='0')
    {
        echo '<div class="alert alert-success" role="alert">
        Successfully Inserted!!
      </div>';
    }
}
?>


<div class="row">
        <div class="col">
          <section class="card" style="background: none;border: 0px;">
            <div class="card-body text-secondary">
                    <button type="button" class="btn btn-primary btn-lg btn-block" id="refresh">Refresh</button>
                    
            </div>
          </section>
        </div>
        <div class="col">
          <section class="card" style="background: none;border: 0px;">
            <div class="card-body text-secondary"><button type="button" id="" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#addmodal">Add Entry</button>
                
          </section>
        </div>
        
      </div>


                            <div class="row">
                                    <div class="col-md-12">
                                            <!-- DATA TABLE-->
                                            <div class="table-responsive m-b-40">
                                                <table class="table table-borderless table-data3">
                                                    <thead>
                                                        <tr>
                                                            <th>suspect ID</th>
                                                            <th>Name</th>
                                                            <th>sex</th>
                                                            <th>contact</th>
                                                            <th>age</th>
                                                            <th>address</th>
                                                            <th>relation</th>
                                                            <th>motive</th>
                                                            <th>rank</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                        <?php

//$sql = "SELECT Case_Id,Title,Summary,Date_Of_FIR FROM case WHERE Case_Id = (SELECT Case_Id from assigns WHERE Officer_Id ='$officer_id' )";
$sql="SELECT  * FROM `suspects` WHERE Case_Id = $case_id";
//echo $sql;
if(isset($_GET['toogle']))
{
if($_GET['toogle']=='1')
{
    $sql="SELECT  Sus_Id,Sus_Name,Sex,Contact,Age,'Address',Relation,Motive,'Rank' FROM `suspects` WHERE Case_Id = $case_id  order by Sus_Id";
}
}

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{

    while($row = mysqli_fetch_assoc($result)) 
    {
    //    $anchor="<a href=./suspects.php?case=".$row['case']
      echo '<tr>';
      echo '<td>'.$row['Sus_Id'].'</td>';
      echo '<td>'.$row['Sus_Name'].'</td>';
      echo '<td>'.$row['Sex'].'</td>';
      echo '<td>'.$row['Contact'].'</td>';
      echo '<td>'.$row['Age'].'</td>';
      echo '<td>'.$row['Address'].'</td>';
      echo '<td>'.$row['Relation'].'</td>';
      echo '<td>'.$row['Motive'].'</td>';
      echo '<td>'.$row['Rank'].'</td>';
      echo '</tr>';
     }
}
else
{
    // echo '<div class="alert alert-warning" role="alert">
    //                 NO assgined Cases yet!!
    //               </div>';

    
}
mysqli_close($conn);
        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- END DATA TABLE-->
                                        </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
<!-- modal large -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">Add Suspects</div>
                                                        <div class="card-body">
                                                            <div class="card-title">
                                                                <h3 class="text-center title-2"></h3>
                                                            </div>
                                                            <hr>
                                                            <form action="./checkings/officer/add_suspects.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">Case ID</label>
                                                                   <?php echo '<input id="cc-pament" name="case_id" type="text" class="form-control" aria-required="true" aria-invalid="false" value='.$case_id.'>' ?>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">suspect ID</label>
                                                                    <input id="cc-pament" name="suspect_id" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">Name</label>
                                                                    <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">address</label>
                                                                    <input id="cc-pament" name="address" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">contact</label>
                                                                    <input id="cc-pament" name="contact" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">Age</label>
                                                                    <input id="cc-pament" name="age" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">Sex</label>
                                                                    <input id="cc-pament" name="sex" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">Pin</label>
                                                                    <input id="cc-pament" name="pin" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">Relation</label>
                                                                    <input id="cc-pament" name="relation" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">motive</label>
                                                                    <input id="cc-pament" name="motive" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">Rank</label>
                                                                    <input id="cc-pament" name="rank" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">image</label>
                                                                    <input id="cc-pament" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">remark</label>
                                                                    <input id="cc-pament" name="remark" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                                </div>
                                                                                                      
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <?php

    echo "<script>
document.getElementById('refresh').addEventListener('click',function(e){
    document.location='suspects.php?case=$case_id';
})
</script>"
?>

</body>

</html>
<!-- end document-->

