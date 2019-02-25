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
    <form action="AdminPanel.php" method="post">
        <h1>Staff Login</h1>
        <input type="text" class="control" placeholder="&#xf2bd; Username" style="font-family: FontAwesome;" name="uname">
        <input type="password" class="control" placeholder="&#xf084; Password" style="font-family: FontAwesome;" name="pass">
        <input type="submit" class="login-btn" value="&#xf090;  Login" style="font-family: FontAwesome;">
    </form>
</div>
<footer class="footer">
    <div class="footer-soc">
        <i class="fa fa-facebook-square"></i>
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
    </div>
    <p>All right reserved &reg; Government Polytechnic Washim & Copyright &copy; by Digital Sheets @2019. </p>
</footer>
</body>
</html>