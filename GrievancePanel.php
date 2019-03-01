<?php
include('SessionVarCheck.php');
include('connection.php');
$q1 = "select * from grievance";
$result = mysqli_query($con, $q1);
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
    <h1>Grievance Records</h1>
    <table style="margin: auto">
        <tbody>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Department</th>
            <th>Year</th>
            <th>Conatact</th>
            <th>Email id</th>
            <th>Complaint</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['id']}</td>
                        <td>{$row['s_name']}</td>
                        <td>{$row['department']}</td>
                        <td>{$row['education_year']}</td>
                        <td>{$row['contact']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['complaint']}</td>
                        <td><input type=\"checkbox\"> <i class=\"fa fa-trash-o\"></i></td>
                   </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
</body>
</html>