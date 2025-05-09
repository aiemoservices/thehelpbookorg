<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Adoption Form Hindi</title>
        <?php

        require 'style.php';
        
        ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <?php
     include 'metacommon.php'
     ?> 
    <style>
      /* General Form Styles */

      * {
        box-sizing: border-box;
      }

      .form-container12367 {
form {
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    font-family: Arial, sans-serif;
}

/* Section Headers */
form h2 {
    margin-bottom: 20px;
    font-size: 1.5em;
    color: #333;
    text-align: center;
    border-bottom: 2px solid #fc5f7c;
    padding-bottom: 10px;
}

/* Form Fields */
form label {
    display: block;
    font-size: 1rem;
    font-weight: bold;
    margin-bottom: 8px;
    color: #555;
}

form input[type="text"],
form input[type="email"],
form input[type="tel"],
form textarea,
form select {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #fff;
    transition: border-color 0.3s;
}

form textarea {
    resize: vertical;
    height: 100px;
}

/* Focus Effect */
form input[type="text"]:focus,
form input[type="email"]:focus,
form input[type="tel"]:focus,
form textarea:focus,
form select:focus {
    outline: none;
    border-color: #fc5f7c;
    box-shadow: 0 0 5px rgba(252, 95, 124, 0.3);
}

/* Checkbox and Radio */
form input[type="radio"],
form input[type="checkbox"] {
    margin-right: 10px;
    transform: scale(1.2);
}

form .checkbox-label {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

/* Button Styles */
form button[type="submit"] {
    padding: 10px 15px;
    background: #fc5f7c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
}

form button[type="submit"]:hover {
    background: #d94e69;
}

/* Responsive Design */
@media (max-width: 768px) {
    form {
        padding: 15px;
    }

    form h2 {
        font-size: 1.3em;
    }

    form button[type="submit"] {
        font-size: 0.9rem;
    }
}

/* Additional Styles for Form Layout */
form .form-group {
    margin-bottom: 15px;
}

.undertaking {
    padding: 20px;
}

form .form-inline {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

form .form-inline input[type="text"],
form .form-inline input[type="tel"] {
    width: 48%;
}

form .form-text {
    font-size: 0.85rem;
    color: #888;
}

.agreeBox {
    display: flex;
}

button {
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
}

button:hover {
    background-color: #218838;
}

button:disabled {
    background-color: #76b685;
    cursor: not-allowed;
}

      }

      .margin-100 {
        margin-top: 100px;
      }
      
      .switch {
          margin-top: 20px;
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 20px;
          
          a {
              transition: 0.2s all;
            padding: 10px;
            color: #666;
            text-decoration: none;
            border-bottom: 5px solid #ffcee2;
            border-radius: 5px;
          }
          
          a:hover {
            color: #777;
            border-bottom: 5px solid #ff9ac3;              
          }
          a.active {
              color: #777;
            border-bottom: 5px solid #ff0068;  
          }
          
            a.activ:hover {
            border-bottom: 5px solid #ff0068;  
          }
         
      }
      
      
      
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="margin-100"></div>

<div class="form-container12367">
    <header>
        <h1 style="text-align: center;">Adoption Form Hindi</h1>
    </header>
    <div class="switch">
        <a href="./proc_adoption.php">English</a>
        <a href="./proc_adoption_hi.php" class="active">Hindi</a>
    </div>

    <form action="./admin/process_adoption.php" method="POST" enctype="multipart/form-data">
        <!-- Step 1: Adopter and Pet Details -->
        <div id="step-1" class="form-step123">
            <h2>पशु का विवरण</h2>
            <label>पशु का प्रकार*: <input type="text" name="animalType" required></label>
            <label>लिंग*: <input type="text" name="sex" required></label>
            <label>आयु*: <input type="text" name="age" required></label>
            <label>रंग*: <input type="text" name="color" required></label>
            <label>नस्ल*: <input type="text" name="breed" required></label>
            <label>स्वास्थ्य टिप्पणी*: <textarea name="healthRemarks"></textarea></label>
            <label>चल रहा उपचार* (यदि नहीं, तो "नहीं" लिखें): <textarea name="ongoingTreatment"></textarea></label>

            <h2>गोद लेने वाले का विवरण</h2>
            <label>गोद लेने वाले का नाम*: <input type="text" name="adopterName" required></label>
            <label>आयु*: <input type="text" name="adopterAge" required></label>
            <label>संपर्क नंबर: 
                <input type="text" name="contactPrimary" placeholder="प्राथमिक*" required>
                <input type="text" name="contactSecondary" placeholder="द्वितीयक">
            </label>
            <br>
            <label for="aadhar">आधार कार्ड की छवि* (अधिकतम आकार 3MB):&nbsp;<input type="file" id="aadhar" name="aadhar" accept=".jpg, .jpeg, image/jpeg" required></label>
            <br>
            <label>वैवाहिक स्थिति*: <textarea name="maritalStatus"></textarea></label>
            <label>ईमेल आईडी*: <input type="email" name="email" required></label>
            <label>पेशा*: <textarea name="profession"></textarea></label>

            <section class="undertaking">
              <h2>गोद लेने वाले की सहमति</h2>
              <p>
                  मैं सहमति देता/देती हूं कि ऊपर वर्णित पशु को मैंने और/या मेरे परिवार के लिए गोद लिया है। मैं निम्नलिखित शर्तों को मानता/मानती हूं:
              </p>
              <ol>
                  <li>मैं इस पशु को किसी भी व्यक्ति, व्यापारी, संस्थान, या अन्य किसी को नहीं दूंगा/दूंगी।</li>
                  <li>मैं इस पशु की मानवता और जिम्मेदारी से देखभाल करूंगा/करूंगी।</li>
                  <li>मैं इस पशु को 7 महीने की उम्र में नसबंदी करवाऊंगा/करवाऊंगी।</li>
                  <li>मैं इस पशु के लिए कॉलर और पहचान टैग सुनिश्चित करूंगा/करूंगी।</li>
                  <li>मैं पशु की देखभाल के लिए निगरानी को स्वीकार करता/करती हूं।</li>
                  <li>कि, यदि जानवर को त्याग दिया गया, बुरी स्थिति में पाया गया, या मेरी लापरवाही के कारण मृत पाया गया; तो *द हेल्पबुक फाउंडेशन* किसी भी स्वयंसेवक के माध्यम से मुझ पर ₹10,000 का जुर्माना लगा सकता है और मेरे खिलाफ कानूनी कार्रवाई कर सकता है।</li>
                  <li>कि यदि जानवर त्यागा गया या बुरी स्थिति में पाया गया तो मैं कानूनी और वित्तीय परिणामों को समझता/समझती हूं।</li>
              </ol>
              <br>
              <p class="agreeBox">
              <input type="checkbox" name="agree" id="agreeCheckbox123">&nbsp;<label for="agree">मैं सहमत हूं कि पशु का वर्तमान मालिक किसी भी उत्तरदायित्व से मुक्त है।</label>
              </p>
              <br>
          </section>

            <button type="button" onclick="validateStep(1)" id="nextButton123" disabled>आगे बढ़ें</button>
        </div>

        <!-- Step 2: Questionnaire -->
        <div id="step-2" class="form-step123" style="display: none;">
            <h2>गोद लेने वाले के लिए प्रश्नावली*</h2>
            <label>1. क्या आपने पहले कोई पालतू पशु रखा है? <textarea name="currentPets" rows="3" required></textarea></label>
            <label>2. क्या आपके पास परिवार/मकान मालिक की अनुमति है? <textarea name="permission" rows="3" required></textarea></label>
            <label>3. आप फ्लैट में रहते हैं या बंगले में? <textarea name="livingArrangement" rows="3"></textarea></label>
            <label>4. क्या आपके पास बगीचा है? <textarea name="gardenDetails" rows="3"></textarea></label>
            <label>5. क्या आपका घर पालतू पशुओं के लिए सुरक्षित है? <textarea name="houseProofing" rows="3"></textarea></label>
            <label>6. क्या आपका घर स्वयं का है या किराए पर? <textarea name="ownershipStatus" rows="2"></textarea></label>
            <label>7. मकान मालिक का संपर्क (यदि किराए पर): <textarea name="landlordContact" rows="2"></textarea></label>
            <label>8. क्या आपके घर में बच्चे हैं? यदि हां, तो उनकी आयु: <textarea name="childrenAges" rows="3"></textarea></label>
            <label>9. प्रति दिन पालतू पशु कितने घंटे अकेला रहेगा? <textarea name="petAloneTime" rows="2"></textarea></label>
            <label>10. क्या आप पालतू पशु के प्रशिक्षण के लिए तैयार हैं? <textarea name="trainingPreparedness" rows="3"></textarea></label>
            <label>11. यदि आप यात्रा करेंगे, तो पालतू पशु कहां रहेगा? <textarea name="travelPlan" rows="3"></textarea></label>
            <label>12. स्थान परिवर्तन के समय क्या आप पालतू पशु को साथ ले जाएंगे? <textarea name="relocationPlan" rows="3"></textarea></label>
            <label>13. क्या आपके पास अन्य पालतू पशु हैं? <textarea name="otherPets" rows="3"></textarea></label>
            <label>14. क्या आप पालतू पशु के वित्तीय जिम्मेदारियों को समझते हैं? <textarea name="financialResponsibility" rows="3" required></textarea></label>
            <label>15. अन्य कोई जानकारी जो आप साझा करना चाहते हैं: <textarea name="additionalInfo" rows="3"></textarea></label>
            
            <button type="button" onclick="showStep(1)">पिछले चरण पर जाएं</button>
            <button type="submit">प्रस्तुत करें</button>
        </div>
    </form>
</div>

<script>
    // JavaScript for form navigation and basic validation
    function showStep(step) {
        document.querySelectorAll('.form-step123').forEach(stepElement => {
            stepElement.style.display = 'none';
        });
        document.getElementById(`step-${step}`).style.display = 'block';
    }

    function validateStep(step) {
        let isValid = true;
        const inputs = document.querySelectorAll(`#step-${step} input, #step-${step} textarea, #step-${step} select`);
        inputs.forEach(input => {
            if (input.required && input.value.trim() === '') {
                isValid = false;
                alert(`कृपया आवश्यक फ़ील्ड भरें: ${input.name}`);
            }
        });
        if (isValid) {
            showStep(step + 1);
        }
    }

    const checkbox = document.getElementById("agreeCheckbox123");
    const button = document.getElementById("nextButton123");

    checkbox.addEventListener("change", function () {
        button.disabled = !checkbox.checked;
    });
</script>

<?php include 'footer.php'; ?>
        <?php

        require 'script.php';
        
        ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>
</html>
