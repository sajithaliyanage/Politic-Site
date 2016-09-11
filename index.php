<?php
header( 'Content-Type: text/html; charset=utf-8' );
include ('admin/php/config.php');
include_once('language_translate.php');

$pdo = connect();

$sql = "SELECT id, heading FROM news WHERE language = :lan ORDER BY id DESC";
$query = $pdo->prepare($sql);
$query->execute(array('lan'=>$lan));
$result = $query->fetchAll();//$conn->query($sql);

$sql2 = "SELECT * FROM news WHERE language = :lan ORDER BY id DESC LIMIT 10 ";
$query = $pdo->prepare($sql2);
$query->execute(array('lan'=>$lan));
$result2 = $query->fetchAll();//$conn->query($sql2);

$sql2 = "SELECT * FROM videos";
$query = $pdo->prepare($sql2);
$query->execute();
$result_vids = $query->fetchAll();//$conn->query($sql2);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo translate("Royce Fernando",$lan);?> | <?php echo translate("Official Web Site",$lan);?></title>
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

<body class="homepage" style="overflow-x: hidden; background-color: #545454">
    <div class="container" style="background-color: #ffffff;padding-left: 0px;padding-right: 0px;">
        <header id="header"  style="">
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
                            <li class="active"><a href="index.php"><?php echo translate("Home",$lan);?></a></li>
                            <li><a href="biography.php"><?php echo translate("Biography",$lan);?></a></li>
                            <li><a href="news.php"><?php echo translate("News",$lan);?></a></li>
                            <li><a href="mystory.php"><?php echo translate("My Story",$lan);?></a></li>
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
        <div class="container-fluid" style="background-color: #151515; height: 30px; color: #080808; padding-top: 0px;">
            <div class="row">
                <div class="col-xs-12" style="color: #FFFFFF;">
                    <?php
                    if (count($result)>0) {
                        echo '<marquee style="margin-top: 5px; margin-bottom: -3px;">';
                        // output data of each row
                        foreach($result as $row){
                            //while($row = $result->fetch_assoc()) {
                            //echo " *** ";
                            echo '<a href="news-item.php?id='.$row['id'].'" style="color: #FFFFFF; margin-top: 0px;"><b>'.utf8_decode($row['heading']).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>';
                            //echo "\t\t\t\t";
                        }
                        echo '</marquee>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <section id="main-slider" class="no-margin" style="margin-top:-5px !important;">
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
        <?php
        /*
        <section id="feature" style="background-color: #FFFFFF;">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2><b><?php echo translate("My Brief",$lan);?></h2>
                    <p class="lead"><?php echo getPara("para1",$lan);?></p>
                </div>
            </div>
            <!--/.container-->
        </section>
        */
        ?>
        <section id="missionvisson" style="padding:0px 0px!important;">
            <div class="container-fluid" style="background-color:#3c763d; color:#FFFFFF; ">
                <div class="row" style="padding:50px 0px;margin-left:0px !important; margin-right: 0px !important;">
                    <div class="col-sm-6 col-xs-12">
                        <h2 style="text-align:center; color:#FFFFFF; "><b><?php echo translate("My Mission",$lan);?></b></h2>
                        <p class="lead" style="text-align:center;"><?php echo getPara("para2",$lan);?></p>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <h2 style="text-align:center;color:#FFFFFF;"><b><?php echo translate("My Vision",$lan);?></b></h2>
                        <p class="lead" style="text-align:center;"><?php echo getPara("para3",$lan);?></p>
                    </div>
                </div>
            </div>
        </section>



        <div class="container-fluid" style = "background-color:#f1f1f1;">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <section id="recent-works" style="margin-top:40px; padding-left:20px;">
                        <div class="row">
                            <div class="col-sm-3 col-xs-4" style="padding-right:20px;">
                                <h3><b><?php echo translate("Today's Cartoon",$lan);?></b></h3>
                                <hr>
                                <img src='admin/uploads/cartoon/cartoon.png' style ='width: 100%; height:auto;' />

                                <h3><b><?php echo translate("Youtube Channel",$lan);?></b></h3>
                                <hr>
                                <?php
                                foreach($result_vids as $rs){
                                    $link = $rs['link'];
                                    echo "<div><iframe src='$link' style='width:100%; height:auto;'></iframe></div>";
                                }

                                ?>
                                <!--
                                <div>
                                    <iframe src="http://www.youtube.com/embed/playlist?list=UUwiLluuQWuQTROY9ZEaGOyw" style="width:100%; height:auto;"></iframe>
                                </div>
                                <div>
                                    <iframe src="https://www.youtube.com/embed/watch?v=X2GJ5B717OU&list=UUwiLluuQWuQTROY9ZEaGOyw&index=3"  style="width:100%; height:auto;"></iframe>
                                </div>
                                <div>
                                    <iframe src="http://www.youtube.com/embed/watch?v=BFbFFHiOAmU&index=4&list=UUwiLluuQWuQTROY9ZEaGOyw" style="width:100%; height:auto;"></iframe>
                                </div>
                                <div>
                                    <iframe src="http://www.youtube.com/embed/watch?v=BFbFFHiOAmU&index=4&list=UUwiLluuQWuQTROY9ZEaGOyw" style="width:100%; height:auto;"></iframe>
                                </div>
                                <div>
                                    <iframe src="http://www.youtube.com/embed/watch?v=BFbFFHiOAmU&index=4&list=UUwiLluuQWuQTROY9ZEaGOyw" style="width:100%; height:auto;"></iframe>
                                </div>
                                -->
                            </div>
                            <div class="col-sm-9 col-xs-8">
                                <div class="row">
                                    <h3><b><?php echo translate("Latest News",$lan);?></b></h3>
                                    <hr>
                                    <?php
                                    $row = $result2[0];
                                    ?>
                                    <a href='news-item.php?id=<?php echo $row['id'];?>'>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <a href='news-item.php?id=<?php echo $row['id'];?>'><h3 style="font-size: 20px; color: #3c763d"><?php echo utf8_decode($row['heading']);?></h3></a>
                                            </div>
                                            <div class="col-sm-6 col-xs-12" style="text-align: left !important;">
                                                <img src='admin/uploads/<?php echo $row['headimage'];?>' style ='width: 100%; height:auto;' />
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <p class="lead" style='font-size:14px;'><?php echo substr(utf8_decode($row['content']),0,1000);?></p>
                                            </div>
                                        </div>
                                    </a>
                                    <h3><b><?php echo translate("Other News",$lan);?></b></h3>
                                    <hr>
                                    <?php
                                    if (count($result2) > 0) {
                                        $start = 0;
                                        // output data of each row
                                        foreach($result2 as $row){
                                            //while($row = $result2->fetch_assoc()) {
                                            if($start!=0){
                                                echo "<a href='news-item.php?id=".$row['id']."'><div class=\"row\">
                                                <div class=\"col-xs-3\" style=\"text-align: center !important;\"><img src='admin/uploads/".$row['headimage']."' style ='width: auto; height:80px;' /></div>
                                                <div class=\"col-xs-9\">
                                                    <a href='news-item.php?id=".$row['id']."'>".utf8_decode($row['heading'])."</a>
                                                    <p class=\"lead\" style='font-size:12px;'>".utf8_decode($row['small'])."</p>
                                                </div>
                                                <div class=\"col-xs-12\">
                                                    <hr style=\"padding-left:0px;\">
                                                </div>
                                            </div></a>";
                                            }
                                            $start += 1;
                                        }
                                    }

                                    ?>

                                    <a href="news.php"><h4><?php echo translate("Read More",$lan);?> ....</h4></a>
                                </div>

                                <div class="row">
                                    <link rel="stylesheet" type="text/css" media="all" href="css/meepura.css">

                                    <?php
                                        $url = 'http://www.meepura.com/';
                                        $content = file_get_contents($url);
                                        //$first_step = explode( '<div id="thediv">' , $content );
                                        //$second_step = explode("</div>" , $first_step[1] );
                                        $first_step = explode( '<section class="cat-box list-box">' , $content );
                                        $second_step = explode("</section>" , $first_step[1] );

                                        $html_cont = '<section class="cat-box list-box">'.$second_step[0]."</section>";
                                        $third_step = explode('<a href="http://www.meepura.com/category/news/">',$html_cont);
                                        $html_cont = $third_step[0].'<a href="http://www.meepura.com/category/news/">'.translate("Meepura News",$lan).$third_step[1];


                                        echo $html_cont;
                                    ?>

                                </div>

                            </div>

                        </div>
                    </section><!--/#recent-works-->
                </div>
                <div class="col-sm-3 col-xs-12" >
                    <section id="fb">
                        <div class="row">
                            <div class="col-xs-12" style="margin-top:40px;">
                                <h3 style="text-align: center;"><b><?php echo translate("Facebook Page",$lan);?></b></h3>
                                <hr>
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FRoyceFernandoOfficial&amp;width&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:350px;" allowTransparency="true"></iframe>
                            </div>
                            <div class="col-xs-12" style="margin-top:-120px !important;">
                                <h3  style="text-align: center;"><b><?php echo translate("Twitter Page",$lan);?></b></h3>
                                <hr>
                                <div style="margin-top:-15px;" ">
                                <a class="twitter-timeline"  href="https://twitter.com/RoyceWFernando" data-widget-id="731085573360738304"><?php echo translate("Tweets by",$lan);?> @RoyceWFernando</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                            <div class="col-xs-12">
                                <h3  style="text-align: center;"><b><?php echo translate("Google+ Account",$lan);?></b></h3>
                                <hr>
                                <script src="https://apis.google.com/js/platform.js" async defer></script>
                                <center><div class="g-person" data-href="https://plus.google.com/101330294031263361694" style="height:250px !important; width: 100%;"></div></center>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>


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
    <script>
        $('.carousel').carousel({
            interval: 2000 //changes the speed
        })
    </script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>