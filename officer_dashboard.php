<?php
session_start();

if(isset($_SESSION['officer_id']))
{
    $officer_id = $_SESSION['officer_id'];
    $officer_name = $_SESSION['officer_name'];
    //$officer_address=$_SESSION['officer_address'];
    $officer_desig=$_SESSION['officer_desig'];

}
else
{
    header('Location: ./homepage.php');
    exit();
}

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
    <title>Officer's Dashboard</title>

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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
    .no-click {
        cursor: none;
    }
    </style>

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
        <aside class="menu-sidebar d-none d-lg-block no-click">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">

                            <i class="fas fa-tachometer-alt"></i>&nbsp;Suspects
                        </li>
                        <li>

                            <i class="fas fa-chart-bar"></i>&nbsp;Evidence
                        </li>
                        <li>

                            <i class="fas fa-table"></i>&nbsp;Case History
                        </li>
                        <li>

                            <i class="far fa-check-square"></i>&nbsp;Criminal Records
                        </li>
                        <li>

                            <i class="far fa-check-square"></i>&nbsp;Prime Suspect
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



                            <div class="header-button">

                                <div class="noti-wrap">


                                    <!-- <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span> -->
                                        <!-- <div class="notifi-dropdown js-dropdown">
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
                                            </div> -->
                                            <!-- <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div> -->
                                            <!-- <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div> -->
                                            <!-- <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                                <div class="account-wrap" style="float:right;">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $officer_name ?> </a>
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
                                                        <a href="#"><?php echo $officer_name ?> </a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['officer_id']?> </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">

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
                        <!--
                                <div class="map-wrap m-t-45 m-b-20">
                                    <div id="vmap" style="height: 284px;"></div>
                                </div>
                            -->

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg"
                                                alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1"> <?php echo $officer_name ?> </h5>
                                            <div class="location text-sm-center">
                                                <i class=""></i><?php echo $officer_desig ?> </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                         
                            <div class="col">
                                <section class="card" style="background: none;border: 0px;">
                                    <div class="card-body text-secondary"><button type="button" id="refresh"
                                            class="btn btn-success btn-lg btn-block">Refresh</button>

                                </section>
                               
                            </div>
                            <div class="col">
                                <section class="card" style="background: none;border: 0px;">
                                    <div class="card-body text-secondary"><button type="button" id="toggle"
                                            class="btn btn-danger btn-lg btn-block">Sort By Date</button></div>
                            </div>
                            </section>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">



                        <?php
                                        require_once('./checkings/dbcon.php');

                        ?>
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>Case ID</th>
                                            <th>Title</th>
                                            <th>summary</th>
                                            <th>date of FIR</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                        //$sql = "SELECT Case_Id,Title,Summary,Date_Of_FIR FROM case WHERE Case_Id = (SELECT Case_Id from assigns WHERE Officer_Id ='$officer_id' )";
                        $sql="SELECT  Case_Id,Title,Summary,Date_Of_FIR FROM `case` WHERE Case_Id = (SELECT Case_Id FROM assigns WHERE Officer_Id ='$officer_id')";
                        echo $sql;
                        if(isset($_GET['toogle']))
                        {
                        if($_GET['toogle']=='1')
                        {
                            $sql="SELECT  Case_Id,Title,Summary,Date_Of_FIR FROM `case` WHERE Case_Id = (SELECT Case_Id FROM assigns WHERE Officer_Id ='$officer_id') order by Date_Of_FIR";
                        }
                        }

                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result)>0)
                        {
                        
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                            //    $anchor="<a href=./suspects.php?case=".$row['case']
                              echo '<tr>';
                              echo '<td><a href="./suspects.php?case='.$row['Case_Id'].'">'.$row['Case_Id'].'</a></td>';
                              echo '<td>'.$row['Title'].'</td>';
                              echo '<td>'.$row['Summary'].'</td>';
                              echo '<td>'.$row['Date_Of_FIR'].'</td>';
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

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <!-- <script src="vendor/wow/wow.min.js"></script> -->
    <script src="vendor/animsition/animsition.min.js"></script>
    
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    
   
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="vendor/select2/select2.min.js"> </script>


    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script>

                        document.getElementById('refresh').addEventListener('click',function(e){
                            document.location='officer_dashboard.php';
                        })
                        document.getElementById('toggle').addEventListener('click',function(e){
                            document.location='officer_dashboard.php?toogle=1';
                        })


</script>

</body>

</html>
<!-- end document-->


