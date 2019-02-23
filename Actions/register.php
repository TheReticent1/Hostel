<?php
    session_start();

    $con=mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'hostel');

    $name = $_POST['uname'];
    $pass = $_POST['pass'];
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    $q1 = "select * from login where username = '$name'";
    $result = mysqli_query($con,$q1);
    $num = mysqli_num_rows($result);

    if($num == 1){
       echo '<h1>User already exist</h1>';
       echo '<a href="/hostel/Register.php">go back to register</a>';
    }else{
        $reg = "insert into login(username,pass) values ('$name' , '$hash')";
        mysqli_query($con,$reg);
        echo "<h1>Register successfully</h1>";
        header('Location:/hostel/login.php');
    }
?>