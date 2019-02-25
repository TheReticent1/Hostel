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
<div class="grievance">
    <h1>Add Notice</h1>
    <form>
        <input type="text" placeholder="Title" class="control marginer">
        <input type="file" class="control marginer">
        <textarea rows="5" cols="50" placeholder="Description"
                  class="control marginer txt-area"></textarea>
        <input type="submit" value="Add Notice" class="submit-btn marginer">
    </form>
</div>
<?php include('footer.php') ?>
</body>
</html>