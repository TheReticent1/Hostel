<?php
session_start();
include('connection.php');
?>
<html>
<head>
    <title> Staff Login</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include('menubar.php') ?>
<div class="login">
    <form action="" method="post">
        <h1>Staff Login</h1>
        <input type="text" class="control" placeholder="&#xf2bd; Username" style="font-family: FontAwesome;"
               name="uname">
        <input type="password" class="control" placeholder="&#xf084; Password" style="font-family: FontAwesome;"
               name="pass">
        <input type="submit" class="login-btn" value="&#xf090;  Login" style="font-family: FontAwesome;" name="submit">
    </form>

    <!--    login script-->
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['uname'];
        $pass = $_POST['pass'];
        $q1 = "select * from login where username = '$name'";
        $result = mysqli_query($con, $q1);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($pass, $row['pass']) == $pass) {
                $_SESSION['username'] = $row['username'];
                header("Location:AdminPanel.php");
            } else {
                echo 'invalid password';
            }
        } else {
            echo 'invalid username and password';
        }
    }
    ?>
</div>
<?php include('footer.php') ?>
</body>
</html>