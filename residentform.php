<!doctype html>



<?php require "include/conn.php"; ?>

<html>
    <head>
        <title>Document Request | Barangay Tugtug E-System</title>
        <link rel="stylesheet" href="cssfile/residentform.css" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="photos/logo.png.png" />
    </head>

    <body>
        <button class="btn-back" onclick="history.back()">
            <image class="backbutton" src="photos/backbutton.png"></image>
            <label class="back">Back</label>
        </button>

        <div class="form-container">
            <div class="form-header">
                <div class="header-icon">
                    <svg
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        fill="white"
                    >
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"
                        />
                    </svg>
                </div>
                <div class="header-text">
                    <h2>Personal Information</h2>
                    <p>
                        Please provide your details accurately as they will
                        appear on the document
                    </p>
                </div>
            </div>

            <form class="personal-info-form">
                <div class="row">
                    <div class="form-group">
                        <label for="txtFirstName"
                            >FIRST NAME <span class="required">*</span></label
                        >
                        <input
                            type="text"
                            name="txtFirstName"
                            id="txtFirstName"
                            placeholder="e.g. Juan"
                            value=""
                        />
                    </div>
                    <div class="form-group">
                        <label for="txtLastName"
                            >LAST NAME <span class="required">*</span></label
                        >
                        <input
                            type="text"
                            name="txtLastName"
                            id="txtLastName"
                            placeholder="e.g. Dela Cruz"
                            value=""
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="txtMiddleName">MIDDLE NAME</label>
                        <input
                            type="text"
                            name="txtMiddleName"
                            id="txtMiddleName"
                            placeholder="e.g. Santos"
                            value=""
                        />
                    </div>
                    <div class="form-group">
                        <label for="dtBirthday"
                            >BIRTHDAY <span class="required">*</span></label
                        >
                        <input
                            type="date"
                            name="dtBirthday"
                            id="dtBirthday"
                            value=""
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="numAge"
                            >AGE <span class="required">*</span></label
                        >
                        <input
                            type="number"
                            min="0"
                            name="numAge"
                            id="numAge"
                            placeholder="0"
                            value=""
                        />
                    </div>
                    <div class="form-group">
                        <label for="selGender"
                            >GENDER <span class="required">*</span></label
                        >
                        <select name="selGender" id="selGender">
                            <option value="">— Select —</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="selCivilStatus"
                            >CIVIL STATUS <span class="required">*</span></label
                        >
                        <select name="selCivilStatus" id="selCivilStatus">
                            <option value="">— Select —</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtContactNumber"
                            >CONTACT NUMBER
                            <span class="required">*</span></label
                        >
                        <input
                            type="text"
                            name="txtContactNumber"
                            id="txtContactNumber"
                            placeholder="09XX XXX XXXX"
                            value=""
                        />
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="txtBirthplace"
                        >BIRTHPLACE <span class="required">*</span></label
                    >
                    <input
                        type="text"
                        name="txtBirthplace"
                        id="txtBirthplace"
                        placeholder="City/Province"
                        value=""
                    />
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="numStayYears"
                            >LENGTH OF STAY (YEARS)
                            <span class="required">*</span></label
                        >
                        <input
                            type="number"
                            min="0"
                            name="numStayYears"
                            id="numStayYears"
                            placeholder="Years"
                            value=""
                        />
                    </div>
                    <div class="form-group">
                        <label for="numStayMonths"
                            >LENGTH OF STAY (MONTHS)</label
                        >
                        <input
                            type="number"
                            min="0"
                            max="11"
                            name="numStayMonths"
                            id="numStayMonths"
                            placeholder="Months"
                            value=""
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="selCertificateType"
                            >KIND OF CERTIFICATE
                            <span class="required">*</span></label
                        >
                        <select
                            name="selCertificateType"
                            id="selCertificateType"
                        >

                                <option value="">Select Certificate</option>
                                <?php
                                $sql1 =
                                    "SELECT * FROM documents order by document_ID";
                                $result1 = $conn->query($sql1);
                                if ($result1->num_rows > 0) {
                                    while ($row1 = $result1->fetch_assoc()) { ?>
                                        <option value="<?php echo $row1[
                                            "document_ID"
                                        ]; ?>">
                                            <?php echo $row1["document_type"] .
                                                ", " .
                                                $row1["price"]; ?>
                                        </option>
                                    <?php }
                                }
                                ?>



                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numQuantity"
                            >QUANTITY (ILAN)
                            <span class="required">*</span></label
                        >
                        <input
                            type="number"
                            min="1"
                            name="numQuantity"
                            id="numQuantity"
                            value="1"
                        />
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="txtPurpose"
                        >PURPOSE <span class="required">*</span></label
                    >
                    <input
                        type="text"
                        name="txtPurpose"
                        id="txtPurpose"
                        placeholder="Reason for request (e.g., Job Requirement)"
                        value=""
                    />
                </div>

                <button type="submit" onClick="window.location.href='residentform-save.php'">&nbsp;&nbsp;&nbsp;&nbsp;submit&nbsp;&nbsp;&nbsp;&nbsp;</button>


            </form>
        </div>
    </body>
</html>
