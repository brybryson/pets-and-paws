<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
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

    // Prepare and bind SQL statement for adoption_information table
    $stmt1 = $conn->prepare("INSERT INTO adoption_information (LastName, FirstName, MiddleName, SuffixName, email, DateOfBirth, Sex, PhoneNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("sssssssi", $LastName, $FirstName, $MiddleName, $SuffixName, $email, $DateOfBirth, $Sex, $PhoneNumber);

    // Set parameters and execute for adoption_information table
    $LastName = $_POST['last_name'];
    $FirstName = $_POST['first_name'];
    $MiddleName = $_POST['middle_name'];
    $SuffixName = $_POST['suffix_name'];
    $email = $_POST['email'];
    $DateOfBirth = isset($_POST['DateOfBirth']) ? $_POST['DateOfBirth'] : null; // Use isset to avoid undefined index warning
    $Sex = $_POST['sex'];
    $PhoneNumber = $_POST['phone_number'];

    // Execute the insertion into adoption_information table
    if ($stmt1->execute()) {
        // Get the adopter_id of the inserted record
        $adopter_id = $stmt1->insert_id;

        // Prepare and bind SQL statement for occupation table
        $stmt2 = $conn->prepare("INSERT INTO occupation (adopter_id, Company, NatureOfWork, MonthlySalary) VALUES (?, ?, ?, ?)");
        $stmt2->bind_param("isss", $adopter_id, $company, $NatureOfWork, $monthlysalary);

        // Set parameters and execute for occupation table
        $company = $_POST['company'];
        $NatureOfWork = isset($_POST['NatureOfWork']) ? $_POST['NatureOfWork'] : null; // Use isset to avoid undefined index warning
        $monthlysalary = isset($_POST['MonthlySalary']) ? $_POST['MonthlySalary'] : null; // Use isset to avoid undefined index warning

        // Execute the insertion into occupation table
        if ($stmt2->execute()) {
            // Prepare and bind SQL statement for family_and_housing table
            $stmt3 = $conn->prepare("INSERT INTO family_and_housing (adopter_id, adult_count, child_count, has_pet_allergy, housing_type, agreed_to_adopt, household_description, up_to_date_vaccine, medication, responsible_for_pet, take_care_ofpet, check_surroundings, reason) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt3->bind_param("iiissssssssss", $adopter_id, $adult_count, $child_count, $has_pet_allergy, $housing_type, $agreed_to_adopt, $household_description, $up_to_date_vaccine, $medication, $responsible_for_pet, $take_care_ofpet, $check_surroundings, $reason);

            // Set parameters and execute for family_and_housing table
            $adult_count = $_POST['adult_count'];
            $child_count = $_POST['child_count'];
            $has_pet_allergy = $_POST['has_pet_allergy'];
            $housing_type = $_POST['housing_type'];
            $agreed_to_adopt = $_POST['agreed_to_adopt'];
            $household_description = $_POST['household_description'];
            $up_to_date_vaccine = $_POST['up_to_date_vaccine'];
            $medication = $_POST['medication'];
            $responsible_for_pet = $_POST['responsible_for_pet'];
            $take_care_ofpet = $_POST['take_care_of_pet'];
            $check_surroundings = $_POST['check_surroundings'];
            $reason = $_POST['reason'];

            // Execute the insertion into family_and_housing table
            if ($stmt3->execute()) {
                // Set parameters for address_adopter table
                $HouseNoBlk = isset($_POST['HouseNoBlk']) ? $_POST['HouseNoBlk'] : null;
                $Street = $_POST['street'];
                $Subdivision = $_POST['subdivision'];
                $Barangay = isset($_POST['Barangay']) ? $_POST['Barangay'] : null;
                $CityMunicipality = isset($_POST['CityMunicipality']) ? $_POST['CityMunicipality'] : null;
                $Province = isset($_POST['Province']) ? $_POST['Province'] : null;

                // Check for NULL values and handle them accordingly
                if ($HouseNoBlk === null || $Barangay === null || $CityMunicipality === null) {
                    echo "Error: HouseNoBlk, Barangay, or CityMunicipality cannot be NULL";
                } else {
                    // Prepare and bind SQL statement for address_adopter table
                    $stmt4 = $conn->prepare("INSERT INTO address_adopter (adopter_id, HouseNoBlk, Street, Subdivision, Barangay, CityMunicipality, Province) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $stmt4->bind_param("issssss", $adopter_id, $HouseNoBlk, $Street, $Subdivision, $Barangay, $CityMunicipality, $Province);

                    // Execute the insertion into address_adopter table
                    if ($stmt4->execute()) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $stmt4->error;
                    }

                    // Close the statement for address_adopter table
                    $stmt4->close();
                }
            } else {
                echo "Error: " . $stmt3->error;
            }

            // Close the statement for family_and_housing table
            $stmt3->close();
        } else {
            echo "Error: " . $stmt2->error;
        }

        // Close the statement for occupation table
        $stmt2->close();
    } else {
        echo "Error: " . $stmt1->error;
    }

    // Close the statement for adoption_information table
    $stmt1->close();

    // Close the database connection
    $conn->close();
    
}
header("Location: display_images.php");
exit();
?>
