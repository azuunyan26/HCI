<?php
session_start();
include('dbconnector.php');
if ($_SESSION['username']) {
    $query = mysqli_query($con, "SELECT * FROM `student_info` WHERE username='" . $_SESSION['username'] . "'");
    foreach ($query as $stud) {
        $target_course = $stud['course'];
        $target_year = $stud['year'];
        $section = $stud['section'];

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Student | Modules</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/studDash.css">
            <link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">
        </head>

        <body>
            <div class="container-fluid navbar-1">
                <div class="container">
                    <div class="navbar">
                        <div class="navbar-brand">
                            <a href="studentdashboard.php"><img class="logo-img" src="images/qcuLogo.png"></a>
                            <span class="logo-text">Quezon City University</span>
                        </div>
                        <div class="menu"></div>
                        <ul class="nav nav-1">
                            <div class="profile-container">
                                <div class="close"></div>
                                <div class="circle"></div>
                            </div>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" href="#a"><i class="fas fa-envelope"></i><span class="nav-text">Message</span></a>
                            </li>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" href="#b"><i class="fas fa-bell"></i><span class="nav-text">Notification</span></a>
                            </li>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" href="#c"><i class="fas fa-calendar-alt"></i><span class="nav-text">Calendar</span></a>
                            </li>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" href="#d"><i class="fas fa-question-circle"></i><span class="nav-text">Faq</span></a>
                            </li>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" href="#e"><i class="fas fa-search"></i><span class="nav-text">Search</span></a>
                            </li>
                            <li class="nav-item nav-item1">
                                <a class="nav-link nav-link1" href="#f">
                                    <span>
                                    <?php echo $stud['sname']." ".$stud['fname']." " .substr($stud['mname'], 0, 1).".";?>
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="drop">
                                    <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Section 1-->
            <section class="container section-1">
                <div class="row">
                    <!--Tabs header-->
                    <div class="col-md-9 tab-nav">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active modules" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Modules<span class="badge badge-dark">9</span></a>
                            <a class="nav-link calendar" id="nav-profile-tab " data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Calendar</a>
                        </div>
                        <!--Tab content-->
                        <div class="tab-content" id="nav-tabContent">
                            <!--Tab 1-->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <h4 class="accordion-h">
                                    Modules
                                </h4>
                                <!--Accordion-->
                                <?php

                                $query = mysqli_query($con, "SELECT * from `classwork_info` where target_course = '" . $target_course . "' and target_year = '" . $target_year . "' ");
                                $count = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="accordion" id="accordionExample">
                                        <!--Accordion card-->
                                        <div class="card">
                                            <div class="card-header card-<?php echo $count ?>" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingOne">
                                                <h4 class="mb-0">
                                                    <span class="title"><?php echo $count.". ".$row['classwork_name'];  ?></span>
                                                </h4>
                                                <h6 class="mb-0">
                                                    <span class="subject"><?php echo $row['subject_code'] . " " . $stud['course'] . "-" . $stud['year'] . $stud['section'] ?></span>
                                                </h6>
                                                <h6 class="mb-0">
                                                    <span class="schedule">due date: <?php echo $row['classwork_deadline'] ?></span>
                                                </h6>
                                                <button class="btn btn-link" type="button">
                                                    <i class="fas fa-chevron-circle-down down"></i>
                                                </button>

                                            </div>
                                            <!--Accordion contents-->
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="panel-contents">
                                                        <p class="font-weight-bold accordion-contents"><i class="fas fa-file-powerpoint"></i>Online Prensentation</p>
                                                        <p class="font-weight-bold accordion-contents"><i class="fas fa-file-alt"></i>Handouts</p>
                                                        <p class="font-weight-bold accordion-contents"><i class="fas fa-file-upload"></i>08 Activity 1</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--End of contents-->
                                        </div>
                                        <!--End of card-->
                                    </div>
                            </div>
                    <?php
                                    $count = $count + 1;
                                }
                            }
                    ?>
                    <!--Tab 2-->
                    <div class="tab-pane fade calendar-div" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h4 class="accordion-h">
                            Calendar
                        </h4>
                        <div id="datepicker"></div>
                    </div>
                        </div>
                    </div>

                    <div class="col-md-3 act">
                        <div class="container right-panel">
                            <div class="activity">
                                <span class="panel-title">Activity</span>
                                <div class="body-contents">
                                    <div class="panel-contents">
                                        <p class="font-weight-bold act-contents"><i class="fas fa-book"></i>A user viewed modules</p>
                                    </div>
                                </div>
                            </div>

                            <div class="to-do">
                                <a href="#" class="to-do-add"><i class="fas fa-plus-circle"></i></a>
                                <span class="panel-title">To-do</span>
                                <div class="body-contents">
                                    <div class="panel-contents">
                                        <p class="font-weight-bold to-do-contents"><i class="fas fa-file"></i>4 Assignment Due</p>
                                    </div>
                                </div>
                            </div>

                            <div class="status">
                                <span class="panel-title">Status</span>
                                <div class="body-contents">
                                    <div class="panel-contents">
                                        <p class="font-weight-bold status-contents"><i class="fas fa-user"></i>Enrolled: Sep 6, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="clear"></div>
            <footer class="container-fluid footer-container">
                <div class="container">
                    <div class="navbar">
                        <div class="navbar-brand footer-brand">&#169;QCU LMS BSIT-3C</div>
                        <ul class="nav footer-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fab fa-instagram-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>



            <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>





            <script src="js/jquery.min.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <script src="jquery-ui/jquery-ui.js"></script>
            <script src="js/studDash.js"></script>
        </body>

        </html>
    <?php
} else {
    header('location:logout.php');
}
    ?>