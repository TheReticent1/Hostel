<div class="menu-bar">
    <ul>
        <li>GPW&nbsp;Hostel&nbsp;Panel</li>
        <li><a href="AdminPanel.php">Hostel&nbsp;Forms</a></li>
        <li><a href="GrievancePanel.php">Grievance</a></li>
        <li><a href="ViewNotice.php">Add&nbsp;Notice</a></li>
        <li><a href="Register.php">Register&nbsp;User</a></li>
        <li><a href="logout.php"><i class="fa fa-power-off"> </i>&nbsp;Logout</a></li>
    </ul>
</div>
<script>
    $(document).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $(".menu-bar").addClass("positions");
        } else {
            $(".menu-bar").removeClass("positions")
        }
    });
</script>