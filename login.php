<?php
session_start();
// var_dump($_SESSION);
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from userdata where username='$username' and password='$password' ";
    require_once('db.php');
    $qry = mysqli_query($con, $sql) or die('Can not be login');
    $count = mysqli_num_rows($qry);
    if ($count == 1) {
        $_SESSION['signedIn'] = [
            'username' => $username,
            'password' => $password,
        ];
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 style="margin-top: 20px">Login here!</h3>
        <form method="POST" name="login" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
            <div class="text-center mt-4 font-weight-light">
            Are you new? <a href="signup.php" class="text-primary">Signup</a>
            </div>
        </form>
    </div>
</body>

</html>