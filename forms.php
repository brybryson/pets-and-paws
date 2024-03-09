
<!DOCTYPE html>
<html>
<head>
    <title> Adoption Form </title>
    <link rel="stylesheet" href="Style_Forms-1.css">
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

    <div class="container">

        <?php
        include 'database.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["submit"])){
            $LastName = $_POST["last_name"];
            $FirstName = $_POST["first_name"];
            $MiddleName = $_POST["middle_name"];
            $SuffixName = $_POST ["suffix_name"];
            $email = $_POST["email"];
            $DateOfBirth = $_POST["DoB"];
            $Sex =$_POST["sex"];
            $PhoneNum=$_POST ["phone_number"];
            $house_no=$_POST["house_no"];
            $Street=$_POST["street"];
            $Subdiv=$_POST["subdiv"];
            $Brgy=$_POST["brgy"];
            $City=$_POST["city"];
            $Proivnce=$_POST["province"];
            $Company=$_POST["company"];
            $Work=$_POST["work"];
            
            $Pet_Type=$_POST["pet_type"];
            $Animal_breed=$_POST["animal_breed"];
            $Color= $_POST["color"];
            $Pet_sex=$_POST["pet_sex"];
            $Weight=$_POST["weight"];
            $Description=$_POST["description"];
           
            
            $errors = array();

         
               
                $conn->begin_transaction();

                $sql1 = "INSERT INTO adoption_information (LastName, FirstName, MiddleName, SuffixName, email, DateOfBirth, Sex, PhoneNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt1 = $conn->prepare($sql1);
                $stmt1->bind_param("ssssssss", $LastName, $FirstName, $MiddleName, $SuffixName, $email, $DateOfBirth, $Sex, $PhoneNum);
                $stmt1->execute();
                $adopter_id = $stmt1->insert_id;


                // Insert into address table
                $sql2 = "INSERT INTO address_tbl (HouseNoBlk, Street, Subdivision, Barangay, CityMunicipality, Province) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bind_param("ssssss", $house_no, $Street, $Subdiv, $Brgy, $City, $Province);
                $stmt2->execute();
 

                $sql3 = "INSERT INTO occupation (adopter_id, Company, NatureOfWork, MonthlySalary) VALUES (?, ?, ?, ?)"; 
                $stmt3 = $conn->prepare($sql3);
                $stmt3->bind_param("isss", $adopter_id, $Company, $Work, $MonthlySalary);
                $stmt3->execute();

                
                $sql4 = "INSERT INTO pet_information (Type_of_Pet, Animal_Breed, Color, Sex, Weight, Description) VALUES (?, ?, ?, ?, ?, ?)"; 
                $stmt4 = $conn->prepare($sql4);
                $stmt4->bind_param("ssssis", $Pet_Type,$Animal_breed, $Color, $Pet_sex, $Weight,$Description);
                $stmt4->execute();

                
                $conn->commit();
                echo "Records inserted successfully.";
                

            

        }
    }

        
        ?>

        <form action="" method="POST">
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
                    <input type="date" id="Dateofbirth" name="DoB">
                </div>
                <div class="text-field">
                    <label for="sex">Sex </label>
                    <input type="text" id="sex" name="sex">
                </div>
                <div class="text-field">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phonenumber" name="phone_number">
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

                        <div class="text-field">
                            <label for="subdiv">Subdivision</label>
                            <input type="text"  name="subdiv">
                        </div>
    
        
                        <div class="text-field">
                            <label for="brgy">Barangay:</label>
                            <input type="text" name="brgy">
                        </div>
        
                        <div class="text-field">    
                            <label for="city">City/Municipality:</label>
                            <input type="text" name="city">
                        </div>
        
                        <div class="text-field">
                            <label for="province">Province:</label>
                            <input type="text" name="province">
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
                            <label for="monthlysalary">Monthly Salary</label>
                            <input type="text" id="monthlysalary"  name="monthlysalary">
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
                    <input type="number" id="weight" name="weight">
            
                </div>
                <div class="text-field">
                    <label for="Description">Description</label>
                    <input type="text" id="description" name="description">
                </div>
                
            </div>

            <h2> Gender </h2>
            <div class="gender">
                    <input type="radio" id="female" name="sex" value="Female">
                    <label for="female">Female</label>

                    <input type="radio" id="male" name="sex" value="Male">
                    <label for="male">Male</label>

            </div>

            <h2> Favorite Places </h2>
            <div class="fav_place">
                <input type="checkbox" id="place1" name="place1" value="Tarlac">
                <label for="palce1"> Tarlac</label>
                <input type="checkbox" id="place2" name="place2" value="Tagaytay">
                <label for="place2">Tagaytay</label>
                <input type="checkbox" id="place3" name="place3" value="Boat">
                <label for="place3"> Pampangga</label>
            </div>
            
            <p> If you click the "Submit" button, the form-data will be sent to a page called 
                "/forms_result.php". </p>

                <input type="submit" name="submit" value="submit">


        </form>
    </div>

    <footer class="footer">
        <small>©︎ Copyright 2024, All rights reserved. | Developed by&nbsp; <span> Fesariton · Melliza · Pinca · Quintos · Rivera </span></small>
    </footer>
</body>

</html>