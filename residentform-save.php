<?php
require "include/conn.php";

// Personal Information
$vfirstname = $_POST["txtFirstName"];
$vlastname = $_POST["txtLastName"];
$vmiddlename = $_POST["txtMiddleName"];
$vbirthday = $_POST["dtBirthday"];
$vage = $_POST["numAge"];
$vgender = $_POST["selGender"];

// Status and Contact
$vcivilstatus = $_POST["selCivilStatus"];
$vcontactnumber = $_POST["txtContactNumber"];
$vbirthplace = $_POST["txtBirthplace"];

// Stay Duration
$vstayyears = $_POST["numStayYears"];
$vstaymonths = $_POST["numStayMonths"];

// Request Details
$vcertificatetype = $_POST["selCertificateType"];
$vquantity = $_POST["numQuantity"];
$vpurpose = $_POST["txtPurpose"];

// Validate blank inputs
if (
    trim($vfirstname) == "" ||
    trim($vlastname) == "" ||
    trim($vbirthday) == "" ||
    trim($vage) == "" ||
    trim($vgender) == "" ||
    trim($vcivilstatus) == "" ||
    trim($vcontactnumber) == "" ||
    trim($vbirthplace) == "" ||
    trim($vstayyears) == "" ||
    trim($vcertificatetype) == "" ||
    trim($vquantity) == "" ||
    trim($vpurpose) == ""
) { ?>
<script>
    alert("All fields are required. Please fill in all fields before saving.");
    window.history.back();
</script>
<?php exit();}
?>





<?php
// Check for duplicate course code
$sqlcheck = "SELECT * FROM residents WHERE course_code='$vcoursecode'";
$resultcheck = $conn->query($sqlcheck);
if ($resultcheck->num_rows > 0) { ?>
<script>
    alert("Course Code already exists. Please use a different Course Code.");
    window.history.back();
</script>
<?php exit();}

// Get the last course_index and increment by 1
$vcourseindex = 0;
$sql = "SELECT * FROM course ORDER BY course_index DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $vcourseindex = $row["course_index"];
}
$vcourseindex = $vcourseindex + 1;

$sql = "INSERT INTO course
(course_index, course_code, course_description, units)
VALUES
('$vcourseindex', '$vcoursecode', '$vcoursedescription', '$vunits')";

$conn->query($sql);
?>
<script>
    alert("Record Saved.");
</script>
<meta http-equiv="refresh" content=".000001;url=course.php" />
