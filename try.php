<!DOCTYPE html>
<html>
<head>
    <title> Adoption Forms </title>
    <link rel="stylesheet" href="try.css">
    <link rel="icon" href="pets-icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                            <a class="nav-link" href="#">ADOPT</a>
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

    <div class="content-wrapper">
    <div class="section">
        <div class="img-container"></div>
    </div>
    </div>

    
    <div class="container-form">
    <h1>Adoption Form</h1> 
    <form action="submit_form.php" method="post" enctype="multipart/form-data">

            <div class="content">
                <div class="text-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name">

            
                </div>
                <div class="text-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name">
                </div>
                <div class="text-field">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" id="middle_name" name="middle_name">
                </div>
                <div class="text-field">
                    <label for="suffix_name">Suffix Name</label>
                    <input type="text" id="suffix_name" name="suffix_name">
                </div>

                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">

            
                </div>
                <div class="text-field">
                    <label for="DoB">Date of Birth</label>
                    <input type="date" id="DoB" name="DoB">
                </div>
                <div class="select">
                    <label for="sex">Sex </label>
                    <select name="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                <div class="text-field">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number">
                </div>

            </div>
            
            
            <div class="address_occupation">

                <div class="column">
                    <h2> Address </h2>

                    <div class="address">

                        <div class="text-field">
                            <label for="house_no">House No/Blk. lot</label>
                            <input type="text" id="house_no" name="house_no">
                        </div>
        
                        <div class="text-field">
                            <label for="street">Street Name</label>
                            <input type="text" id="street" name="street">
                        </div>

                        <div class="text-field">
                            <label for="subdiv">Subdivision</label>
                            <input type="text" id="subdiv" name="subdiv">
                        </div>

    
        
                        <div class="select">
                            <label for="brgy">Barangay</label>
                                <select name="brgy">
                                    <option value="brgy1">Barangay 1</option>
                                    <!-- Patry na di hardcoded -->
                                </select>
                        </div>
        
                        <div class="select">    
                            <label for="city">City/Municipality</label>
                            <select name="city">
                                <option value="city1">City 1</option>
                                <!-- Patry na di hardcoded -->
                            </select>
                            
                        </div>
        
                        <div class="select">
                            <label for="province">Province</label>
                            <select name="province">
                                <option value="province1">Province 1</option>
                                <!-- Patry na di hardcoded -->
                            </select>
                        </div>
                    </div>

                                      
                </div>
                
                <div class="column">
                    <h2> Occupation </h2>
                    <div class="pet_details">
                        <div class="text-field">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company">
                        </div>
                    </div>

                        <div class="text-field">
                            <label for="nature_of_work">Nature of Work</label>
                            <input type="text" id="nature_of_work" name="nature_of_work">
                        </div>
        
                        <div class="text-field">
                            <label for="monthly_salary">Monthly Salary</label>
                            <input type="text" id="monthly_salary" name="monthly_salary">
                        </div>
                        
                        
        
                    </div>

                </div>

            <div class="pet_information">
            <h2> Pet Information </h2>
                <div class="content">
                <div class="select">
                            <label for="pet_type">Pet Type</label>
                            <select name="pet_type">   
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                        </div>
                <div class="text-field">
                    <label for="animal_breed">Animal Breed</label>
                    <input type="text" id="animal_breed" name="animal_breed">
                </div>
                <div class="text-field">
                    <label for="pet_color">Color</label>
                    <input type="text" id="pet_color" name="pet_color">
                </div>

                <div class="select">
                    <label for="sex">Sex </label>
                    <select name="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                <div class="text-field">
                    <label for="pet_weight">Weight</label>
                    <input type="text" id="pet_weight" name="pet_weight">
                </div>

                <div class="text-field">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description">
                </div>
                
            </div>
            <div class="Family and Housing">
            <h2> Family and Housing </h2>
                <div class="content">
                    <h5> 1. How many adults live in this Household? </h5>
                <div class="text-field">
                    <label for="LastName">Last Name</label>
                    <input type="text" id="LastName" name="LastName">
                </div>
                <div class="text-field">
                    <label for="FirstName">First Name</label>
                    <input type="text" id="FirstName" name="FirstName">
                </div>
                <div class="text-field">
                    <label for="Middle Name">Middle Name</label>
                    <input type="text" id="Middle Name" name="Middle Name">
                </div>

                <div class="text-field">
                    <label for="relationship">Relationship </label>
                    <input type="text" id="relationship" name="relationship">
                </div>

                <div class="text-field">
                    <label for="age">Age</label>
                    <input type="text" id="age" name="age">
                </div>

                
            </div>
            </div>

             <!-- JavaScript to fetch API data and insert into the form -->
             <script>
                fetch('https://psgc.gitlab.io/api/districts/133900000/barangays/')
                    .then(response => response.json())
                    .then(data => {
                        const barangaySelect = document.querySelector('select[name="brgy"]');
                        data.forEach(barangay => {
                            const option = document.createElement('option');
                            option.text = barangay.name;
                            option.value = barangay.name;
                            barangaySelect.add(option);
                        });
                    });

                fetch('https://psgc.gitlab.io/api/island-groups/luzon/provinces/')
                    .then(response => response.json())
                    .then(data => {
                        const provinceSelect = document.querySelector('select[name="province"]');
                        data.forEach(province => {
                            const option = document.createElement('option');
                            option.text = province.name;
                            option.value = province.name;
                            provinceSelect.add(option);
                        });
                    });

                fetch('https://psgc.gitlab.io/api/regions/130000000/cities/')
                    .then(response => response.json())
                    .then(data => {
                        const citySelect = document.querySelector('select[name="city"]');
                        data.forEach(city => {
                            const option = document.createElement('option');
                            option.text = city.name;
                            option.value = city.name;
                            citySelect.add(option);
                        });
                    });
            </script>

            <input type="submit" value="Submit" class="primary-submit-button">

        </form>
    </div>

    <footer class="footer">
        <small>©︎ Copyright 2024, All rights reserved. | Developed by&nbsp; <span> Fesariton · Melliza · Pinca · Quintos · Rivera </span></small>
    </footer>
</body>
</html>





