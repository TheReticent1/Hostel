<?php
include('SessionVarCheck.php');
include('connection.php');
$q1 = "select * from hostel where id = {$_SESSION['edit']}";
$res = mysqli_query($con, $q1);
?>
<html>
<head>
    <title>GPW Hostel's, Washim</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<?php include_once('AdminMenubar.php'); ?>
<div class="container">
    <div class="host">
        <h1>Government Polytechnic Washim</h1>
        <h3>Hostel Entry Application 2019-2020</h3>
         <?php
        while ($row = mysqli_fetch_assoc($res)){
            echo "        
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"text\" placeholder=\"Applicant Full Name\" name=\"s_name\" class=\"control controller\" required value=\"{$row['s_name']}\">
            <div style=\"display: flex\">
                <select class=\"selector\" name=\"year\" required>
                    <option value=\"\" selected disabled hidden>Select Year</option>
                    <option value=\"first year\">First Year</option>
                    <option value=\"second year\">Second Year</option>
                    <option value=\"third year\">Third Year</option>
                </select>
                <select class=\"selector\" name=\"sem\" required>
                    <option value=\"\" selected disabled hidden>Select Semester</option>
                    <option value=\"first sem\">First sem</option>
                    <option value=\"third sem\">Third sem</option>
                    <option value=\"fifth sem\">Fifth sem</option>
                </select>
                <select class=\"selector\" name=\"branch\" required>
                    <option value=\"\" selected disabled hidden>Select Branch</option>
                    <option value=\"mechanical\">Mechanical Engineering</option>
                    <option value=\"automobile\">Automobile Engineering</option>
                    <option value=\"civil\">Civil Engineering</option>
                    <option value=\"electrical\">Electrical & Telecommunication</option>
                    <option value=\"electronic\">Electronics Engineering</option>
                    <option value=\"information technology\">Information Technology</option>
                </select>
                <select class=\"selector\" name=\"gender\" required>
                    <option value=\"\" selected disabled hidden>Select Gender</option>
                    <option value=\"male\">Male</option>
                    <option value=\"female\">Female</option>
                </select>
            </div>
            <input type=\"text\" placeholder=\"Father's Full Name\" name=\"f_name\" class=\"control controller\" value=\"{$row['father_name']}\">
            <input type=\"text\" placeholder=\"Guardian Full Name (if no parents)\" name=\"g_name\"
                   class=\"control controller\" value=\"{$row['guardian']}\">
            <input type=\"text\" placeholder=\"Relationship with Guardian (if no parents)\" name=\"g_relation\"
                   class=\"control controller\" value=\"{$row['guardian_relation']}\">
            <textarea rows=\"5\" cols=\"50\" placeholder=\"Applicant Permanent Address\"
                      class=\"control controller\" name=\"s_address\" required>{$row['student_address']}</textarea>
            <textarea rows=\"5\" cols=\"50\" placeholder=\"Father/Guardian Address\"
                      class=\"control controller\" name=\"f_address\" required>{$row['parent_address']}</textarea>
            <input type=\"text\" placeholder=\"Father/Guardian Mobile No.\" name=\"f_mob\" class=\"control controller\"
                   required value=\"{$row['parent_mobile']}\">
            <div style=\"border: 1px solid lightgray;margin: 20px\">
                <div style=\"display: flex\">
                    <label class=\"control controller\" style=\"border: none;width: 50%\">Is an applicant of reserved
                        class?</label>
                    <select class=\"selector\" name=\"res\" required>
                        <option value=\"\" selected disabled hidden>Select</option>
                        <option value=\"yes\">Yes</option>
                        <option value=\"no\">No</option>
                    </select>
                </div>
                <input type=\"text\" placeholder=\"if reserved class 'yes' Detail and attached Proof (Dakhala)\"
                       name=\"r_details\"
                       class=\"control controller\" value=\"{$row['reserve_details']}\">
                <input type=\"file\" name=\"r_file\" class=\"control controller\">
            </div>
            <div style=\"border: 1px solid lightgray;margin: 20px\">
                <div style=\"display: flex\">
                    <label class=\"control controller\" style=\"border: none;width: 50%\">Is an applicant was in Hostel
                        before?</label>
                    <select class=\"selector\" name=\"hostel\" required>
                        <option value=\"\" selected disabled hidden>Select</option>
                        <option value=\"yes\">Yes</option>
                        <option value=\"no\">No</option>
                    </select>
                </div>
                <div style=\"display: flex\">
                    <label class=\"control controller\" style=\"border: none;width: 50%\">If 'Yes' Previous year</label>
                    <select class=\"selector\" name=\"prev_year\" required>
                        <option value=\"\" selected disabled hidden>Select Previous Year</option>
                        <option value=\"NA\">Not Available</option>
                        <option value=\"first year\">First Year</option>
                        <option value=\"second year\">Second Year</option>
                    </select>
                </div>
                <div style=\"display: flex\">
                    <label class=\"control controller\" style=\"border: none;width: 50%\">If 'Yes' Previous branch</label>
                    <select class=\"selector\" name=\"prev_branch\" required>
                        <option value=\"\" selected disabled hidden>Select Branch</option>
                        <option value=\"NA\">Not Available</option>
                        <option value=\"mechanical\">Mechanical Engineering</option>
                        <option value=\"automobile\">Automobile Engineering</option>
                        <option value=\"civil\">Civil Engineering</option>
                        <option value=\"electrical\">Electrical & Telecommunication</option>
                        <option value=\"electronic\">Electronics Engineering</option>
                        <option value=\"information technology\">Information Technology</option>
                    </select>
                </div>
                <input type=\"text\" placeholder=\"Hostel Previous Room no.\" name=\"prev_room\" class=\"control controller\" value=\"{$row['prev_room']}\">
            </div>
            <div class=\"tabular\">
                <table>
                    <tbody>
                    <tr>
                        <th colspan=\"4\" style=\"font-weight: bold;padding: 10px\">Education Details</th>
                    </tr>
                    <tr>
                        <td>
                            <input type=\"text\" placeholder=\"Exam Name.\" name=\"exam1\" class=\"control controller tabs\"
                                   required value=\"{$row['exam1']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Total Marks.\" name=\"tmarks1\" class=\"control controller tabs\"
                                   required value=\"{$row['total1']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Obtained Marks.\" name=\"omarks1\"
                                   class=\"control controller tabs\" required value=\"{$row['obtain1']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Class.\" name=\"class1\" class=\"control controller tabs\"
                                   required value=\"{$row['class1']}\">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type=\"text\" placeholder=\"Exam Name.\" name=\"exam2\" class=\"control controller tabs\" value=\"{$row['exam2']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Total Marks.\" name=\"tmarks2\"
                                   class=\"control controller tabs\" value=\"{$row['total2']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Obtained Marks.\" name=\"omarks2\"
                                   class=\"control controller tabs\" value=\"{$row['obtain2']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Class.\" name=\"class2\" class=\"control controller tabs\" value=\"{$row['class2']}\">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type=\"text\" placeholder=\"Exam Name.\" name=\"exam3\" class=\"control controller tabs\" value=\"{$row['exam3']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Total Marks.\" name=\"tmarks3\"
                                   class=\"control controller tabs\" value=\"{$row['total3']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Obtained Marks.\" name=\"omarks3\"
                                   class=\"control controller tabs\" value=\"{$row['obtain3']}\">
                        </td>
                        <td>
                            <input type=\"text\" placeholder=\"Class.\" name=\"class3\" class=\"control controller tabs\" value=\"{$row['class3']}\">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div style=\"display: flex\">
                <input type=\"checkbox\" required style=\"margin: 10px 10px 10px 20px\" name=\"policy\" value=\"yes\">
                <p style=\"margin-top: 0;\">The above information is true based on my knowledge. I'm giving my words to
                    follow hostel rules and perodic notices. I know, if I misbehave in hostel i will be dismiss from
                    hostel by higher authorities.</p>
            </div>
            <input type=\"submit\" class=\"login-btn marginer\" style=\"width: 93%\" value=\"Update Application\" name=\"submit\">
        </form>";
        }
        ?>
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

            if (!isset($_POST['r_file'])){
                $file_path = "";
            }
            if ($f_name.trim(" ") == null && $g_name.trim(" ") == null){
                echo "<p>Please enter either father or guardian name</p>";
            }elseif ($g_name.trim(" ") != null && $g_relation.trim(" ") == null){
                echo "<p>Please enter relation with guardian.</p>";
            }elseif (!preg_match('/^[0-9]{10}+$/', $f_mob)){
                echo "<p>Please enter valid 10 digit mobile number</p>";
            }elseif ($f_name.trim(" ") != null && $g_name.trim(" ") != null ){
                echo "<p>Please enter any one name father or guardian</p>";
            }elseif ($res == 'yes' && $r_details.trim("") == null){
                echo "<p>Please enter details of reserved category proof.</p>";
            }elseif ($res == 'yes' && $r_file == null){
                echo "<p>Please upload reserve category proof document.</p>";
            }elseif ($hostel == 'yes' && $prev_room.trim("") == null){
                echo "<p>Please enter previous room no.</p>";
            } elseif ($type == 'application/pdf' || $type == 'image/jpeg' || $type == 'image/png') {
                if (!move_uploaded_file("$tmp_name", "$target/$file_name")) {
                    echo "<p>Error in moving file.</p>";
                    $file_path = "";
                }else{
                    $file_path = "/hostel/uploads/" . $file_name;
                }
            }
            $q = "UPDATE `hostel` SET `s_name`='$s_name',`e_year`='$year',`semester`='$sem',`branch`='$branch',`gender`='$gender',`father_name`='$f_name',`guardian`='$g_name',`student_address`='$s_address',`parent_address`='$f_address',`parent_mobile`='$f_mob',`guardian_relation`='$g_relation',`reserve_cate`='$res',`reserve_details`='$r_details',`reserve_file`='$file_path',`hostel_before`='$hostel',`prev_year`='$prev_year',`prev_branch`='$prev_branch',`prev_room`='$prev_room',`exam1`='$exam1',`total1`='$tmarks1',`obtain1`='$omarks1',`class1`='$class1',`exam2`='$exam2',`total2`='$tmarks2',`obtain2`='$omarks2',`class2`='$class2',`exam3`='$exam3',`total3`='$tmarks3',`obtain3`='$omarks3',`class3`='$class3',`policy`='$policy',`percent1`='$percent1',`percent2`='$percent2',`percent3`='$percent3' WHERE id={$_SESSION['edit']}";
            if (mysqli_query($con, $q)) {
                echo "<p>Form updated Successfully</p>";
            } else {
                echo "<p>Error in updating.</p>";
            }
        }
        ?>
    </div>
</div>
<?php include_once('footer.php'); ?>
</body>
</html>