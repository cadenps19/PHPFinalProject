<!--
Name: Caden Sanders
Assignment: PHP Final Project
Class: CIS-239
Date: 12/14/2023
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
        <?php
        //set up include
        include "db.php";
        //call global var
        global $db;

        //function to create random api key
        function generateApiKey(){
            return bin2hex(random_bytes(16));
        }

        //if posted email from form
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve email from the form
            $email = $_POST['Email'];

            // Generate a unique API key
            $api_key = generateApiKey();

            // Store the email and API key in the 'apiusers' table
            $sql = "INSERT INTO apiusers (Email, ApiKey) VALUES ('$email', '$api_key')";
            
            $db->query($sql);
                echo "Registration successful! Your API Key is: $api_key";

        }

        ?>


    <h1>User Registration</h1>

    <form action="index.php" method="post">
        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" required>

        <input type="submit" value="Register">
    </form>

    <a href="add.php">Go to Add Page</a>
    <a href="select.php">Go to Select Page</a>
</body>
</html>

