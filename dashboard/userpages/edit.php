<?php
require "/Users/ghorb/Desktop/flatlab/connection.php";

/* check session is empty or not */
require "/Users/ghorb/Desktop/flatlab/checkAthuntication.php";

/* select data from database and show value in edit page */
$id = (int) $_GET["id"];
$query = "SELECT * FROM users where id = ? ORDER BY Id  ";
$stmt = $connection->prepare($query);
$stmt->bindValue(1, $id);
$stmt->execute();
$res = $stmt->fetch();


/* check src is empty or not */
if (empty($res["src"])) {
    $_SESSION["src"] = "../img/images.png";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>FlatLab</title>
    <link rel="shortcut icon" href="../img/favicon.html">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/css/font-awesome.css" rel="stylesheet" />
    <link href="/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo">??????<span>????</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">?????? 6 ???????????? ???? ?????? ?????? ??????????</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">?????? ????????????</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">?????????????????? ??????????????</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">???????????? ?????????? IPhone</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">???????????? ????????????</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">?????????????? v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">???????????? ?????? ??????????</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">?????? 5 ???????? ???????? ??????????</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                        <span class="from"><?= $_SESSION["usernme"] ?></span>
                                        <span class="time">???????? ????????</span>
                                    </span>
                                    <span class="message">
                                        ???????????????? ???????? ???????????? ?????? ??????
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from">?????????? ????????????</span>
                                        <span class="time">10 ?????????? ??????</span>
                                    </span>
                                    <span class="message">
                                        ?????????? ?????????? ????????
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                        <span class="from">?????? ????????</span>
                                        <span class="time">3 ???????? ??????</span>
                                    </span>
                                    <span class="message">
                                        ???? ?????? ?????????????? ?????? ???????????? ??????
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                        <span class="from">?????????? ??????????</span>
                                        <span class="time">???????? ????????</span>
                                    </span>
                                    <span class="message">
                                        ???????????????? ???????? ???????????? ?????? ??????
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">?????????? ?????????? ???????? ????</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">?????? 7 ?????????? ???????? ??????????</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    ???????? ?????????? 3 ???????? ????????
                                    <span class="small italic">34 ?????????? ??????</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    ???????? ?????????? 4 ???????????????? ?????? ??????
                                    <span class="small italic">1 ???????? ??????</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    ?????? ???????????? 24% ???????????? ?????????? ??????
                                    <span class="small italic">4 ???????? ??????</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    ?????? ?????? ?????????? ????????
                                    <span class="small italic">???????? ????????</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    ???????????? ???????? ?????? ????????
                                    <span class="small italic">10 ?????????? ??????</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">?????????? ?????????? ?????????? ????</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu" style="display: flex; justify-content: center; align-items: start;">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown" style="margin-bottom: 10px;">
                        <a data-toggle="dropdown" style="display: flex; justify-content:rigth;align-items: center;" href="#">
                            <img class="img-user-prof" alt="" src="<?= $_SESSION["src"] ?>" style="width: 7%; text-decoration: none; border-radius: 50px; margin-left: 20px;">
                            <span style="margin-left: 20px;" class="username"><?= $_SESSION["username"] ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>??????????????</a></li>
                            <li><a href="#"><i class="icon-cog"></i>??????????????</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i>?????????? ????</a></li>
                            <li><a href="../logout.php"><i class="icon-key"></i>????????</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="">
                        <a class="" href="/dashboard/index.php">
                            <i class="fa fa-home" style="font-size:26px"></i>
                            <span>???????? ????????</span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="" href="/dashboard/userpages/users.php">
                            <i class="fas fa-users" style='font-size:24px'></i>
                            <span>??????????????</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="/dashboard/userpages/profile.php">
                            <i class="fa fa-user" style="font-size:26px"></i>
                            <span>??????????????</span>
                        </a>
                    </li>



                </ul>
            </div>
        </aside>

        <section id="main-content">
            <section class="wrapper">
                <div class="col-12">
                    <form class="form-signin w-100" action="/update.php" method="POST">
                        <h2 class="form-signin-heading">?????????? ??????????????</h2>
                        <div class="edit-wrap">
                            <input type="hidden" name="id" value="<?= $id?>">
                            <input value="<?= $res["username"] ?>" type="text" class="form-control" name="username" placeholder="?????? ????????????" autofocus>
                            <div class="d-flex flex-column mb-4 fs-5">
                                <input value="" type="password" class="form-control mb-0" name="userpassword" placeholder="???????? ????????">
                                <span class="" style="text-align: center;color: red;">?????? ???????????????? ?????? ???????? ?????? ?? ?????????? ???????? ???????? ???????? ?????? ???????? ???? ???? ???????? ???? ?????? ?????? ???????? ???? ???? ???????? ??????????????</span>
                            </div>
                            <input value="<?= $res["firstname"] ?>" type="text" class="form-control" name="firstname" placeholder="??????">
                            <input value="<?= $res["lastname"] ?>" type="text" class="form-control" name="lastname" placeholder="?????? ????????????????">
                            <button class="btn btn-lg btn-login btn-block" type="submit">?????? </button>
                            <a href="./users.php" class=" btn btn-lg btn-register btn-warning btn-block" style="color: white; text-align: center;">????????????</a>

                        </div>

                    </form>

                </div>




            </section>
        </section>
        <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-1.8.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="/js/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/jquery.customSelect.min.js"></script>
    <!--common script for all pages-->
    <script src="/js/common-scripts.js"></script>
    <!--script for this page-->
    <script src="/js/sparkline-chart.js"></script>
    <script src="/js/easy-pie-chart.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });
    </script>


</body>

</html>