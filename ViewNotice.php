<?php include ('SessionVarCheck.php') ?>
<html>
<head>
    <title> Add Notice</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include('AdminMenubar.php')?>
<div class="panel">
    <a href="NoticePanel.php" class="add-notice">Add Notice</a>
    <h1>Notice Board</h1>
    <table id="notice">
        <thead>
        <tr>
            <th>Index</th>
            <th>Title</th>
            <th>Description</th>
            <th>PDF File</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
//            session_start();
            include ('connection.php');
            $query="select * from notice";
            $res=mysqli_query($con,$query);
            while ($rows=mysqli_fetch_assoc($res)){
                echo "<tr>
                        <td>{$rows['id']}</td>
                        <td>{$rows['title']}</td>
                        <td>{$rows['description']}</td>
                        <td><a target='_blank' href={$rows['file_path']}><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"> </i></td>
                        <td>{$rows['entry_date']}</td>
                        <td>
                            <form method='post' action=''>
                                <button type='submit' name='del' value={$rows['id']} style='cursor:pointer;background: transparent;border: none;outline: none'><i class=\"fa fa-trash-o\"></i></button>                       
                            </form>
                        </td>
                      </tr>";
                if (isset($_POST['del'])){
                    $del="delete from notice where id ={$_POST['del']}";
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
        $('#notice').DataTable();
    } );
</script>
</body>
</html>