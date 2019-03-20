<html>
<head>
    <title>GPW Hostel's, Washim</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include_once('menubar.php'); ?>
<div class="container">
    <div class="host">
        <h1>Government Polytechnic Washim</h1>
        <h3>Hostel Entry Application 2019-2020</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Applicant Full Name" name="s_name" class="control controller" required>
            <div style="display: flex">
                <select class="selector" name="year" required>
                    <option value="" selected disabled hidden>Select Year</option>
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                </select>
                <select class="selector" name="sem" required>
                    <option value="" selected disabled hidden>Select Semester</option>
                    <option value="first sem">First sem</option>
                    <option value="third sem">Third sem</option>
                    <option value="fifth sem">Fifth sem</option>
                </select>
                <select class="selector" name="branch" required>
                    <option value="" selected disabled hidden>Select Branch</option>
                    <option value="mechanical">Mechanical Engineering</option>
                    <option value="automobile">Automobile Engineering</option>
                    <option value="civil">Civil Engineering</option>
                    <option value="electrical">Electrical & Telecommunication</option>
                    <option value="electronic">Electronics Engineering</option>
                    <option value="information technology">Information Technology</option>
                </select>
                <select class="selector" name="gender" required>
                    <option value="" selected disabled hidden>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <input type="text" placeholder="Father's Full Name" name="f_name" class="control controller">
            <input type="text" placeholder="Guardian Full Name (if no parents)" name="g_name"
                   class="control controller">
            <input type="text" placeholder="Relationship with Guardian (if no parents)" name="g_relation"
                   class="control controller">
            <textarea rows="5" cols="50" placeholder="Applicant Permanent Address"
                      class="control controller" name="s_address" required></textarea>
            <textarea rows="5" cols="50" placeholder="Father/Guardian Address"
                      class="control controller" name="f_address" required></textarea>
            <input type="text" placeholder="Father/Guardian Mobile No." name="f_mob" class="control controller"
                   required>
            <div style="border: 1px solid lightgray;margin: 20px">
                <div style="display: flex">
                    <label class="control controller" style="border: none;width: 50%">Is an applicant of reserved
                        class?</label>
                    <select class="selector" name="res" required>
                        <option value="" selected disabled hidden>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <input type="text" placeholder="if reserved class 'yes' Detail and attached Proof (Dakhala)"
                       name="r_details"
                       class="control controller">
                <input type="file" name="r_file" class="control controller">
            </div>
            <div style="border: 1px solid lightgray;margin: 20px">
                <div style="display: flex">
                    <label class="control controller" style="border: none;width: 50%">Is an applicant was in Hostel
                        before?</label>
                    <select class="selector" name="hostel" required>
                        <option value="" selected disabled hidden>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div style="display: flex">
                    <label class="control controller" style="border: none;width: 50%">If 'Yes' Previous year</label>
                    <select class="selector" name="prev_year" required>
                        <option value="" selected disabled hidden>Select Previous Year</option>
                        <option value="NA">Not Available</option>
                        <option value="first year">First Year</option>
                        <option value="second year">Second Year</option>
                    </select>
                </div>
                <div style="display: flex">
                    <label class="control controller" style="border: none;width: 50%">If 'Yes' Previous branch</label>
                    <select class="selector" name="prev_branch" required>
                        <option value="" selected disabled hidden>Select Branch</option>
                        <option value="NA">Not Available</option>
                        <option value="mechanical">Mechanical Engineering</option>
                        <option value="automobile">Automobile Engineering</option>
                        <option value="civil">Civil Engineering</option>
                        <option value="electrical">Electrical & Telecommunication</option>
                        <option value="electronic">Electronics Engineering</option>
                        <option value="information technology">Information Technology</option>
                    </select>
                </div>
                <input type="text" placeholder="Hostel Previous Room no." name="prev_room" class="control controller">
            </div>
            <div class="tabular">
                <table>
                    <tbody>
                    <tr>
                        <th colspan="4" style="font-weight: bold;padding: 10px">Education Details</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Exam Name." name="exam1" class="control controller tabs"
                                   required>
                        </td>
                        <td>
                            <input type="text" placeholder="Total Marks." name="tmarks1" class="control controller tabs"
                                   required>
                        </td>
                        <td>
                            <input type="text" placeholder="Obtained Marks." name="omarks1"
                                   class="control controller tabs" required>
                        </td>
                        <td>
                            <input type="text" placeholder="Class." name="class1" class="control controller tabs"
                                   required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Exam Name." name="exam2" class="control controller tabs">
                        </td>
                        <td>
                            <input type="text" placeholder="Total Marks." name="tmarks2"
                                   class="control controller tabs">
                        </td>
                        <td>
                            <input type="text" placeholder="Obtained Marks." name="omarks2"
                                   class="control controller tabs">
                        </td>
                        <td>
                            <input type="text" placeholder="Class." name="class2" class="control controller tabs">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Exam Name." name="exam3" class="control controller tabs">
                        </td>
                        <td>
                            <input type="text" placeholder="Total Marks." name="tmarks3"
                                   class="control controller tabs">
                        </td>
                        <td>
                            <input type="text" placeholder="Obtained Marks." name="omarks3"
                                   class="control controller tabs">
                        </td>
                        <td>
                            <input type="text" placeholder="Class." name="class3" class="control controller tabs">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div style="display: flex">
                <input type="checkbox" required style="margin: 10px 10px 10px 20px" name="policy" value="yes">
                <p style="margin-top: 0;">The above information is true based on my knowledge. I'm giving my words to
                    follow hostel rules and perodic notices. I know, if I misbehave in hostel i will be dismiss from
                    hostel by higher authorities.</p>
            </div>
            <input type="submit" class="login-btn marginer" style="width: 93%" value="Submit Application" name="submit">
        </form>
        <?php
            include ('connection.php');
            if (isset($_POST['submit'])){
                $s_name = $_POST['s_name'];
                $year = $_POST['year'];
                $sem = $_POST['sem'];
                $branch = $_POST['branch'];
                $gender = $_POST['gender'];
                $f_name=$_POST['f_name'];
                $g_name=$_POST['g_name'];
                $g_relation=$_POST['g_relation'];
                $s_address=$_POST['s_address'];
                $f_address=$_POST['f_address'];
                $f_mob=$_POST['f_mob'];
                $res=$_POST['res'];
                $r_details=$_POST['r_details'];
                $hostel=$_POST['hostel'];
                $prev_year=$_POST['prev_year'];
                $prev_branch=$_POST['prev_branch'];
                $prev_room=$_POST['prev_room'];
                $exam1=$_POST['exam1'];
                $tmarks1=$_POST['tmarks1'];
                $omarks1=$_POST['omarks1'];
                $class1=$_POST['class1'];
                $class2=$_POST['class2'];
                $class3=$_POST['class3'];
                $exam2=$_POST['exam2'];
                $tmarks2=$_POST['tmarks2'];
                $omarks2=$_POST['omarks2'];
                $exam3=$_POST['exam3'];
                $tmarks3=$_POST['tmarks3'];
                $omarks3=$_POST['omarks3'];
                $policy=$_POST['policy'];
                $r_file=$_FILES['r_file'];
                $file_name=$_FILES['r_file']['name'];
                $size=$_FILES['r_file']['size'];
                $type=$_FILES['r_file']['type'];
                $tmp_name=$_FILES['r_file']['tmp_name'];
                $target =getcwd()."/uploads";

                $percent1=($omarks1 / $tmarks1)*100;
                if ($tmarks2 != null && $omarks2 != null){
                    $percent2=($omarks2 / $tmarks2)*100;
                }else{
                    $percent2 = 0;
                }
                if ($tmarks3 != null && $omarks3 != null){
                    $percent3=($omarks3 / $tmarks3)*100;
                }else{
                    $percent3 = 0;
                }

                if ($f_name.trim(" ") == null && $g_name.trim(" ") == null){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please enter either father or guardian name</p>";
                }elseif ($g_name.trim(" ") != null && $g_relation.trim(" ") == null){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please enter relation with guardian.</p>";
                }elseif (!preg_match('/^[0-9]{10}+$/', $f_mob)){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please enter valid 10 digit mobile number</p>";
                }elseif ($f_name.trim(" ") != null && $g_name.trim(" ") != null ){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please enter any one name father or guardian</p>";
                }elseif ($res == 'yes' && $r_details.trim("") == null){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please enter details of reserved category proof.</p>";
                }elseif ($res == 'yes' && $r_file == null){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please upload reserve category proof document.</p>";
                }elseif ($hostel == 'yes' && $prev_room.trim("") == null){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please enter previous room no.</p>";
                }elseif (!isset($_POST['r_file']) && $res == 'yes'){
                    echo "<p style='color: red;width: 100%;text-align: center'>Please upload proof.</p>";
                }else{
                    if(isset($_POST['r_file'])){
                        $file_path = "/hostel/uploads/" . $file_name;
                        if ($type == 'application/pdf' || $type == 'image/jpeg' || $type == 'image/png') {
                            if (!move_uploaded_file("$tmp_name", "$target/$file_name")) {
                                echo "<p style='color: red;width: 100%;text-align: center'>Error in moving file.</p>";
                            }
                        }
                    }else{
                        $file_path="";
                    }
                    $q = "INSERT INTO `hostel`(`s_name`, `e_year`, `semester`, `branch`, `gender`, `father_name`, `guardian`, `student_address`, `parent_address`, `parent_mobile`, `guardian_relation`, `reserve_cate`, `reserve_details`, `reserve_file`, `hostel_before`, `prev_year`, `prev_branch`, `prev_room`, `exam1`, `total1`, `obtain1`, `class1`, `exam2`, `total2`, `obtain2`, `class2`, `exam3`, `total3`, `obtain3`, `class3`, `policy`, `d_o_application`,`percent1`,`percent2`,`percent3`) VALUES ('$s_name','$year','$sem','$branch','$gender','$f_name','$g_name','$s_address','$f_address','$f_mob','$g_relation','$res','$r_details','$file_path','$hostel','$prev_year','$prev_branch','$prev_room','$exam1','$tmarks1','$omarks1','$class1','$exam2','$tmarks2','$omarks2','$class2','$exam3','$tmarks3','$omarks3','$class3','$policy',CURRENT_DATE,'$percent1','$percent2','$percent3')";
                    if (mysqli_query($con, $q)) {
                        echo "<p style='color: green;width: 100%;text-align: center'>Form submitted Successfully</p>";
                    } else {
                        echo "<p style='color: red;width: 100%;text-align: center'>Error in submitting.</p>";
                    }
                }
            }
        ?>
    </div>
</div>
<?php include_once('footer.php'); ?>
</body>
</html>