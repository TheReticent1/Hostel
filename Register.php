<html>
<head>
    <title> Staff Login</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<div class="menu-bar">
    <ul>
        <li>GPW Hostel Panel</li>
        <li><a href="AdminPanel.php">Hostel&nbsp;Forms</a></li>
        <li><a href="GrievancePanel.php">Grievance</a></li>
        <li><a href="ViewNotice.php">Add&nbsp;Notice</a></li>
        <li><a href="Register.php">Register&nbsp;User</a></li>
        <li><a href="#"><i class="fa fa-power-off"> </i>&nbsp;Logout</a></li>
    </ul>
</div>
<div class="login">
    <form action="./Actions/register.php" method="post">
        <h1>Register</h1>
        <input type="text" class="control" placeholder="&#xf2bd; Username" style="font-family: FontAwesome;" name="uname">
        <input type="password" class="control" placeholder="&#xf084; Password" style="font-family: FontAwesome;" name="pass">
        <input type="submit" class="login-btn" value="&#xf090;  Register" style="font-family: FontAwesome;">
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