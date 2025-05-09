<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Animal Adoption Form</title>
    <link rel="stylesheet" href="style.css">
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
<?php

include 'header.php';

?>
<div class="margin-100"></div>

    <div class="form-container12367">
        <header>
            <h1 style="text-align: center;">Animal Adoption Form</h1>
        </header>
        
        
        
      <div class="switch">
        <a href="./proc_adoption.php" class="active">English</a>
        <a href="./proc_adoption_hi.php">Hindi</a>
      </div>
    
    

        <form action="./admin/process_adoption.php" method="POST" enctype="multipart/form-data">
            <!-- Step 1: Adopter and Pet Details -->
            <div id="step-1" class="form-step123">
                <h2>Details of the Adoptee Animal</h2>
                <label>Type of Animal*: <input type="text" name="animalType" required></label>
                <label>Sex*: <input type="text" name="sex" required></label>
                <label>Age*: <input type="text" name="age" required></label>
                <label>Color*: <input type="text" name="color" required></label>
                <label>Breed*: <input type="text" name="breed" required></label>
                <label>Health Remarks*: <textarea name="healthRemarks"></textarea></label>
                <label>Ongoing Treatment* (Mention 'No' if there is none): <textarea name="ongoingTreatment"></textarea></label>

                <h2>Details of the Adopter</h2>
                <label>Name of the Adopter*: <input type="text" name="adopterName" required></label>
                <label>Age*: <input type="text" name="adopterAge" required></label>
                <label>Contact Nos: 
                    <input type="text" name="contactPrimary" placeholder="Primary*" required>
                    <input type="text" name="contactSecondary" placeholder="Secondary">
                </label>
                <br>
                <label for="aadhar">Aadhar Card Image* (Max Size 3MB):&nbsp;<input type="file" id="aadhar" name="aadhar" accept=".jpg, .jpeg, image/jpeg" required></label>
                <br>
                <label>Marital Status*: <textarea name="maritalStatus"></textarea></label>
                <label>Email ID*: <input type="email" name="email" required></label>
                <label>Profession*: <textarea name="profession"></textarea></label>

                <section class="undertaking">
                  <h2>UNDERTAKING BY THE ADOPTER</h2>
                  <p>
                      I do hereby agree that the above described animal is being adopted by me as a pet for myself and/or my immediate family. I unconditionally undertake as under:
                  </p>
                  <ol>
                      <li>That I will not sell, give away, or otherwise dispose of said animal to any persons, dealer, retailer, auction, institute, or any other entity.</li>
                      <li>That I will take care of the aforementioned animal in a humane and responsible manner, providing food, water, and veterinary care.</li>
                      <li>That I will sterilize the animal at the age of 7 months and bear all related costs.</li>
                      <li>That I will ensure the animal always wears a collar or harness with identification tags.</li>
                      <li>That I allow surprise visits to ensure the animal's welfare and understand legal consequences for neglect or cruelty.</li>
                      <li>That, in case the animal is found abandoned, in a bad condition or dead due to my negligence; The Helpbook Foundation through any of its volunteers can impose a fine of Rs 10,000/- and proceed with legal action against me.</li>
                      <li>That I understand legal and financial consequences if the animal is found abandoned or in poor condition.</li>
                  </ol>
                  <br>
                  <p class="agreeBox">
                  <input type="checkbox" name="agree" id="agreeCheckbox123">&nbsp;<label for="agree">I hereby agree that the current owner makes no warranties about the animal's temperament and agree to absolve the current owner of any liabilities.</label>
                  </p>
                  <br>
              </section>

                <button type="button" onclick="validateStep(1)" id="nextButton123" disabled>Next</button>
            </div>

            <!-- Step 2: Questionnaire -->
            <div id="step-2" class="form-step123" style="display: none;">
                <h2>QUESTIONNAIRE FOR THE ADOPTER*</h2>
                <label>1. Have you owned a pet before? <textarea name="currentPets" rows="3" required></textarea></label>
                <label>2. Do you have requisite permission from family/landlord? 
                    <textarea name="permission" rows="3" required></textarea>
                </label>
                <label>3. Do you live in a flat or bungalow? <textarea name="livingArrangement" rows="3"></textarea></label>
                <label>4. Do you have a yard or garden? <textarea name="gardenDetails" rows="3"></textarea></label>
                <label>5. Is your home pet-proofed? <textarea name="houseProofing" rows="3"></textarea></label>
                <label>6. Is your home owned or rented? <textarea name="ownershipStatus" rows="2"></textarea></label>
                <label>7. Contact of landlord (if rented): <textarea name="landlordContact" rows="2"></textarea></label>
                <label>8. Are there children in your home? If yes, ages: <textarea name="childrenAges" rows="3"></textarea></label>
                <label>9. How many hours per day will the pet be alone? <textarea name="petAloneTime" rows="2"></textarea></label>
                <label>10. Are you prepared for pet training? <textarea name="trainingPreparedness" rows="3"></textarea></label>
                <label>11. If you travel, where will the pet stay? <textarea name="travelPlan" rows="3"></textarea></label>
                <label>12. Will you relocate with the pet if you move? <textarea name="relocationPlan" rows="3"></textarea></label>
                <label>13. Do you have other pets? <textarea name="otherPets" rows="3"></textarea></label>
                <label>14. Do you understand the financial responsibilities of owning a pet? <textarea name="financialResponsibility" rows="3" required></textarea></label>
                <label>15. Any other details you'd like to share: <textarea name="additionalInfo" rows="3"></textarea></label>
                
                <button type="button" onclick="showStep(1)">Back</button>
                <button type="submit">Submit</button>
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
                    alert(`Please fill the required field: ${input.name}`);
                }
            });
            if (isValid) {
                showStep(step + 1);
            }
        }

        const checkbox = document.getElementById("agreeCheckbox123");
        const button = document.getElementById("nextButton123");

        // Add an event listener to the checkbox
        checkbox.addEventListener("change", function () {
        // Enable or disable the button based on the checkbox state
        button.disabled = !checkbox.checked;
        });
    </script>

<?php

include 'footer.php';

?>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>
</html>
