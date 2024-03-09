<!DOCTYPE html>
<html>
<head>
    <title>Display Images</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="display_images.css">
    <link rel="icon" href="pets-icon.png">
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

    <div class="content-wrapper">
    <div class="section">
        <div class="img-container"></div>
    </div>

        <div class="container mt-5">
            <h1>Adopt Your New Bestfriend!</h1>
            <div class="row">
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

            // Path to the directory containing images
            $dir = "uploads/";

            // Check if the directory exists
            if (is_dir($dir)) {
                // Open the directory
                if ($dh = opendir($dir)) {
                    // Read all files in the directory
                    while (($file = readdir($dh)) !== false) {
                        // Display images only (skip directories and hidden files)
                        if (!is_dir($file) && !in_array($file, array('.', '..'))) {
                            // Get additional information from the database
                            $sql = "SELECT PetType, PetSex, PetColor, PetBreed FROM pet_rescue_information WHERE PetPhoto = '$dir$file'";

                            $result = $conn->query($sql);

                            $pet_breed = "N/A"; // Default value for $pet_breed

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $petType = $row["PetType"];
                                $petSex = $row["PetSex"];
                                $petColor = $row["PetColor"];
                                $pet_breed = $row['PetBreed'];
                            } else {
                                $petType = "N/A";
                                $petSex = "N/A";
                                $petColor = "N/A";
                            }

                            // Display the image and additional information in a Bootstrap card
                            echo '<div class="col-md-3 mb-3">';
                            echo '<div class="card" onclick="showImage(\'' . $dir . $file . '\')">';
                            echo '<img src="' . $dir . $file . '" class="card-img-top" alt="...">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">Pet Type: ' . $petType . '</h5>';
                            echo '<p class="card-text">Sex: ' . $petSex . '</p>';
                            echo '<p class="card-text">Breed: ' . $pet_breed . '</p>';
                            echo '<p class="card-text">Color: ' . $petColor . '</p>';
                            echo '<button class="btn btn-primary" onclick="submitForm(\'' . $petType . '\', \'' . $petSex . '\', \'' . $pet_breed . '\', \'' . $petColor . '\')">Select</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    // Close the directory
                    closedir($dh);
                }
            }

            $conn->close();
            ?>
            </div>
        </div>
    </div>
    
    <!-- Hidden form to store values temporarily -->
    <form id="hidden-form" action="forms-3.php" method="post">
        <input type="hidden" id="pet_type" name="pet_type">
        <input type="hidden" id="pet_sex" name="pet_sex">
        <input type="hidden" id="pet_color" name="pet_color">
        <input type="hidden" id="pet_breed" name="pet_breed">
        <input type="submit" id="submit-form" style="display: none;">
    </form>
    
    <!-- Modal HTML -->
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal()"></span>
        <img src="" class="img-fluid">
    </div>

    <footer class="footer">
        <small>©︎ Copyright 2024, All rights reserved. | Developed by&nbsp; <span> Fesariton · Melliza · Pinca · Quintos · Rivera </span></small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-RT1OaRdLEjAo5IYq8vZb5ki5VtAOK/VjAqNvRnLA8z+woqvh7mE+18RciOs+rgON" crossorigin="anonymous"></script>
    <script src="display_images.js"></script>
     
</body>
</html>



