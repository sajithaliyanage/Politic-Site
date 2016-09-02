<?php
header( 'Content-Type: text/html; charset=utf-8' );
include_once('language_translate.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo translate("Royce Fernando",$lan);?> | <?php echo translate("Official Web Site",$lan);?></title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/fav.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage" style="overflow-x: hidden; background-color: #545454">
<div class="container" style="background-color: #ffffff;padding-left: 0px;padding-right: 0px;">

<header id="header">
    <div class="top-bar" style="background-color:#255625;height: 162px;background-image: url('images/royce.png');">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <a href="setlanguage.php?language=SI">සිංහල</a>
                    <span style="color: #4cae4c;">|</span>
                    <!--<a href="setlanguage.php?language=EN">தமிழ்</a>
                    <span style="color: #4cae4c;">|</span>
                    <a href="setlanguage.php?language=EN">English</a>-->
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li ><a href="contact-us.php"><i class="fa fa-phone"></i></a></li>
                            <li ><a href="https://www.facebook.com/RoyceFernandoOfficial/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/RoyceWFernando"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCwiLluuQWuQTROY9ZEaGOyw"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav id="nav_bar_top" class="navbar navbar-inverse" role="banner" style="background-color:#3c763d;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/ico/<?php echo getImageTranslation("rf",$lan);?>.png" class="img-responsive rf-image" style="width:300px; margin-top:7px;" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><?php echo translate("Home",$lan);?></a></li>
                    <li><a href="biography.php"><?php echo translate("Biography",$lan);?></a></li>
                    <li><a href="news.php"><?php echo translate("News",$lan);?></a></li>
                    <li class="active"><a href="mystory.php"><?php echo translate("My Story",$lan);?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo translate("Gallery",$lan);?><i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="privategallery.php"><?php echo translate("Private Gallery",$lan);?></a></li>
                            <li><a href="publicgallery.php"><?php echo translate("Public Gallery",$lan);?></a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.php"><?php echo translate("Contact",$lan);?></a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav ><!--/nav-->

</header><!--/header-->


<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2><?php echo translate("Private Life",$lan);?></h2>
                <p class="lead"><?php echo getPara("para5",$lan);?></p>
            </div>

            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 wow fadeInDown">
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">

                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                            <?php echo translate("My Familiy",$lan);?>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>

                                <div id="collapseOne1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="media accordion-inner">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/accordion1.png">
                                            </div>
                                            <div class="media-body">
                                                <p><?php echo getPara("para8",$lan);?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                            <?php echo translate("My Education",$lan);?>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php echo getPara("para6",$lan);?>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                            <?php echo translate("My Career",$lan);?>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php echo getPara("para7",$lan);?>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                            <?php echo translate("Base to the politics",$lan);?>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFour1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php echo getPara("para9",$lan);?>
                                    </div>
                                </div>
                            </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>
            </div>

        </div><!--/.container-->
    </section><!--/#feature-->



<footer id="footer" class="midnight-blue" style="background-color:#3c763d;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2016 <a target="_blank" href="index.php" title="Royce Wijitha fernand | Official Web Site"><?php echo translate("Royce Wijitha Fernando",$lan);?></a>. <?php echo translate("All Rights Reserved",$lan);?>.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="index.php"><?php echo translate("Home",$lan);?></a></li>
                    <li><a href="biography.php"><?php echo translate("Biography",$lan);?></a></li>
                    <li><a href="contact-us.php"><?php echo translate("Contact",$lan);?></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
</div>
    <script src="js/jquery.js"></script>
    <script src="js/nav_fixed.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>