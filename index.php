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
    <div class="boy-hostel">
        <h1>Hostel's</h1>
        <div class="boy-img">
            <img src="images/hostel.png" alt="hostel"/>
        </div>
        <div class="details">
            <h3>Boy's Hostel</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aliquid autem culpa doloremque
                explicabo harum in iste laborum odio omnis quidem ratione saepe sequi suscipit, ut vitae. Consequuntur,
                magnam!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aliquid autem culpa doloremque
                explicabo harum in iste laborum odio omnis quidem ratione saepe sequi suscipit, ut vitae. Consequuntur,
                magnam!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aliquid autem culpa doloremque
                explicabo harum in iste laborum odio omnis quidem ratione saepe sequi suscipit, ut vitae. Consequuntur,
                magnam!</p>
        </div>
        <div class="boy-img">
            <img src="images/girls.jpg" alt="hostel"/>
        </div>
        <div class="details">
            <h3>Girl's Hostel</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aliquid autem culpa doloremque
                explicabo harum in iste laborum odio omnis quidem ratione saepe sequi suscipit, ut vitae. Consequuntur,
                magnam!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aliquid autem culpa doloremque
                explicabo harum in iste laborum odio omnis quidem ratione saepe sequi suscipit, ut vitae. Consequuntur,
                magnam!</p>
        </div>
        <div class="staff">
            <h1>Hostel Authority</h1>
            <div class="card">
                <div>
                    <img src="images/hostel.png" alt="pics">
                    <p class="name">Kamlesh D. Mohane</p>
                    <p class="post">Lecturer</p>
                    <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem consequatur corporis
                        cumque
                        dignissimos, eum fugiat illo iure molestiae mollitia neque, obcaecati optio praesentium
                        quibusdam quis reprehenderit sequi sit suscipit?</p>
                </div>
            </div>
            <div class="card">
                <div>
                    <img src="images/college.jpg" alt="pics">
                    <p class="name">Kamlesh D. Mohane</p>
                    <p class="post">Lecturer</p>
                    <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem consequatur corporis
                        cumque
                        dignissimos, eum fugiat illo iure molestiae mollitia neque, obcaecati optio praesentium
                        quibusdam quis reprehenderit sequi sit suscipit?</p>
                </div>
            </div>
            <div class="card">
                <div>
                    <img src="images/girls.jpg" alt="pics">
                    <p class="name">Kamlesh D. Mohane</p>
                    <p class="post">Lecturer</p>
                    <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem consequatur corporis
                        cumque
                        dignissimos, eum fugiat illo iure molestiae mollitia neque, obcaecati optio praesentium
                        quibusdam quis reprehenderit sequi sit suscipit?</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-soc">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </div>
        <p>All right reserved &reg; Government Polytechnic Washim & Copyright &copy; by Digital Sheets @2019. </p>
    </footer>
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