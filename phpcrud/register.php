<?php
$host = "localhost";
$port = 5432;
$db_name = "crud";
$user = "kk";
$password = '';
$connection_string = "host={$host} port={$port} dbname={$db_name} user={$user} password={$password}";

$db_conn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    $sql = "insert into public.user1(name,email,password,mobno)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd'])."','".$_POST['mobno']."')";
    $ret = pg_query($db_conn, $sql);
    if($ret){

        echo "Data saved Successfully";
    }else{

        echo "Something Went Wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register to AAG Media</title>
    <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Register Here </h2>
    <form method="post">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="form-group">
            <label for="pwd">Mobile No:</label>
            <input type="number" class="form-control" maxlength="10" id="mobileno" placeholder="Enter Mobile Number" name="mobno">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Submit"><br>
        <a href="login.php">Already have an account? Click here</a>

    </form>
</div>

</body>
</html>
