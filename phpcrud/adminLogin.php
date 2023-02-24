<?php
$host = "localhost";
$port = 5432;
$db_name = "crud";
$user = "kk";
$password = '';
$connection_string = "host={$host} port={$port} dbname={$db_name} user={$user} password={$password}";

$db_conn = pg_connect($connection_string);

if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    $hashpassword = md5($_POST['pwd']);
    $sql ="select *from public.user2 where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $data = pg_query($db_conn,$sql);
    $login_check = pg_num_rows($data);
    if($login_check > 0){
        echo "Login Successfully";
        header("Location: index.php");
    }else{
        //   echo "Invalid Details";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="margin-bottom: 100px">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AAG Media</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <h2>Welcome back, have a nice day!</h2>
    <form method="post">


        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>


        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Log In">

    </form>
</div>



</body>
</html>


