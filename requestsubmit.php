<?php
require "include/conn.php";

$vcontact = "";
$vpurpose = "";
?>
<html>
    <body>
    <form action="studentinsert-save.php" method="post" name="formadd" enctype="multipart/form-data" novalidate>
        <table border="1">
            <tr>
                <td colspan="2" align=center>
                    <b>Check and Confirm Details</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Enter Contact Number:</label>
                </td>
                <td>
                <input type="text" name="txtcontact" id="txtcontact" value="<?php echo $vcontact; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Purpose of the Requested Document:</label>
                </td>
                <td>
                <input type="text" name="txtpurpose" id="txtpurpose" value="<?php echo $vpurpose; ?>">
                </td>
            </tr>



            <tr>
                <td colspan="2" align=center>
                <input type="submit" value="Submit Request" />
                <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='student.php'">Back</button>
                </td>
            </tr>
        </table>
    </form>

    </body>
</html>


list here requestor details
document type

Then accept user inputs:
Contact number

AUTOMATE:
date reqested
