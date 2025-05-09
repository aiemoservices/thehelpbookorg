<?php
$filePath = 'adoption_requests_proc.txt';

// Set the upload directory
$uploadDir = './aadhar';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);  // Ensure the directory is created with proper permissions
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $data = [];
    foreach ($_POST as $key => $value) {
        $data[$key] = htmlspecialchars($value);
    }

    // Validate required fields
    $requiredFields = ['animalType', 'sex', 'age', 'adopterName', 'email', 'contactPrimary', 'permission', 'financialResponsibility'];
    foreach ($requiredFields as $field) {
        if (empty($data[$field])) {
            die("Error: Missing required field - $field.");
        }
    }

    // Handle the aadhar document upload
    if (isset($_FILES['aadhar']) && $_FILES['aadhar']['error'] === UPLOAD_ERR_OK) {
        // Sanitize file name and set the path
        $aadhar = $_FILES['aadhar'];
        $aadharPath = $uploadDir . DIRECTORY_SEPARATOR . basename($data['adopterName'] . '_' . $data['contactPrimary'] . '.jpg');

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

    // Prepare formatted data for saving
    $formattedData = "Animal Details:\n";
    $formattedData .= "Type: {$data['animalType']}\n";
    $formattedData .= "Sex: {$data['sex']}\n";
    $formattedData .= "Age: {$data['age']}\n";
    $formattedData .= "Color: " . (!empty($data['color']) ? $data['color'] : 'N/A') . "\n";
    $formattedData .= "Breed: " . (!empty($data['breed']) ? $data['breed'] : 'N/A') . "\n";
    $formattedData .= "Health Remarks: " . (!empty($data['healthRemarks']) ? $data['healthRemarks'] : 'N/A') . "\n";
    $formattedData .= "Ongoing Treatment: " . (!empty($data['ongoingTreatment']) ? $data['ongoingTreatment'] : 'N/A') . "\n";

    $formattedData .= "\nAdopter Details:\n";
    $formattedData .= "Name: {$data['adopterName']}\n";
    $formattedData .= "Age: " . (!empty($data['adopterAge']) ? $data['adopterAge'] : 'N/A') . "\n";
    $formattedData .= "Contact: {$data['contactPrimary']} / " . (!empty($data['contactSecondary']) ? $data['contactSecondary'] : 'N/A') . "\n";
    $formattedData .= "Marital Status: " . (!empty($data['maritalStatus']) ? $data['maritalStatus'] : 'N/A') . "\n";
    $formattedData .= "Email: {$data['email']}\n";
    $formattedData .= "Profession: " . (!empty($data['profession']) ? $data['profession'] : 'N/A') . "\n";

    $formattedData .= "\nQuestionnaire Responses:\n";

    // Add responses to the questionnaire
    $questions = [
        'currentPets' => "1: Have you owned a pet before?",
        'permission' => "2: Do you have requisite permission from family/landlord?",
        'livingArrangement' => "3: Do you live in a flat or bungalow?",
        'gardenDetails' => "4: Do you have a yard or garden?",
        'houseProofing' => "5: Is your home pet-proofed?",
        'ownershipStatus' => "6: Is your home owned or rented?",
        'landlordContact' => "7: Contact of landlord (if rented):",
        'childrenAges' => "8: Are there children in your home? If yes, ages:",
        'petAloneTime' => "9: How many hours per day will the pet be alone?",
        'trainingPreparedness' => "10: Are you prepared for pet training?",
        'travelPlan' => "11: If you travel, where will the pet stay?",
        'relocationPlan' => "12: Will you relocate with the pet if you move?",
        'otherPets' => "13: Do you have other pets?",
        'financialResponsibility' => "14: Do you understand the financial responsibilities of owning a pet?",
        'additionalInfo' => "15: Any other details you'd like to share:",
    ];

    foreach ($questions as $key => $question) {
        $response = !empty($data[$key]) ? $data[$key] : 'N/A';
        $formattedData .= "$question\nResponse: $response\n\n";
    }

    $formattedData .= "-----------------------------\n";

    // Save to file
    if (file_put_contents($filePath, $formattedData, FILE_APPEND | LOCK_EX)) {
        header('Location: success.php');
        exit();
    } else {
        echo "Error saving data.";
    }
} else {
    echo "Invalid request method.";
}
?>
