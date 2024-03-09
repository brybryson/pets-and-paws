<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "pets_and_paws";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data for rescuer
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $suffix_name = $_POST['suffix_name'];
    $email = $_POST['email'];
    $dob = $_POST['DoB'];
    $sex = $_POST['sex'];
    $phone_number = $_POST['phone_number'];

    // Insert data into rescue_form table
    $sql_rescuer = "INSERT INTO rescue_form (LastName, FirstName, MiddleName, SuffixName, email, DateOfBirth, sex, PhoneNumber) VALUES ('$last_name', '$first_name', '$middle_name', '$suffix_name', '$email', '$dob', '$sex', '$phone_number')";

    if ($conn->query($sql_rescuer) === TRUE) {
        $rescue_id = $conn->insert_id; // Get the last inserted ID

       // Retrieve form data for pet information
        $pet_type = $_POST['pet_type'];
        $pet_color = $_POST['pet_color'];
        $pet_sex = $_POST['pet_sex'];
        $location_found = $_POST['location'];
        $pet_condition = $_POST['pet_condition'];
        $pet_breed = $_POST['pet_breed']; // Added PetBreed

        // Check if the directory doesn't exist, then create it
        $upload_dir = "uploads/";
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

      // Handle file upload
    $target_file = "uploads/";
    if (isset($_FILES["pet_photo"]) && is_uploaded_file($_FILES["pet_photo"]["tmp_name"]) && $_FILES["pet_photo"]["error"] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["pet_photo"]["name"]);

        // Move the file
        if (move_uploaded_file($_FILES["pet_photo"]["tmp_name"], $target_file)) {
            // File uploaded successfully, continue with the database insertion
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } elseif (isset($_FILES["pet_photo"])) {
        // Handle the error
        echo "File upload error: " . $_FILES["pet_photo"]["error"];
    }


        // Insert data into pet_rescue_information table
        $sql_pet = "INSERT INTO pet_rescue_information (PetType, PetColor, PetSex, Location, PetCondition, PetPhoto, PetBreed) VALUES ('$pet_type', '$pet_color', '$pet_sex', '$location_found', '$pet_condition', '$target_file', '$pet_breed')";

        if ($conn->query($sql_pet) === TRUE) {
            $pet_rescue_info_id = $conn->insert_id; // Get the last inserted ID

            // Retrieve form data for address
            $house_no = $_POST['house_no'];
            $street = $_POST['street'];
            $subdivision = $_POST['subdiv'];
            $barangay = $_POST['brgy'];
            $city = $_POST['city'];
            $province = $_POST['province'];

            // Insert data into address_rescue table
            $sql_address = "INSERT INTO address_rescue (HouseNoBlk, Street, Subdivision, Barangay, CityMunicipality, Province) VALUES ('$house_no', '$street', '$subdivision', '$barangay', '$city', '$province')";

            if ($conn->query($sql_address) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $sql_address . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql_pet . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql_rescuer . "<br>" . $conn->error;
    }
}

$conn->close();
header("Location: display_images.php");
exit();

?>
