<?php
include('SessionVarCheck.php');
include('connection.php');
$q1 = "select * from hostel where gender = 'female'";
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
    <a href="AdminPanel.php" class="login-btn" style="text-decoration: none;margin: 5px">Boys</a>
    <a href="A_girlshostel.php" class="login-btn" style="text-decoration: none;margin: 5px">Girls</a>
    <h1>Girls Hostel Records</h1>
    <table style="margin: auto">
        <tbody>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Department</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Reserve Category</th>
            <th>exam1</th>
            <th>Precent1</th>
            <th>exam2</th>
            <th>Precent2</th>
            <th>exam3</th>
            <th>Precent3</th>
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
                        <td>{$row['exam2']}</td>
                        <td>{$row['percent2']}</td>
                        <td>{$row['exam3']}</td>
                        <td>{$row['percent3']}</td>
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
                $_SESSION['edi'] = $_POST['ide'];
                header("Location:A_edithostel.php");
            }
        }
        ?>

        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
</body>
</html>