<?php
include('connection.php');
include ('SessionVarCheck.php');
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
<?php include('AdminMenubar.php')?>
<div class="login">
    <form action="" method="post">
        <h1>Register</h1>
        <input type="text" class="control" placeholder="&#xf2bd; Username" style="font-family: FontAwesome;" name="uname" required>
        <input type="password" class="control" placeholder="&#xf084; Password" style="font-family: FontAwesome;" name="pass" required>
        <input type="submit" class="login-btn" value="&#xf090;  Register" style="font-family: FontAwesome;" name="register">
    </form>

<!--    register script-->
    <?php
    if (isset($_POST['register'])){
        $name = $_POST['uname'];
        $pass = $_POST['pass'];
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        $q1 = "select * from login where username = '$name'";
        $result = mysqli_query($con,$q1);
        $num = mysqli_num_rows($result);

        if($num == 1){
            echo '<p>User already exist</p>';
        }else{
            $reg = "insert into login(username,pass) values ('$name' , '$hash')";
            mysqli_query($con,$reg);
            echo "<p>Register successfully</p>";
            header('Location:login.php');
        }
    }
    ?>
</div>
<?php include('footer.php') ?>
</body>
</html>