<html>
<head>
    <title>Hostel Management</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <img src="images/logo.png">
        <div class="heading">
            <h1>Government Polytechnic Washim Hostel</h1>
            <p>Contact &nbsp;<i class="fa fa-phone"> </i>&nbsp; +91 88888-88888</p>
        </div>
        <div class="social">
            <i class="fa fa-facebook-square fa-2x"></i>
            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
        </div>
    </header>
    <div class="menu-bar">
        <ul>
            <li>GPW Hostel</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Apply</a></li>
            <li><a href="Notice.php">Notice</a></li>
            <li><a href="Grievance.php">Grievance</a></li>
            <li><a href="login.php">Staff Login</a></li>
        </ul>
    </div>
</div>
<script>
    $(document).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 150) {
            $(".menu-bar").addClass("positions");
        } else {
            $(".menu-bar").removeClass("positions")
        }
    });
</script>
</body>
</html>