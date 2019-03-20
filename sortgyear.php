<?php
include('SessionVarCheck.php');
include('connection.php');
if (isset($_POST['gfy'])){
    $q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'female'";
    $res = mysqli_query($con, $q1);
    $year = 'Girls Hostel First Year Records';
    $fy=true;
    $sy=false;
    $ty=false;
}
if (isset($_POST['gsy'])){
    $q1 = "select * from hostel where e_year = 'second year' and  semester = 'third sem' and gender = 'female'";
    $res = mysqli_query($con, $q1);
    $year = 'Girls Hostel Second Year Records';
    $fy=false;
    $sy=true;
    $ty=false;
}
if (isset($_POST['gty'])){
    $q1 = "select * from hostel where e_year = 'third year' and  semester = 'fifth sem' and gender = 'female'";
    $res = mysqli_query($con, $q1);
    $year = 'Girls Hostel Third Year Records';
    $fy=false;
    $sy=false;
    $ty=true;
}

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
<?php include('AdminMenubar.php') ?>
<div class="panel">
    <h1><?php echo $year ?></h1>
    <table style="margin: auto" id="year">
        <thead>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Department</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Reserve Category</th>
            <th>Exam</th>
            <th>Precent</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr><td>{$row['id']}</td>
                        <td>{$row['s_name']}</td>
                        <td>{$row['branch']}</td>
                        <td>{$row['e_year']}</td>
                        <td>{$row['semester']}</td>
                        <td>{$row['reserve_cate']}</td>
                        <td>{$row['exam1']}</td>
                        <td>{$row['percent1']}</td>
                   </tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    if ($fy == true && $sy == false && $ty == false) {
        echo "<div class=\"sort-btn\">
        <form action=\"sortgbranch.php\" method=\"post\" style=\"display: flex\">
            <a href=\"A_girlshostel.php\" class=\"submit-btn\"
               style=\"text-decoration: none;background: #f46f30;font-size: 12px;margin: 0 5px\">Back</a>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"if\">I.F
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"me\">M.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"ae\">A.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"ce\">C.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"ee\">E.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"etc\">E&TC
            </button>
        </form>
    </div>";
    } if ($fy == false && $sy == true && $ty == false) {
        echo "<div class=\"sort-btn\">
        <form action=\"sortgbranch.php\" method=\"post\" style=\"display: flex\">
            <a href=\"A_girlshostel.php\" class=\"submit-btn\"
               style=\"text-decoration: none;background: #f46f30;font-size: 12px;margin: 0 5px\">Back</a>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"sif\">I.F
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"sme\">M.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"sae\">A.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"sce\">C.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"see\">E.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"setc\">E&TC
            </button>
        </form>
    </div>";
    } if ($fy == false && $sy == false && $ty == true) {
        echo "<div class=\"sort-btn\">
        <form action=\"sortgbranch.php\" method=\"post\" style=\"display: flex\">
            <a href=\"A_girlshostel.php\" class=\"submit-btn\"
               style=\"text-decoration: none;background: #f46f30;font-size: 12px;margin: 0 5px\">Back</a>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"tif\">I.F
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"tme\">M.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"tae\">A.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"tce\">C.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"tee\">E.E
            </button>
            <button type=\"submit\" class=\"submit-btn\" style=\"background: #1DA1F2;font-size: 12px;margin: 0 5px\"
                    name=\"tetc\">E&TC
            </button>
        </form>
    </div>";
    }
    ?>
</div>
<?php include('footer.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>

    $(document).ready(function() {
        $('#year').DataTable();
    } );
</script>
</body>
</html>