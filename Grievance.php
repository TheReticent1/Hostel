<html>
<head>
    <title>Grievance & Redressal</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include('menubar.php') ?>
<div class="grievance">
    <h1>Grievance & Redressal</h1>
    <form>
        <input type="text" placeholder="Student Name" class="control marginer">
        <input type="text" placeholder="Department Name" class="control marginer">
        <input type="text" placeholder="Year of Education" class="control marginer">
        <input type="email" placeholder="Email Id" class="control marginer">
        <input type="text" placeholder="Contact No." class="control marginer">
        <textarea rows="5" cols="50" placeholder="Mention Your complaint regarding hostel"
                  class="control marginer txt-area"></textarea>
        <input type="submit" value="Submit" class="submit-btn marginer">
    </form>
</div>
<?php include('footer.php') ?>
</body>
</html>