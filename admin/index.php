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

    <link href="css/new.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="php/login.php" method="post">
                <input name="username" type="text" placeholder="username" />
                <input type="password" name="password"  placeholder="password" />
                <button class="btn btn-info btn-block login" type="submit">Login</button>
            </form>
        </div>
    </div>

    <center>
        <a href="../index.php"><button  class="btn btn-success btn-lg"  style="margin-top:30px;">Go to the Website</button></a>
    </center>


</div>
    <!-- /#wrapper -->
</body>

</html>
