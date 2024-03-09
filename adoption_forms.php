<!DOCTYPE html>
<html>
<head>
    <title> Adoption Forms </title>
    <link rel="stylesheet" href="rescue2.css">
</head>

<body>
     <!-- HEADER -->
     <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="display_images.php"> Pets and Paws</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="display_images.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forms-3.php">ADOPT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rescue2.php">RESCUE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    </header>

    <div class="section">
        <div class="img-container"></div>
    </div>
    <div class="container">
   
        <form action="" method="post">
            <h2> Adopter Information </h2>
            <div class="content">
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">

            
                </div>
                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>
                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>
                <div class="text-field">
                    <label for="suffix_name">Suffix Name</label>
                    <input type="text" id="SuffixName" name="suffix_name">
                </div>

                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">

            
                </div>
                <div class="text-field">
                    <label for="DoB">Date of Birth</label>
                    <input type="date" id="FirstName" name="DoB">
                </div>
                <div class="text-field">
                    <label for="sex">Sex </label>
                    <input type="text" id="MiddleName" name="sex">
                </div>
                <div class="text-field">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="MiddleName" name="phone_number">
                </div>

            </div>
            
            
            <div class="address_occupation">

                <div class="column">
                    <h2> Address </h2>

                    <div class="address">

                        <div class="text-field">
                            <label for="house_no">House No/Blk. lot</label>
                            <input type="text" id="HouseNoBlk" name="house_no">
                        </div>
        
                        <div class="text-field">
                            <label for="street">Street Name</label>
                            <input type="text" id="Street" name="street">
                        </div>

                        <div class="select">
                            <label for="subdiv">Subdivision</label>
                            <select name="subdiv">
                                <option value="subdiv1">Subdivision 1</option>
                                Patry na di hardcoded 
                            </select>
                        </div>
    
        
                        <div class="select">
                            <label for="brgy">Barangay</label>
                                <select name="brgy">
                                    <option value="brgy1">Barangay 1</option>
                                     Patry na di hardcoded 
                                </select>
                        </div>
        
                        <div class="select">    
                            <label for="city">City/Municipality</label>
                            <select name="city">
                                <option value="city1">City 1</option>
                               
                            </select>
                            
                        </div>
        
                        <div class="select">
                            <label for="province">Province</label>
                            <select name="province">
                                <option value="province1">Province 1</option>
                            
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <h2> Occupation </h2>
                    <div class="occupation">
                        
                        <div class="text-field">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company">
                        </div>
        
                        <div class="text-field">
                            <label for="work">Nature of Work</label>
                            <input type="text" id="work" name="work">
                        </div>
        
                        <div class="text-field">
                            <label for="subdiv">Monthly Salary</label>
                            <input type="text"  name="subdiv">
                        </div>
                    </div>

                </div>

                

            </div>

            <h2> Pet Information </h2>
            <div class="pet_info_content">
                <div class="text-field">
                    <label for="pet_type">Type of Pet</label>
                    <input type="text" id="pet_type" name="pet_type">
            
                </div>
                <div class="text-field">
                    <label for="animal_breed">Animal Breed</label>
                    <input type="text" id="animal_breed" name="animal_breed">
                </div>
                <div class="text-field">
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color">
                </div>
                <div class="text-field">
                    <label for="pet_sex">Sex</label>
                    <input type="text" id="pet_sex" name="pet_sex">
                </div>

                <div class="text-field">
                    <label for="email">Weight (kg)</label>
                    <input type="number" id="email" name="email">
            
                </div>
                <div class="text-field">
                    <label for="Description">Description</label>
                    <input type="text" id="description" name="description">
                </div>
                
            </div>

            <h2> Family and Housing </h2>
            <p> Please enter your answer in the box provided</p>

            <div class="question_row">
                <div>
                    <h4> 1. How many adult lives in this household?</h4> <br>
                    <h5> &nbsp; &nbsp; &nbsp;List below, add field if necessary</h5>
                </div>

                <div>
                    <input type="text" id="adult_count" name="adult_count">
                </div>
                
            </div>

            <div class="family_housing">

                <!-- First Adult -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>

                <!-- Second Adult -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>

                <!-- Third Adult -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>

                <!-- Fourth Adult -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>
                
            </div>
            <h6> + Add another field</h6>

            <div class="question_row">
                <div>
                    <h4> 2. How many children?</h4> <br>
                    <h5> &nbsp; &nbsp; &nbsp;List below, add field if necessary</h5>
                </div>

                <div>
                    <input type="text" id="child_count" name="child_count">
                </div>
                
            </div>

            <div class="family_housing">

                <!-- First Child -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>

                <!-- Second Child -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>

                <!-- Third Child -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>

                <!-- Fourth Child -->
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="LastName" name="last_name">
                </div>

                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="FirstName" name="first_name">
                </div>

                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="MiddleName" name="middle_name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship to you</label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>

            </div>
            <h6> + Add another field</h6>

            <div class="questions">
                <div class="question_row">
                    <div>
                        <h4> <br>3. How many of your household member has a pet allergies??</h4> 
                    </div>
    
                    <div>
                        <input type="text" id="has_pet_allergy" name="has_pet_allergy">
                    </div>
                </div>

                <div class="question_column">
                    <div>
                        <h4> 4. Type of Housing?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="own_house" name="housing_type" value="Own House">
                        <label for="own_house">Own House</label>
    
                        <input type="radio" id="rent_house" name="housing_type" value="Rent House">
                        <label for="rent_house">Rent House</label>

                        <input type="radio" id="rent_appartment" name="housing_type" value="Rent Appartment">
                        <label for="rent_appartment">Rent Appartment</label>
                    </div>

                    <div class="landlord">
                        <div class="text-field">
                            <label for="landlord_first_name">Landlord First Name</label>
                            <input type="text" id="Landlord_FirstName" name="landlord_first_name">
                        </div>

                        <div class="text-field">
                            <label for="landlord_last_name">Landlord Last Name</label>
                            <input type="text" id="Landlord_LastName" name="landlord_last_name">
                        </div>

                        <div class="text-field">
                            <label for="landlord_last_name">Landlord Phone Number</label>
                            <input type="text" id="Landlord_LastName" name="landlord_last_name">
                        </div>
        
                    </div>

                    <div>
                        <h4> 5. Is everyone in agreement with the decision to adopt a pet?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="agreed_to_adopt" value="Yes">
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="not_everyone" name="agreed_to_adopt" value="Not Everyone">
                        <label for="not_everyone">Not Everyone</label>
                    </div>
                    

                    <div>
                        <h4> 6. Please describe your household:</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="active" name="household_description" value="Active">
                        <label for="active">Active</label>
    
                        <input type="radio" id="calm" name="household_description" value="Calm">
                        <label for="calm">Calm</label>

                        <input type="radio" id="noisy" name="household_description" value="Noisy">
                        <label for="noisy">Noisy</label>

                        <input type="radio" id="quiet" name="household_description" value="Quiet">
                        <label for="quiet">Quiet</label>
                    </div>

                    <div class="question_row">
                        <div>
                            <h4> 7. How many pets/animals you have in this household?</h4> 
                        </div>
        
                        <div>
                            <input type="text" id="has_pet_allergy" name="has_pet_allergy">
                        </div>
                    </div>

                    <div>
                        <h4> 8. Are all pets/animals in your household up to date with Vaccines?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="up_to_date_vaccine" value="Yes">
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="no" name="up_to_date_vaccine" value="No">
                        <label for="no">No</label>
                    </div>

                    <div>
                        <h4> 9. Are your current pets on heatworm medication and flea/tick preventive?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="medication" value="Yes">
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="no" name="medication" value="No">
                        <label for="no">No</label>
                    </div>

                   <div class="indent">
                        <div class="text-field">
                            <label for="medication_brand">What brand?</label>
                            <input type="text" id="medication_brand" name="medication_brand">
                        </div>
                   </div>

                   <div>
                        <h4> 10. Who will be responsible for Pet's care?</h4> 
                    </div>

                   <div class="indent">
                        <div class="text-field">
                            <label for="responsible_for_pet">Enter name</label>
                            <input type="text" id="responsible_for_pet" name="responsible_for_pet">
                        </div>
                   </div>

                   <div>
                        <h4> 11. Who will take care for pet if you can’t?</h4> 
                    </div>

                   <div class="indent">
                        <div class="text-field">
                            <label for="take_care_of_pet">Enter name</label>
                            <input type="text" id="take_care_of_pet" name="take_care_of_pet">
                        </div>
                   </div>

                   <div>
                        <h4> 12. Will you allow a home visit to check surroundings?</h4> 
                    </div>

                    <div class="radio">
                        <input type="radio" id="yes" name="check_surroundings" value="Yes">
                        <label for="yes">Yes</label>
    
                        <input type="radio" id="no" name="check_surroundings" value="No">
                        <label for="no">No</label>
                    </div>

                    <div class="indent">
                        <div class="text-field">
                            <label for="reason">Reason</label>
                            <input type="text" id="reason" name="reason">
                        </div>
                   </div>

                   <h3>THANK YOU FOR TAKING THE TIME TO COMPLETE THIS APPLICATION!</h3>

                   <div class="completed">
                        <div class="radio_completed">
                            <input type="radio" id="yes" name="completed" value="Yes">
                        </div>
                        <h6>I have completed this application truthfully and fully understand the adoption process.</h6>
                   </div>

            
                </div>

            </div>

            <input type="submit" value="Submit">

        </form>
    </div>
    <footer class="footer">
        <small>©︎ Copyright 2024, All rights reserved. | Developed by&nbsp; <span> Fesariton · Melliza · Pinca · Quintos · Rivera </span></small>
    </footer>
</body>


</html>