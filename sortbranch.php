<?php
include('SessionVarCheck.php');
include('connection.php');
if (isset($_POST['if'])){
    $q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'male' and branch = 'information technology'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys First Year I.F';
}
if (isset($_POST['me'])){
    $q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'male' and branch = 'mechanical'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys First Year M.E';
}
if (isset($_POST['ae'])){
    $q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'male' and branch = 'automobile'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys First Year A.E';
}
if (isset($_POST['ce'])){
    $q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'male' and branch = 'civil'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys First Year C.E';
}if (isset($_POST['ee'])){
    $q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'male' and branch = 'electronic'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys First Year E.E';
}
if (isset($_POST['etc'])){
    $q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'male' and branch = 'electrical'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys First Year E&TC';
}

if (isset($_POST['sif'])){
    $q1 = "select * from hostel where e_year = 'second year' and  semester = 'third sem' and gender = 'male' and branch = 'information technology'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Second Year I.F';
}
if (isset($_POST['sme'])){
    $q1 = "select * from hostel where e_year = 'second year' and  semester = 'third sem' and gender = 'male' and branch = 'mechanical'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Second Year M.E';
}
if (isset($_POST['sae'])){
    $q1 = "select * from hostel where e_year = 'second year' and  semester = 'third sem' and gender = 'male' and branch = 'automobile'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Second Year A.E';
}
if (isset($_POST['sce'])){
    $q1 = "select * from hostel where e_year = 'second year' and  semester = 'third sem' and gender = 'male' and branch = 'civil'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Second Year C.E';
}
if (isset($_POST['see'])){
    $q1 = "select * from hostel where e_year = 'second year' and  semester = 'third sem' and gender = 'male' and branch = 'electronic'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Second Year E.E';
}
if (isset($_POST['setc'])){
    $q1 = "select * from hostel where e_year = 'second year' and  semester = 'third sem' and gender = 'male' and branch = 'electrical'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Second Year E&Tc';
}

if (isset($_POST['tif'])){
    $q1 = "select * from hostel where e_year = 'third year' and  semester = 'fifth sem' and gender = 'male' and branch = 'information technology'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Third Year I.F';
}
if (isset($_POST['tme'])){
    $q1 = "select * from hostel where e_year = 'third year' and  semester = 'fifth sem' and gender = 'male' and branch = 'mechanical'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Third Year M.E';
}
if (isset($_POST['tae'])){
    $q1 = "select * from hostel where e_year = 'third year' and  semester = 'fifth sem' and gender = 'male' and branch = 'automobile'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Third Year A.E';
}
if (isset($_POST['tce'])){
    $q1 = "select * from hostel where e_year = 'third year' and  semester = 'fifth sem' and gender = 'male' and branch = 'civil'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Third Year C.E';
}
if (isset($_POST['tee'])){
    $q1 = "select * from hostel where e_year = 'third year' and  semester = 'fifth sem' and gender = 'male' and branch = 'electronic'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Third Year E.E';
}
if (isset($_POST['tetc'])){
    $q1 = "select * from hostel where e_year = 'third year' and  semester = 'fifth sem' and gender = 'male' and branch = 'electrical'";
    $res = mysqli_query($con, $q1);
    $branch = 'Boys Third Year E&TC';
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
    <h1><?php echo $branch ?> Records</h1>
    <table style="margin: auto" id="branch">
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
    <div class="sort-btn">
        <a href="AdminPanel.php" class="submit-btn" style="text-decoration: none;background: #f46f30;font-size: 12px;">Back</a>
    </div>
</div>
<?php include('footer.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>

    $(document).ready(function() {
        $('#branch').DataTable();
    } );
</script>
</body>
</html>