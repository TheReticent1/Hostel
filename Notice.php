<html>
<head>
    <title> Staff Login</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include('menubar.php') ?>
<div class="notice">
    <h1>Notice Board</h1>
    <table>
        <tbody>
        <tr>
            <th>Index</th>
            <th>Title</th>
            <th>Description</th>
            <th>PDF File</th>
            <th>Date</th>
        </tr>
        <?php
//        session_start();
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
                      </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
</body>
</html>