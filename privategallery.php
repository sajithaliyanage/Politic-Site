<?php
header( 'Content-Type: text/html; charset=utf-8' );
include_once('language_translate.php');
include ('admin/php/config.php');

$sql = "SELECT * FROM private_image";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo translate("Royce Fernando",$lan);?> | <?php echo translate("Official Web Site",$lan);?></title>
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
<body>

<header id="header">
    <div class="top-bar" style="background-color:#255625;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <a href="setlanguage.php?language=SI">සිංහල</a>
                    <span style="color: #4cae4c;">|</span>
                    <a href="setlanguage.php?language=EN">தமிழ்</a>
                    <span style="color: #4cae4c;">|</span>
                    <a href="setlanguage.php?language=EN">English</a>
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

    <nav class="navbar navbar-inverse" role="banner" style="background-color:#3c763d;">
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
                    <li><a href="mystory.php"><?php echo translate("My Story",$lan);?></a></li>
                    <li class="dropdown active">
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

<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2><?php echo translate("Private Gallery ",$lan);?></h2>
               <p class="lead"><?php echo getPara("para5",$lan);?></p>
            </div>


            <div class="row">
                <div class="portfolio-items">
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<div class=\"portfolio-item apps col-xs-12 col-sm-4 col-md-3\">
                            <div class=\"recent-work-wrap\">
                                <img class=img-responsive\" src='admin/uploads/".$row['image']."' style=\"width:300px; height:230px;\" alt=\"\">
                                <div class=\"overlay\">
                                    <div class=\"recent-work-inner\" style=' text-align: center;padding-top:60px;'>
                                        <a class=\"preview\" href='admin/uploads/".$row['image']."' rel=\"prettyPhoto\" style=\"font-size:30px;vertical-align: middle; \"><i class=\"fa fa-eye\"></i>".translate("View",$lan)."</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--/.portfolio-item-->";
                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->




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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
