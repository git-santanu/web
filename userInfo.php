<?php
$con = new mysqli('localhost','root','','usercx');
if(!$con){
    die("not connected".mysqli_error($con));
}else{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $comments=$_POST['comment'];
    $sql = "insert into `user` (name,email,phone,comments) 
    values('$name','$email','$phone','$comments')";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die(mysqli_error($con));
    }else{
        header('location:index.php');
    }
}
?>