<?php
session_start();
include('connection.php')
?>

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
    <form method="post" action="">
        <input type="text" placeholder="Student Name" class="control marginer" name="sname" required>
        <input type="text" placeholder="Department Name" class="control marginer" name="department" required>
        <input type="text" placeholder="Year of Education" class="control marginer" name="year" required>
        <input type="email" placeholder="Email Id" class="control marginer" name="email" required>
        <input type="text" placeholder="Contact No." class="control marginer" name="contact" required>
        <textarea rows="5" cols="50" placeholder="Mention Your complaint regarding hostel"
                  class="control marginer txt-area" name="complaint" required></textarea>
        <input type="submit" value="Submit" class="submit-btn marginer" name="grievance">
    </form>

    <!--    complaint script-->
    <?php
        if (isset($_POST['grievance'])){
            $name=$_POST['sname'];
            $dept=$_POST['department'];
            $year=$_POST['year'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $comp=$_POST['complaint'];
            if (!preg_match('/^[0-9]{10}+$/', $contact)){
                echo "<p style='color: red;width: 100%;text-align: center'>Please enter valid 10 digit mobile number</p>";
            }elseif (!preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)){
                echo "<p style='color: red;width: 100%;text-align: center'>Please enter valid Email Id</p>";
            }else{
                $query="insert into grievance(s_name,department,education_year,email,contact,complaint) values ('$name','$dept','$year','$email','$contact','$comp')";
                $result=mysqli_query($con,$query);
                if($result == 1){
                    echo "<p style='color: green;width: 100%;text-align: center'>Thank You! We will get you soon</p>";
                }else{
                    echo "<p style='color: red;width: 100%;text-align: center'>Error in inserting please try again</p>";
                }
            }
        }
    ?>
</div>
<?php include('footer.php') ?>
</body>
</html>