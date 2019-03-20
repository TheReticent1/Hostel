<?php
include ('SessionVarCheck.php');
?>
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
<div class="grievance">
    <h1>Add Notice</h1>
    <form method="post" enctype="multipart/form-data" action="">
        <input type="text" placeholder="Title" class="control marginer" name="title" required>
        <input type="file" class="control marginer" name="file" required>
        <textarea rows="5" cols="50" placeholder="Description"
                  class="control marginer txt-area" name="description" required></textarea>
        <input type="submit" value="Add Notice" class="submit-btn marginer" name="submit">
    </form>
    <?php
        include ('connection.php');
        if(isset($_POST['submit'])){
            $file=$_FILES['file'];
            $target =getcwd()."/uploads";
            $name = $_FILES["file"]["name"];
            $type=$_FILES['file']['type'];
            $tmp_name = $_FILES['file']['tmp_name'];
            if ($type == 'application/pdf'){
                $res=move_uploaded_file("$tmp_name", "$target/$name");
                if($res){
                    $title=$_POST['title'];
                    $file_path="/hostel/uploads/".$name;
                    $describe=$_POST['description'];
                    $query="insert into notice(title,file_path,description,entry_date) values ('$title','$file_path','$describe',current_date )";
                    if(mysqli_query($con,$query)){
                        header('Location:ViewNotice.php');
                    }else{
                        echo "<p style='color: red;width: 100%;text-align: center'>Error in creating notice</p>";
                    }
                }else{
                    echo "<p style='color: red;width: 100%;text-align: center'>Error in uploading pdf file.</p>";
                }
            }else{
                echo "<p style='color: red;width: 100%;text-align: center'>Please enter pdf files only</p>";
            }
        }
    ?>
</div>
<?php include('footer.php') ?>
</body>
</html>