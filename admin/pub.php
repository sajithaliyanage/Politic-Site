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
    <link href="css/bar.css" rel="stylesheet">
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
                    <li >
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>New News</a>
                    </li>
                    <li>
                        <a href="youtube.php"><i class="fa fa-fw fa-bar-chart-o"></i>Youtube Videos</a>
                    </li>
                    <li>
                        <a href="pri.php"><i class="fa fa-fw fa-bar-chart-o"></i>Private Photoes</a>
                    </li>
                    <li class="active">
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
                        <div class="row" style="margin-top:30px;">
                            <div class="row" style="margin-bottom:200px;">
                                <div class="col-xs-12">
                                    <div <?php if(!isset($_GET['done'])){echo 'style="display:none;"';} ?> >
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Done!</strong> Your Images successfully Uploaded
                                        </div>
                                    </div>
                                    <form action="php/public.php" method="post" enctype="multipart/form-data">
                                        <center>
                                            <h2>Select PUBLIC Multiple images to Upload</h2>
                                            <div class="image-upload" style="margin-top:80px;">
                                                <label for="file-input">
                                                    <img src="images/up.png" class="img-responsive" style="width:30%; height:10%; border:3px solid #ec971f; border-radius:10px;"
                                                    />
                                                </label>

                                                <input id="file-input" type="file" name="fileToUpload[]" multiple  onchange="readURL(this)"/>
                                            </div>

                                            <input type="submit"  class="btn btn-success" value="UPLOAD" name="submit">

                                            <div id="myProgress" style="margin-top:20px;">
                                                <div id="myBar">
                                                    <div id="label">0%</div>
                                                </div>
                                            </div>
                                        </center>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="../publicgallery.php"><button  class="btn btn-success btn-lg navbar-right">Go to the Website</button></a>
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(600)
                        .height(500);
                };

                reader.readAsDataURL(input.files[0]);
                move()
            }
        }
        function move() {
            var elem = document.getElementById("myBar");
            var width = 10;
            var id = setInterval(frame, 10);

            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                    document.getElementById("label").innerHTML = width * 1 + '%';
                }
            }
        }
    </script>

</body>

</html>
