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
    <table style="margin: auto" id="gn">
        <thead>
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
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['id']}</td>
                        <td>{$row['s_name']}</td>
                        <td>{$row['department']}</td>
                        <td>{$row['education_year']}</td>
                        <td>{$row['contact']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['complaint']}</td>
                        <td><form method='post' action=''>
                                <button type='submit' name='del' value={$row['id']} style='cursor:pointer;background: transparent;border: none;outline: none'><i class=\"fa fa-trash-o\"></i></button>                       
                            </form>
                        </td>
                   </tr>";
            if (isset($_POST['del'])){
                $del="delete from grievance where id ={$_POST['del']}";
                $res=mysqli_query($con,$del);
                if ($res){
                    echo "<p>Deleted Successfully</p>";
                    header("refresh:0");
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>

    $(document).ready(function() {
        $('#gn').DataTable();
    } );
</script>
</body>
</html>