<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($con, 'hostel');

$name = $_POST['uname'];
$pass = $_POST['pass'];
$q1 = "select * from login where username = '$name'";
$result = mysqli_query($con, $q1);
$count = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pass, $row['pass']) == $pass) {
        $_SESSION['username']=$row['username'];
    } else {
        echo 'invalid password';
    }
} else {
    echo 'invalid username and password';
}
?>
<html>
    <body>
        <h1><?php echo $_SESSION['username'];?></h1>
    </body>
</html>
