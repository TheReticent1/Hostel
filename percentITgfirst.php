<?php
include('SessionVarCheck.php');
include('connection.php');
$q1 = "select * from hostel where e_year = 'first year' and  semester = 'first sem' and gender = 'female' and branch = 'information technology' order by percent1 desc";
$res = mysqli_query($con, $q1);
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
    <h1>Girls Hostel First Year Records</h1>
    <table style="margin: auto">
        <tbody>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Department</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Reserve Category</th>
            <th>Exam</th>
            <th>Precent</th>
            <th>Action</th>
        </tr>
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
                        <td>
                            <form method='post' action=''>
                                <button type='submit' name='idv' value={$row['id']} style='cursor:pointer;border: none;background: transparent;outline-style: none'>
                                 <i class=\"fa fa-eye\"></i>   
                                </button>
                                <button type='submit' name='ide' value={$row['id']} style='cursor:pointer;border: none;background: transparent;outline-style: none'>
                                <i class=\"fa fa-pencil\"></i>    
                                </button>
                            </form>
                        </td>
                   </tr>";
            if (isset($_POST['idv'])) {
                $_SESSION['view'] = $_POST['idv'];
                header("Location:A_viewhostel.php");
            }if (isset($_POST['ide'])) {
                $_SESSION['edit'] = $_POST['ide'];
                header("Location:A_edithostel.php");
            }
        }
        ?>
        </tbody>
    </table>
    <div class="sort-btn">
        <a href="A_girlshostel.php" class="submit-btn" style="text-decoration: none;background: #f46f30;font-size: 12px;">Back</a>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>