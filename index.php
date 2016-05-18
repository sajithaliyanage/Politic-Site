<?php
include ('admin/php/config.php');

$sql = "SELECT * FROM news ORDER BY id DESC LIMIT 2 ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Royce Fernando | Official Web Site</title>
    <link rel="shortcut icon" href="images/ico/fav.ico">
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar" style="background-color:#255625;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <a href="si/index.php">සිංහල</a>
                        <span style="color: #4cae4c;">|</span> 
                        <a href="ta/index.php">தமிழ்</a>
                        <span style="color: #4cae4c;">|</span>
                        <a href="index.php">English</a>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li ><a href="contact-us.html"><i class="fa fa-phone"></i></a></li>
                                <li ><a href="https://www.facebook.com/RoyceFernandoOfficial/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/RoyceWFernando"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCwiLluuQWuQTROY9ZEaGOyw"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner" style="background-color:#3c763d;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/ico/rf.png" class="img-responsive rf-image" style="width:300px; margin-top:7px;" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="biography.html">Biography</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="mystory.html">My Story</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="privategallery.php">Private Gallery</a></li>
                                <li><a href="publicgallery.php">Public Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav ><!--/nav-->
		
    </header><!--/header-->

    <section id="main-slider" class="no-margin" >
        <div class="carousel slide" style="height:400px !important;">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    <div class="row" style="background-color: #27AE60; height: 30px; color: #080808; padding-top: 5px;">
        <?php
        if ($result->num_rows > 0) {
            echo '<marquee>';
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<a href="news-item.php?id='.$row['id'].'" style="color: #080808;">'.$row['heading'].'</a>';
            }
            echo '</marquee>';
        }
        ?>
    </div>
    <section id="feature" style="background-color: #FFFFFF;">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2><b>My Brief</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
       <!--/.container-->
    </section>

    <section id="missionvisson">
        <div class="container-fluid" style="background-color:#67b168; color:#FFFFFF; ">
            <div class="row" style="padding:50px 0px;margin-left:0px !important; margin-right: 0px !important;">
                <div class="col-sm-6 col-xs-12">
                    <h2 style="text-align:center; color:#FFFFFF; "><b>My Mission</b></h2>
                    <p class="lead" style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h2 style="text-align:center;color:#FFFFFF;"><b>My Vision</b></h2>
                    <p class="lead" style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utet dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
        </div>
    </section>

    <section id="recent-works" style="margin-top:40px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3>News</h3>
                    <hr>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                           echo "<div class=\"row\">
                        <div class=\"col-xs-2\" style=\"text-align: center !important;\"><i class=\"fa fa-eye fa-4x\" aria-hidden=\"true\" ></i></div>
                        <div class=\"col-xs-10\">
                            <a href='news-item.php?id=".$row['id']."'>".$row['heading']."</a>
                            <p class=\"lead\" style='font-size:12px;'>".$row['small']."</p>
                            <hr style=\"padding-left:30px;\">
                        </div>
                    </div>";
                        }
                    }

                    ?>

                    <a href="news.php"><h4>Read More ....</h4></a>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h3>Youtube Channel</h3>
                    <hr>
                    <div>
                        <iframe src="http://www.youtube.com/embed/playlist?list=UUwiLluuQWuQTROY9ZEaGOyw" style="width:100%; height:300px;;"></iframe>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="fb">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <h3>My Facebook Page</h3>
                    <hr>
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FRoyceFernandoOfficial&amp;width&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:350px;" allowTransparency="true"></iframe>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h3>My Twitter Page</h3>
                    <hr>
                    <div style="margin-top:-15px;" ">
                    <a class="twitter-timeline"  href="https://twitter.com/RoyceWFernando" data-widget-id="731085573360738304">Tweets by @RoyceWFernando</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h3>My Google+ Account</h3>
                    <hr>
                    <script src="https://apis.google.com/js/platform.js" async defer></script>
                    <div class="g-person" data-href="https://plus.google.com/101330294031263361694" style="height:250px !important;"></div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="midnight-blue" style="background-color:#3c763d;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="index.php" title="Royce Wijitha fernand | Official Web Site">Royce Wijitha Fernando</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="biography.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>