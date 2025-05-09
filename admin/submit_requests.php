<?php
// Set the upload directory
$uploadDir = './documents/';

// Ensure the upload directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Set the upload directory
$uploadDir2 = './aadhar';

if (!is_dir($uploadDir2)) {
    mkdir($uploadDir2, 0777, true);  // Ensure the directory is created with proper permissions
}


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $patientName = $_POST['patient_name'];
    $bloodGroup = $_POST['blood_group'];
    $aadhar = $_POST['adhar'];
    $address = $_POST['address'];
    $requestType = $_POST['request_type'];
    $phone = $_POST['phone'];
    $hospital = $_POST['hospital'];
    
    if (isset($_FILES['aadhar']) && $_FILES['aadhar']['error'] === UPLOAD_ERR_OK) {
        // Sanitize file name and set the path
        $aadhar = $_FILES['aadhar'];
        $aadharPath = $uploadDir2 . DIRECTORY_SEPARATOR . basename($name . '_' . $phone . '_' . date("Y-m-d") . '.jpg');

        // Check file size (optional, for example max size 2MB)
        if ($aadhar['size'] > 3 * 1024 * 1024) { // 2MB limit
            die("The file is too large.");
        }

        // Validate file type (ensure it's a JPG file)
        $fileType = mime_content_type($aadhar['tmp_name']);
        if ($fileType !== 'image/jpeg') {
            die("Invalid file type. Only JPG files are allowed.");
        }

        // Move the uploaded file to the desired directory
        if (!move_uploaded_file($aadhar['tmp_name'], $aadharPath)) {
            die("Error in saving the aadhar file.");
        }
    } else {
        die("Error uploading file: " . $_FILES['aadhar']['error']);
    }

    // Handle the medical details document upload
    $medicalDetails = $_FILES['medical_details'];
    $medicalDetailsPath = $uploadDir . DIRECTORY_SEPARATOR . basename($name . '_' . $phone . '_' . date("Y-m-d") . '.jpg');;
    
    // Check if the file is uploaded and move it to the documents folder
    if ($medicalDetails['size'] > 0 && $medicalDetails['size'] <= 200 * 1024) { // Check size again for safety
        if (move_uploaded_file($medicalDetails['tmp_name'], $medicalDetailsPath)) {
            // Save the data to blood_request.txt
            $data = "Name: $name\nPatient Name: $patientName\nBlood Group Needed: $bloodGroup\nAadhar: $aadhar\n";
            $data .= "Address: $address\nRequest Type: $requestType\nPhone: $phone\nHospital: $hospital\n";
            $data .= "Medical Details Path: $medicalDetailsPath\n\n";
            $data .= "-----------------------------\n";

            file_put_contents('blood_request.txt', $data, FILE_APPEND | LOCK_EX);
            echo "Your request has been submitted successfully!";
        } else {
            echo "Error: Failed to upload the medical document.";
        }
    } else {
        echo "Error: Medical document must be less than 200KB.";
    }
} else {
    echo "Error: Invalid form submission.";
}
?>
