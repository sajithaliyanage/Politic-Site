<?php
include_once("php/checklogin.php");
    if(!$islogged || $user != "admin"){
        header( 'Location:index.php' ) ;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="profile.php">Royce Fernando Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="php/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>New News</a>
                    </li>
                    <li>
                        <a href="youtube.php"><i class="fa fa-fw fa-bar-chart-o"></i>Youtube Videos</a>
                    </li>
                    <li>
                        <a href="pri.php"><i class="fa fa-fw fa-bar-chart-o"></i>Private Photoes</a>
                    </li>
                    <li>
                        <a href="pub.php"><i class="fa fa-fw fa-table"></i>Public Photoes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid" >
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <h2 style="text-align: center;">News Form</h2>
                        <div <?php if(!isset($_GET['done'])){echo 'style="display:none;"';} ?> >
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Done!</strong> Your News successfully Posted
                            </div>
                        </div>
                        <div class="row" style="margin-top:30px;">
                            <form action="php/news.php" method="post" enctype="multipart/form-data">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8 form-group">
                                            <label>Heading</label>
                                            <input type="text" placeholder="News Title" name="heading" class="form-control">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="select-lan">Language</label>
                                            <select id="select-lan" class="form-control" name="language">
                                                <option value="SI">Sinhala</option>
                                                <option value="EN">English</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Date</label>
                                            <input type="date" name="date" class="form-control">
                                            <!--<input type="text" placeholder="Date" name="date" class="form-control">-->
                                        </div>
                                        <div class="col-sm-6 form-group">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Brief Description (in two sentences)</label>
                                        <input type="text" name="small"  class="form-control" placeholder="brief pera"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea placeholder="Description" name="content" rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Main Image</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>

                                    <div class="form-group">
                                        <label>Upload More Image (Select Multiple)</label>
                                        <input type="file" name="more_images[]" id="fileToUpload" multiple>
                                    </div>

                                    <center>
                                        <input class="btn btn-info btn-lg " type="submit" style="background-color: #00a9e0; border: none;" value="Submit">
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <a href="../news.php"><button  class="btn btn-success btn-lg navbar-right"  style="margin-top:30px;">Go to the Website</button></a>
            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
