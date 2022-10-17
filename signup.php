<?php
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $country = $_POST['country'];
    $usertype=$_POST['usertype'];
    if ($username != '' && $email != '' && $password != '' && $country != '') {
        $sql = "insert into userdata(username,email,password,country,usertype) values('$username','$email','$password','$country','$usertype')";
        include_once('db.php');
        $sqry = mysqli_query($con, $sql);
        if ($sqry) {
            echo "$username Registered succesfully";
            header("Location:login.php");
        }
    } else {
        echo "Please fill all the fields";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 style="margin-top: 20px">Sign up here!</h3>
        <form name="singup" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Choose Country</label>
                <select name="country" id="country" class="form-control from-control-lg">
                    <option value="">Country</option>
                    <option value="US">USA</option>
                    <option value="UK">UK</option>
                    <option value="IN">India</option>
                    <option value="GR">Germany</option>
                    <option value="AR">Argentina</option>
                </select>
            </div>
            <div class="form-group">
                <label>Choose User type</label>
                <select name="usertype" id="usertype" class="form-control from-control-lg">
                    <option value="">Usertype</option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="signup">Signup</button>
            <div class="text-center mt-4 font-weight-light">
                Already have an account? <a href="login.php" class="text-primary">Login</a>
            </div>
        </form>
    </div>
</body>

</html>