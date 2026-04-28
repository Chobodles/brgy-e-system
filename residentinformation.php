<?php
require "include/conn.php";

$vlastname = "";
$vfirstname = "";
$vmiddlename = "";
$vbirthdate = "";
?>
<html>
    <body>
    <form action="studentinsert-save.php" method="post" name="formadd" enctype="multipart/form-data" novalidate>
        <table border="1">
            <tr>
                <td colspan="2" align=center>
                    <b>Enter Details</b>
                </td>
            </tr>

            <tr>
                <td>
                <label >Enter Last Name:</label>
                </td>
                <td>
                <input type="text" name="txtlastname" id="txtlastname" value="<?php echo $vlastname; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <label >Enter First Name:</label>
                </td>
                <td>
                <input type="text" name="txtfirstname" id="txtfirstname" value="<?php echo $vfirstname; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <label >Enter Middle Name:</label>
                </td>
                <td>
                <input type="text" name="txtmiddlename" id="txtmiddlename" value="<?php echo $vmiddlename; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Select Sex:</label>
                </td>
                <td>
                    <select name="txtgender" id="txtgender" style="width: 100%;">
                        <!--<option value="">Select Gender</option>-->
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Enter Birthdate:</label>
                </td>
                <td>
                <input type="text" name="txtbirthdate" id="txtbirthdate" value="<?php echo $vbirthdate; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Select Purok:</label>
                </td>
                <td>
                    <select name="txtpurok" id="txtpurok" style="width: 100%;">
                        <!--<option value="">Select Gender</option>-->
                        <option value="P01">Purok 1</option>
                        <option value="P02">Purok 2</option>
                        <option value="P03">Purok 3</option>
                        <option value="P04">Purok 4</option>
                        <option value="P05">Purok 5</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2" align=center>
                <input type="submit" value="Save Record" />
                <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='selectdocument.php'">Back</button>
                </td>
            </tr>
        </table>
    </form>

    </body>
</html>
