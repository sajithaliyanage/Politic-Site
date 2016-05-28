<?php
header( 'Content-Type: text/html; charset=utf-8' );
include ('admin/php/config.php');
include_once('language_translate.php');





$pdo = connect();
$sql = "SELECT * FROM news WHERE language = :lan ORDER BY id DESC";
$query = $pdo->prepare($sql);
$query->execute(array('lan'=>$lan));
$result = $query->fetchAll();//$conn->query($sql);

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
                    <li class="active"><a href="news.php"><?php echo translate("News",$lan);?></a></li>
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


<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-xs-10 col-xs-offset-1">
                     <?php
                     if (count($result) > 0) {
                         // output data of each row
                         foreach($result as $row){
                         //while($row = $result->fetch_assoc()) {
                             echo "<div class=\"blog-item\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-2 text-center\">
                                <div class=\"entry-meta\">
                                    <span id=\"publish_date\">".$row['date']."</span>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-6 blog-content\">
                                <h2><a href='news-item.php?id=".$row['id']."'>".utf8_decode($row['heading'])."</a></h2>
                                <h3>".utf8_decode($row['small'])."</h3>
                                <a class=\"btn btn-primary readmore\" href='news-item.php?id=".$row['id']."'>".translate("Read More",$lan)."<i class=\"fa fa-angle-right\"></i></a>
                            </div>
                            <div class=\"col-sm-4 col-xs-12\">
                                <a href=\"#\"><img class=\"img-responsive img-blog\" src='admin/uploads/".$row['headimage']."' width=\"100%\" alt=\"\" /></a>
                            </div>
                        </div>
                        <hr>
                    </div><!--/.blog-item-->";
                         }
                     }

                     ?>



                      <center>
                          <ul class="pagination pagination-lg">
                              <li><a href="#"><i class="fa fa-long-arrow-left"></i><?php echo translate("Previous Page",$lan);?></a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#"><?php echo translate("Next Page",$lan);?><i class="fa fa-long-arrow-right"></i></a></li>
                          </ul><!--/.pagination-->
                      </center>

                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->


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