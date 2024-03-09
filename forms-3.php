<!DOCTYPE html>
<html>
<head>
    <title> Adoption Forms </title>
    <link rel="icon" href="pets-icon.png">
    <link rel="stylesheet" href="Style_Forms.css">
</head>

<body>
    
    <div class="container">
   
        <form action="submit_adoption.php" method="post">
            <h2> Adopter Information </h2>
            <div class="content">
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pets_and_paws";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch column names from the pet_rescue_information table
$stmt = $conn->query('DESCRIBE pet_rescue_information');
$columns = $stmt->fetch_all(MYSQLI_ASSOC); // Use MYSQLI_ASSOC to fetch column names as associative array




?>

                
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required>

            
                </div>
                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="middle_name" name="middle_name" required>
                </div>
                <div class="text-field">
                    <label for="suffix_name">Suffix Name</label>
                    <input type="text" id="suffix_name" name="suffix_name">
                </div>

                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>

            
                </div>
                <div class="text-field">
                    <label for="DateOfBirth">Date of Birth</label>
                    <input type="date" id="DateOfBirth" name="DateOfBirth" required>
                </div>
                <div class="select">
                    <label for="sex">Sex </label>
                    <select name="sex" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                <div class="text-field">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" required>
                </div>

            </div>
            
            
            <div class="address_occupation">

                <div class="column">
                    <h2> Address </h2>

                    <div class="address">

            <div class="text-field">
                <label for="house_number_block">House No/Blk. lot</label>
                <input type="text" id="house_number_block" name="HouseNoBlk" required>
            </div>

            <div class="text-field">
                <label for="street">Street Name</label>
                <input type="text" id="street" name="street" required>
            </div>

            <div class="text-field">
                <label for="subdivision">Subdivision</label>
                <input type="text" id="subdivision" name="subdivision" required>
            </div>

            <div class="select">
                <label for="Barangay">Barangay</label>
                <select id="barangay" name="Barangay" required>
                    <option value="" disabled selected>Select Barangay</option>
                    <!-- Populate barangay options -->
                </select>
            </div>

            <div class="select">    
                <label for="CityMunicipality">City/Municipality</label>
                <select id="city_municipality" name="CityMunicipality" required disabled>
                    <option value="" disabled selected>Select City/Municipality</option>
                    <!-- Populate city options -->
                </select>
            </div>

            <div class="select">
                <label for="province">Province</label>
                <select id="province" name="Province" required disabled>
                    <option value="" disabled selected>Select Province</option>
                    <!-- Populate province options -->
                </select>
            </div>
            </div>

                </div>
                
                <div class="column">
                    <h2> Occupation </h2>
                    <div class="occupation">
                        
                        <div class="text-field">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company" required>
                        </div>
        
                        <div class="text-field">
                            <label for="NatureOfWork">Nature of Work</label>
                            <input type="text" id="NatureOfWork" name="NatureOfWork" required>
                        </div>
        
                        <div class="text-field">
                            <label for="MonthlySalary">Monthly Salary</label>
                            <input type="text" id="MonthlySalary" name="MonthlySalary" required>
                        </div>
                    </div>

                </div>

                

            </div>

            <h2> Pet Information </h2>
            <div class="pet_info_content">
                <div class="text-field">
                    <label for="pet_type">Type of Pet</label>
                    <input type="text" id="pet_type" name="pet_type" required>
            
                </div>
                <div class="text-field">
                    <label for="animal_breed">Animal Breed</label>
                    <input type="text" id="animal_breed" name="animal_breed" required>
                </div>
                <div class="text-field">
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color" required>
                </div>
                <div class="text-field">
                    <label for="pet_sex">Sex</label>
                    <input type="text" id="pet_sex" name="pet_sex" required>
                </div>

                <div class="text-field">
                    <label for="weight">Weight (kg)</label>
                    <input type="number" id="weight" name="weight" required>
            
                </div>
                <div class="text-field">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" required>
                </div>
                
            </div>

            <h2> Family and Housing </h2>
            <p> Please enter your answer in the box provided</p>

            <div class="question_row">
                <div>
                    <h4> 1. How many adult lives in this household?</h4> <br>
                </div>

                <div>
                    <input type="text" id="adult_count" name="adult_count" required>
                </div>
                
            </div>


            <div class="question_row">
                <div>
                    <h4> 2. How many children?</h4> <br>
                    
                </div>

                <div>
                    <input type="text" id="child_count" name="child_count" required>
                </div>
                
            </div>

        

            <div class="questions">
                <div class="question_row">
                    <div>
                        <h4> 3. How many of your household member has a pet allergies??</h4> 
                    </div>
    
                    <div>
                        <input type="text" id="has_pet_allergy" name="has_pet_allergy" required>
                    </div>
                </div>

                <div class="question_column">
                    <div>
                        <h4> 4. Type of Housing?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="own_house" name="housing_type" value="Own House" required>
                        <label for="own_house">Own House</label>
    
                        <input type="radio" id="rent_house" name="housing_type" value="Rent House" required>
                        <label for="rent_house">Rent House</label>

                        <input type="radio" id="rent_appartment" name="housing_type" value="Rent Appartment" required>
                        <label for="rent_appartment">Rent Appartment</label>
                    </div>

                    <div>
                        <h4> 5. Is everyone in agreement with the decision to adopt a pet?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="agreed_to_adopt" value="Yes" required>
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="not_everyone" name="agreed_to_adopt" value="Not Everyone" required>
                        <label for="not_everyone">Not Everyone</label>
                    </div>
                    

                    <div>
                        <h4> 6. Please describe your household:</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="active" name="household_description" value="Active" required>
                        <label for="active">Active</label>
    
                        <input type="radio" id="calm" name="household_description" value="Calm" required>
                        <label for="calm">Calm</label>

                        <input type="radio" id="noisy" name="household_description" value="Noisy" required>
                        <label for="noisy">Noisy</label>

                        <input type="radio" id="quiet" name="household_description" value="Quiet" required>
                        <label for="quiet">Quiet</label>
                    </div>

                    <div class="question_row">
                        <div>
                            <h4> 7. How many pets/animals you have in this household?</h4> 
                        </div>
        
                        <div>
                            <input type="text" id="has_pet_allergy" name="has_pet_allergy" required>
                        </div>
                    </div>

                    <div>
                        <h4> 8. Are all pets/animals in your household up to date with Vaccines?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="up_to_date_vaccine" value="Yes" required>
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="no" name="up_to_date_vaccine" value="No" required>
                        <label for="no">No</label>
                    </div>

                    <div>
                        <h4> 9. Are your current pets on heatworm medication and flea/tick preventive?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="medication" value="Yes" required>
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="no" name="medication" value="No" required>
                        <label for="no">No</label>
                    </div>

                   <div>
                        <h4> 10. Who will be responsible for Pet's care?</h4> 
                    </div>

                   <div class="indent">
                        <div class="text-field">
                            <label for="responsible_for_pet">Enter name</label>
                            <input type="text" id="responsible_for_pet" name="responsible_for_pet" required>
                        </div>
                   </div>

                   <div>
                        <h4> 11. Who will take care for pet if you can’t?</h4> 
                    </div>

                   <div class="indent">
                        <div class="text-field">
                            <label for="take_care_of_pet">Enter name</label>
                            <input type="text" id="take_care_of_pet" name="take_care_of_pet" required>
                        </div>
                   </div>

                   <div>
                        <h4> 12. Will you allow a home visit to check surroundings?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="check_surroundings" value="Yes" required>
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="no" name="check_surroundings" value="No" required>
                        <label for="no">No</label>
                    </div>

                    <div class="indent">
                        <div class="text-field">
                            <label for="reason">Reason</label>
                            <input type="text" id="reason" name="reason" required>
                        </div>
                   </div>

                   <h3>THANK YOU FOR TAKING THE TIME TO COMPLETE THIS APPLICATION!</h3>

                   <div class="completed">
                        <div class="radio_completed">
                            <input type="radio" id="yes" name="completed" value="Yes" required>
                        </div>
                        <h6>I have completed this application truthfully and fully understand the adoption process.</h6>
                   </div>

            
                </div>

            </div>

            <input type="submit" value="Submit">

        </form>
    </div>
    <script>
        const apiUrl = "https://psgc.gitlab.io/api/";

        function populateDropdown(url, selectElement) {
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Failed to fetch ${selectElement.id}`);
                    }
                    return response.json();
                })
                .then(data => {
                    data.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.code;
                        option.textContent = item.name;
                        selectElement.appendChild(option);
                    });
                    selectElement.disabled = false;
                })
                .catch(error => console.error(`Error loading ${selectElement.id}:`, error.message));
        }

        populateDropdown(apiUrl + "provinces/", document.getElementById('province'));

        document.getElementById('province').addEventListener('change', function() {
            const cityMunicipalitySelect = document.getElementById('city_municipality');
            cityMunicipalitySelect.innerHTML = '<option value="" disabled selected>Select City/Municipality</option>';
            const barangaySelect = document.getElementById('barangay');
            barangaySelect.innerHTML = '<option value="" disabled selected>Select Barangay</option>';

            const selectedProvince = this.value;
            populateDropdown(apiUrl + "provinces/" + selectedProvince + "/cities/", cityMunicipalitySelect);
        });

        document.getElementById('city_municipality').addEventListener('change', function() {
            const barangaySelect = document.getElementById('barangay');
            barangaySelect.innerHTML = '<option value="" disabled selected>Select Barangay</option>';

            const selectedCity = this.value;
            populateDropdown(apiUrl + "cities/" + selectedCity + "/barangays/", barangaySelect);
        });

        populateDropdown(apiUrl + "countries", document.getElementById('country'));

        // Retrieve values from the hidden form and populate the form fields
        document.addEventListener('DOMContentLoaded', () => {
            const hiddenForm = document.getElementById('hidden-form');
            document.getElementById('pet_type').value = hiddenForm.elements['pet_type'].value;
            document.getElementById('animal_breed').value = hiddenForm.elements['pet_breed'].value;
            document.getElementById('color').value = hiddenForm.elements['pet_color'].value;
            document.getElementById('pet_sex').value = hiddenForm.elements['pet_sex'].value;
        });
    </script>


</body>


</html>
