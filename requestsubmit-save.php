<?php
require "include/conn.php";

$vlastname = $_POST["txtlastname"];
$vfirstname = $_POST["txtfirstname"];
$vmiddlename = $_POST["txtmiddlename"];
$vgender = $_POST["txtgender"];
$vbirthdate = $_POST["txtbirthdate"];
$vcontact = $_POST["txtcontact"];
$vpurok = $_POST["txtpurok"];

$vresidentid = 0;

$sql = "SELECT * FROM resident_information  order by request_ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $vindex = $row["student_index"];
    }
}
$vstudentindex = $vstudentindex + 1;

$sql = "INSERT INTO students
(last_name, first_name, middle_name, gender)
VALUES
('$vstudentnumber', '$vlastname', '$vfirstname', '$vmiddlename', '$vgender')";

// $sql = "INSERT INTO students (student_index, student_number, last_name, first_name, middle_name, gender) VALUES ('$vstudentindex', '$vstudentnumber', '$vlastname', '$vfirstname', '$vmiddlename', '$vgender')";
if ($conn->query($sql) === true) {
} else {
}
?>
<script>
    alert("Request Submited.");
</script>


<meta  http-equiv="refresh" content=".000001;url=student.php" />
