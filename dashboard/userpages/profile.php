<?php
require "/Users/ghorb/Desktop/flatlab/connection.php";

/* check session is empty or not */
require "/Users/ghorb/Desktop/flatlab/checkAthuntication.php";

/* set selectImage to session and using it */
$query = "SELECT * FROM users WHERE id = ? ";
$stmt  = $connection->prepare($query);
$stmt->bindValue(1, $_SESSION["id"]);
$stmt->execute();
$res = $stmt->fetch();
$_SESSION["src"] = "/dashboard/uploads/" . $res["src"];

/* check src is empty or not */
if (empty($res["src"])) {
    $_SESSION["src"] = "/img/images.png";
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
    <link rel="shortcut icon" href="../img/favicon.html">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" style="text-decoration: none;" class="logo">فلت<span>لب</span></a>
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
                                <p class="green">شما 6 برنامه در دست کار دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">پنل مدیریت</div>
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
                                        <div class="desc">بروزرسانی دیتابیس</div>
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
                                        <div class="desc">برنامه نویسی IPhone</div>
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
                                        <div class="desc">برنامه موبایل</div>
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
                                        <div class="desc">پروفایل v1.3</div>
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
                                <a href="#">برنامه های بیشتر</a>
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
                                <p class="red">شما 5 پیام جدید دارید</p>
                            </li>
                            <li>
                                <a href="#" style="text-decoration: none;">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                        <span class="from"><?= $_SESSION["usernme"] ?></span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from">ایمان مدائنی</span>
                                        <span class="time">10 دقیقه قبل</span>
                                    </span>
                                    <span class="message">
                                        سلام، چطوری شما؟
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                        <span class="from">صبا ذاکر</span>
                                        <span class="time">3 ساعت قبل</span>
                                    </span>
                                    <span class="message">
                                        چه پنل مدیریتی فوق العاده ایی
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                        <span class="from">مسعود شریفی</span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">نمایش تمامی پیام ها</a>
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
                                <p class="yellow">شما 7 اعلام جدید دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    سرور شماره 3 توقف کرده
                                    <span class="small italic">34 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    سرور شماره 4 بارگزاری نمی شود
                                    <span class="small italic">1 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    پنل مدیریت 24% پیشرفت داشته است
                                    <span class="small italic">4 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    ثبت نام کاربر جدید
                                    <span class="small italic">همین حالا</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    برنامه پیام خطا دارد
                                    <span class="small italic">10 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">نمایش تمامی اعلام ها</a>
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
                            <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                            <li><a href="#"><i class="icon-cog"></i>تنظیمات</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i>اعلام ها</a></li>
                            <li><a href="../logout.php"><i class="icon-key"></i>خروج</a></li>
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
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" style="margin-top: 100px;">
                        <li class="">
                            <a class="" href="../index.php">
                                <i class="fa fa-home" style="font-size:26px"></i>
                                <span>صفحه اصلی</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="" href="/dashboard/userpages/users.php">
                                <i class="fas fa-users" style='font-size:24px'></i>
                                <span>کاربران</span>
                            </a>
                        </li>
                        <li class="active">
                            <a class="" href="/dashboard/userpages/profile.php">
                                <i class="fa fa-user" style="font-size:26px"></i>
                                <span>پروفایل</span>
                            </a>
                        </li>



                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <aside class="profile-nav col-lg-3">
                            <section class="panel">
                                <div class="user-heading round">
                                    <a href="./edit.php?id=<?= $res["id"] ?>">
                                        <img src="<?= $_SESSION["src"] ?>" alt="not">
                                    </a>
                                    <h1><?= $_SESSION["username"] ?></h1>
                                    <p>jsmith@flatlab.com</p>
                                    <form action="/uploads.php" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="profile" class="form-control" style="margin-bottom: 20px; background-color: #ff766c; border: none;">
                                        <button class="btn btn-warning text-white" type="submit">update</button>
                                    </form>

                                </div>

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                    <li><a href="profile-activity.html"><i class="icon-calendar"></i>Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                                    <li><a href="profile-edit.html"><i class="icon-edit"></i>Edit profile</a></li>
                                </ul>

                            </section>
                        </aside>
                        <aside class="profile-info col-lg-9">
                            <section class="panel">
                                <form>
                                    <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
                                </form>
                                <footer class="panel-footer">
                                    <button class="btn btn-danger pull-right">Post</button>
                                    <ul class="nav nav-pills">
                                        <li>
                                            <a href="#"><i class="icon-map-marker"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-camera"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class=" icon-film"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-microphone"></i></a>
                                        </li>
                                    </ul>
                                </footer>
                            </section>
                            <section class="panel">
                                <div class="bio-graph-heading">
                                    Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.

                                </div>
                                <div class="panel-body bio-graph-info">
                                    <h1>Bio Graph</h1>
                                    <div class="row">
                                        <div class="bio-row">
                                            <p><span>First Name </span><?= $res["firstname"] ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Last Name </span><?= $res["lastname"] ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Country </span>: Australia</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Birthday</span>: 13 July 1983</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Occupation </span>: UI Designer</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Email </span>: jsmith@flatlab.com</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Mobile </span>: (12) 03 4567890</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Phone </span>: 88 (02) 123456</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="red">Envato Website</h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="terques">ThemeForest CMS </h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="green">VectorLab Portfolio</h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="bio-chart">
                                                    <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8">
                                                </div>
                                                <div class="bio-desk">
                                                    <h4 class="purple">Adobe Muse Template</h4>
                                                    <p>Started : 15 July</p>
                                                    <p>Deadline : 15 August</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </aside>
                    </div>

                    <!-- page end-->
                </section>
            </section>
            <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/js/jquery.knob.js"></script>
    <!--common script for all pages-->
    <script src="/js/common-scripts.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <script>
        //knob
        $(".knob").knob();
    </script>


</body>

</html>