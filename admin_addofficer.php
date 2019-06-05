<?php
session_start();

if(isset($_SESSION['admin_id']))
{
    $officer_id = $_SESSION['admin_id'];
    // $officer_name = $_SESSION['officer_name'];
    // //$officer_address=$_SESSION['officer_address'];
    // $officer_desig=$_SESSION['officer_desig'];

}
else
{
    header('Location: ./homepage.php');
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
    <title>Admin Dashboard</title>

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
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="./checkings/admin/add_cases.php">
                                <i class="fas fa-tachometer-alt"></i>Add Case</a>
                        </li>
                        <li>
                            <a href="./checkings/admin/add_officer.php">
                                <i class="fas fa-chart-bar"></i>Add Officer</a>
                        </li>
                        <li>
                            <a href="./checkings/admin/add_case_officer.php">
                                <i class="fas fa-table"></i>Add Case Officer</a>
                        </li>
                        <li>
                            <a href="./checkings/admin/add_result.php">
                                <i class="far fa-check-square"></i>Add Result</a>
                        </li>
                        <li>
                            <a href="admin_view_case_history.php">
                                <i class="far fa-check-square"></i>View Case History</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="./admin_dashboard.php">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="./checkings/admin/add_case.php">
                                <i class="fas fa-tachometer-alt"></i>Add Case</a>
                        </li> -->
                        <li>
                            <a href="./admin_addofficer.php">
                                <i class="fas fa-chart-bar"></i>Add Officer</a>
                        </li>
                        <li>
                            <a href=".admin_add_caseofficer.php">
                                <i class="fas fa-table"></i>Add Case Officer</a>
                        </li>
                        <li>
                            <a href="./checkings/admin/add_result.php">
                                <i class="far fa-check-square"></i>Add Result</a>
                        </li>
                        <!-- <li>
                            <a href="admin_casehistory.php">
                                <i class="far fa-check-square"></i>View Case History</a>
                        </li> -->



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
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
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
                                    <div class="noti__item js-item-menu">
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
                                            <div class="email__item">
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
                                    <div class="noti__item js-item-menu">
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
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['admin_id']?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                  
                                                    <span class="email"><?php echo $_SESSION['admin_id']?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                               
                                              <!-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            --> 
                                                
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
                                    <div class="card-body text-secondary"><button type="button"
                                            class="btn btn-success btn-lg btn-block" data-toggle="modal"
                                            data-target="#addmodal">Add Entry</button>

                                </section>
                            </div>

                        </div>





                                <div class="row">

                                 <div class="col-md-12">
                            <!-- <div class="card">
                                <div class="card-body">
                                    <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                        <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                        <div class="location text-sm-center">
                                            <i class="fa fa-map-marker"></i> California, United States</div>
                                    </div>
                                   
                              
                                </div>
                               
                            </div> -->
                        </div>
                                </div>



                                <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>name</th>
                                            <th>sex</th>
                                            <th>contact</th>
                                            <th>designation</th>
                                            <th>Address</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                       
                            $sql="SELECT  * FROM `officer` WHERE 1";
                                              //  echo $sql;


                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result)>0)
                        {
                        
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                               // echo "found";
                            //    $anchor="<a href=./suspects.php?case=".$row['case']
                              echo '<tr>';
                              echo '<td>'.$row['Officer_Id'].'</td>';
                              echo '<td>'.$row['Officer_Name'].'</td>';
                              echo '<td>'.$row['Sex'].'</td>';
                              echo '<td>'.$row['Contact'].'</td>';
                              echo '<td>'.$row['Designation'].'</td>';
                              echo '<td>'.$row['Address'].'</td>';
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
    </div>
    </div>
    </div>
    </div>
    <!-- END PAGE CONTAINER-->

    </div>





    
    <!-- modal large -->
    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
        aria-hidden="true">
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
                                    <div class="card-header">Add Officer</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"></h3>
                                        </div>
                                        <hr>
                                        <form action="./checkings/admin/add_officer.php"  method="post" novalidate="novalidate" enctype="multipart/form-data">
                                           
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">officer Id</label>
                                                <input required id="cc-pament" name="officer_id" type="officer_id" class="form-control" aria-required="true" aria-invalid="false" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">name</label>
                                                <input  required id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            </div>
                      
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">sex</label>
                                                <input  required id="cc-pament" name="sex" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                            
                                                <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">contact</label>
                                                <input  required id="cc-pament" name="contact" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>


                                            
                            
                            <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Age</label>
                            <input id="cc-pament" required  name="age" type="text" class="form-control" aria-required="true" aria-invalid="false"  required  >
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Designation</label>
                            <input id="cc-pament" required  name="designation" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">address</label>
                            <input id="cc-pament"  required name="address" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Pin</label>
                            <input id="cc-pament" required  name="pin" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">image</label>
                            <input id="cc-pament"  required name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
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
    <!-- end modal large -->







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
document.location='admin_dashboard.php';
})
</script>"
?>
</body>

</html>
<!-- end document-->