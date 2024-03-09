<!DOCTYPE html>
<html>
<head>
    <title>Rescue Forms</title>
    <link rel="stylesheet" href="rescue2.css">
    <link rel="icon" href="pets-icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
     <!-- HEADER -->
     <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="display_images.php">Pets and Paws</a>
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

    <div class="content-wrapper">
        <div class="section">
            <div class="img-container"></div>
        </div>
    </div>

    
    <div class="container-form">
        <h1>Rescue Form</h1> 
        <form id="rescueForm" action="submit_form.php" method="post" enctype="multipart/form-data">

            <div class="content">
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
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="text-field">
                    <label for="DoB">Date of Birth</label>
                    <input type="date" id="DoB" name="DoB" required>
                </div>
                <div class="select">
                    <label for="sex">Sex</label>
                    <select name="sex" required>
                        <option value="">Select Sex</option>
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
                    <h2>Address</h2>
                    <div class="address">
                        <div class="text-field">
                            <label for="house_no">House No/Blk. lot</label>
                            <input type="text" id="house_no" name="house_no" required>
                        </div>
                        <div class="text-field">
                            <label for="street">Street Name</label>
                            <input type="text" id="street" name="street" required>
                        </div>
                        <div class="text-field">
                            <label for="subdiv">Subdivision</label>
                            <input type="text" id="subdiv" name="subdiv" required>
                        </div>
                        <div class="select">
                            <label for="Barangay">Barangay</label>
                            <select id="Barangay" name="Barangay" >
                                <option value="" disabled selected>Select Barangay</option>
                                <!-- Populate barangay options -->
                            </select>
                        </div>
                        <div class="select">    
                            <label for="city">City/Municipality</label>
                            <select id="city_municipality" name="city"  >
                                <option value="" disabled selected>Select City/Municipality</option>
                                <!-- Populate city options -->
                            </select>
                        </div>
                        <div class="select">
                            <label for="province">Province</label>
                            <select id="province" name="province" required disabled>
                                <option value="" disabled selected>Select Province</option>
                                <!-- Populate province options -->
                            </select>
                        </div>
                    </div>
                    <div class="pet_condition">
                        <div class="text-field">
                            <label for="pet_condition">Pet Condition</label>
                            <input type="text" id="pet_condition" name="pet_condition" required>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <h2>Pet Details</h2>
                    <div class="pet_details">
                        <div class="select">
                            <label for="pet_type">Pet Type</label>
                            <select id="pet_type" name="pet_type" required>
                                <option value="">Select Pet Type</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                        </div>
                        <div class="select" id="breed_select">
                            <label for="pet_breed">Pet Breed</label>
                            <select id="pet_breed" name="pet_breed" required disabled>
                                <option value="" disabled selected>Select Pet Breed</option>
                            </select>
                        </div>
                        <div class="select">
                            <label for="pet_color">Pet Color</label>
                            <select id="pet_color" name="pet_color" required disabled>
                                <option value="" disabled selected>Select Pet Color</option>
                            </select>
                        </div>
                        <div class="select">
                            <label for="pet_sex">Pet Sex</label>
                            <select name="pet_sex" required>
                                <option value="">Select Pet Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="text-field">
                            <label for="pet_photo">Pet Photo</label>
                            <input type="file" id="pet_photo" name="pet_photo" required>
                        </div>
                        <div class="text-field">
                            <label for="location">Location Found</label>
                            <input type="text" id="location" name="location" required>
                        </div>
                    </div>
                </div>
            </div>

            <input type="submit" value="Submit" class="primary-submit-button">
        </form>
    </div>

    <footer class="footer">
        <small>©︎ Copyright 2024, All rights reserved. | Developed by&nbsp; <span> Fesariton · Melliza · Pinca · Quintos · Rivera </span></small>
    </footer>

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

        document.getElementById('pet_type').addEventListener('change', function() {
            const breedSelect = document.getElementById('breed_select');
            const petBreedSelect = document.getElementById('pet_breed');
            petBreedSelect.innerHTML = '<option value="" disabled selected>Select Pet Breed</option>';
            const selectedPetType = this.value;

            petBreedSelect.disabled = !selectedPetType;

            if (selectedPetType === 'Dog') {
                fetch('https://dog.ceo/api/breeds/list')
                    .then(response => response.json())
                    .then(data => {
                        data.message.forEach(breed => {
                            const option = document.createElement('option');
                            option.value = breed;
                            option.textContent = breed;
                            petBreedSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error loading dog breeds:', error));
            } else if (selectedPetType === 'Cat') {
                fetch('https://api.thecatapi.com/v1/breeds')
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(breed => {
                            const option = document.createElement('option');
                            option.value = breed.name;
                            option.textContent = breed.name;
                            petBreedSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error loading cat breeds:', error));
            }
        });

        // Event listener for pet colors
        document.querySelector('select[name="pet_type"]').addEventListener('change', function() {
            const petType = this.value;
            const petColorSelect = document.getElementById('pet_color');
            petColorSelect.innerHTML = '<option value="">Select Pet Color</option>'; 
            if (petType === 'Dog' || petType === 'Cat') {
                petColorSelect.disabled = false; 
                if (petType === 'Dog') {
                    fetch('dog_colors.json')
                        .then(response => response.json())
                        .then(data => {
                            data.dog_colors.forEach(color => {
                                const option = document.createElement('option');
                                option.value = color;
                                option.textContent = color;
                                petColorSelect.appendChild(option);
                            });
                        })
                        .catch(error => console.error('Error loading dog colors:', error));
                } else if (petType === 'Cat') {
                    fetch('cat_colors.json')
                        .then(response => response.json())
                        .then(data => {
                            data.cat_colors.forEach(color => {
                                const option = document.createElement('option');
                                option.value = color;
                                option.textContent = color;
                                petColorSelect.appendChild(option);
                            });
                        })
                        .catch(error => console.error('Error loading cat colors:', error));
                }
            } else {
                petColorSelect.disabled = true; 
            }
        });
    </script> 
</body>
</html>
