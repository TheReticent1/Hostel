<html>
<head>
    <title>Grievance & Redressal</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include('menubar.php') ?>
<div class="grievance">
    <h1>Grievance & Redressal</h1>
    <form>
        <input type="text" placeholder="Student Name" class="control marginer">
        <input type="text" placeholder="Department Name" class="control marginer">
        <input type="text" placeholder="Year of Education" class="control marginer">
        <input type="email" placeholder="Email Id" class="control marginer">
        <input type="text" placeholder="Contact No." class="control marginer">
        <textarea rows="5" cols="50" placeholder="Mention Your complaint regarding hostel"
                  class="control marginer txt-area"></textarea>
        <input type="submit" value="Submit" class="submit-btn marginer">
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