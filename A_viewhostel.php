<?php
include('SessionVarCheck.php');
include('connection.php');
$q1 = "select * from hostel where id = {$_SESSION['view']}";
$res = mysqli_query($con, $q1);
?>
<html>
<head>
    <title>GPW Hostel's, Washim</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include_once('AdminMenubar.php'); ?>
<div class="container">
    <div class="host">
        <h1>Government Polytechnic Washim</h1>
        <h3>Hostel Entry Application 2019-2020</h3>
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<div class='viewtable'>
                    <table>
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td class='tdata'>{$row['s_name']}</td>
                        </tr>
                        <tr>
                            <td>Education Year:</td>
                            <td class='tdata'>{$row['e_year']}</td>
                        </tr>
                        <tr>
                            <td>Branch:</td>
                            <td class='tdata'>{$row['branch']}</td>
                        </tr>
                        <tr>
                            <td>Semester:</td>
                            <td class='tdata'>{$row['semester']}</td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td class='tdata'>{$row['gender']}</td>
                        </tr>
                        <tr>
                            <td>Father's Name:</td>
                            <td class='tdata'>{$row['father_name']}</td>
                        </tr>
                        <tr>
                            <td>Guardian:</td>
                            <td class='tdata'>{$row['guardian']}</td>
                        </tr>
                        <tr>
                            <td>Relation With Guardian:</td>
                            <td class='tdata'>{$row['guardian_relation']}</td>
                        </tr>
                        <tr>
                            <td>Applicant Address:</td>
                            <td class='tdata'>{$row['student_address']}</td>
                        </tr>
                        <tr>
                            <td>Applicant Parent Address:</td>
                            <td class='tdata'>{$row['parent_address']}</td>
                        </tr>
                        <tr>
                            <td>Reserve Category:</td>
                            <td class='tdata'>{$row['reserve_cate']}</td>
                        </tr>
                        <tr>
                            <td>Reserve Category details:</td>
                            <td class='tdata'>{$row['reserve_details']}</td>
                        </tr>
                        <tr>
                            <td>Reserve Category proof:</td>
                            <td class='tdata'><a href={$row['reserve_file']} target='_blank'>Document</a></td>
                        </tr>
                        <tr>
                            <td>Is in hostel before:</td>
                            <td class='tdata'>{$row['hostel_before']}</td>
                        </tr>
                        <tr>
                            <td>Previous hostel Year:</td>
                            <td class='tdata'>{$row['prev_year']}</td>
                        </tr>
                        <tr>
                            <td>Previous branch:</td>
                            <td class='tdata'>{$row['prev_branch']}</td>
                        </tr>
                        <tr>
                            <td>Previous hostel room no:</td>
                            <td class='tdata'>{$row['prev_room']}</td>
                        </tr>
                        <tr>
                            <td>Exam Name 1:</td>
                            <td class='tdata'>{$row['exam1']}</td>
                        </tr>
                        <tr>
                            <td>Total Marks 1:</td>
                            <td class='tdata'>{$row['total1']}</td>
                        </tr>
                        <tr>
                            <td>Obtain Marks 1:</td>
                            <td class='tdata'>{$row['obtain1']}</td>
                        </tr>
                        <tr>
                            <td>Percentage 1:</td>
                            <td class='tdata'>{$row['percent1']}</td>
                        </tr>
                        <tr>
                            <td>Class 1:</td>
                            <td class='tdata'>{$row['class1']}</td>
                        </tr>
                        <tr>
                            <td>Exam Name 2:</td>
                            <td class='tdata'>{$row['exam2']}</td>
                        </tr>
                        <tr>
                            <td>Total Marks 2:</td>
                            <td class='tdata'>{$row['total2']}</td>
                        </tr>
                        <tr>
                            <td>Obtain Marks 2:</td>
                            <td class='tdata'>{$row['obtain2']}</td>
                        </tr>
                        <tr>
                            <td>Percentage 2:</td>
                            <td class='tdata'>{$row['percent2']}</td>
                        </tr>
                        <tr>
                            <td>Class 2:</td>
                            <td class='tdata'>{$row['class2']}</td>
                        </tr>
                        <tr>
                            <td>Exam Name 3:</td>
                            <td class='tdata'>{$row['exam3']}</td>
                        </tr>
                        <tr>
                            <td>Total Marks 3:</td>
                            <td class='tdata'>{$row['total3']}</td>
                        </tr>
                        <tr>
                            <td>Obtain Marks 3:</td>
                            <td class='tdata'>{$row['obtain3']}</td>
                        </tr>
                        <tr>
                            <td>Percentage 3:</td>
                            <td class='tdata'>{$row['percent3']}</td>
                        </tr>
                        <tr>
                            <td>Class 3:</td>
                            <td class='tdata'>{$row['class3']}</td>
                        </tr>
                    </tbody>
                  </table>
                  </div>";
        }
        ?>
    </div>
</div>
<?php include_once('footer.php'); ?>
</body>
</html>