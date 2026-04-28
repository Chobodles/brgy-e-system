<?php
require "include/conn.php"; ?>

<html>
    <body>
        <form name="form1" action="residentinformation.php" method="post">
            <label>
            Select Document:
            </label>

            <select name="txtdocumenttype" id="documenttype" onchange="form.submit()">

                <option value="">Select Document</option>
                <?php
                $sql1 = "SELECT * FROM documents order by document_ID";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0) {
                    while ($row1 = $result1->fetch_assoc()) { ?>
                            <option value="<?php echo $row1["document_ID"]; ?>">
                                <?php echo $row1["document_type"]; ?></option>
                            <?php }
                }
                ?>

            </select>
            <button type="button" onClick="window.location.href='index.php'">Back</button>
        </form>
    </body>
</html>

<!--Here is select a document or go blotter-->
