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
    <title>Add Data</title>
</head>
<body>

<form action="add.php" method="post">
        <label for="CelebFName">Celeb First Name:</label><br>
        <input type="text" id="CelebFName" name="CelebFName" required>
        <br><br>

        <label for="CelebLName">Celeb Last Name:</label><br>
        <input type="text" id="CelebLName" name="CelebLName" required>
        <br><br>

        <label for="CelebFact">Celeb Fact:</label><br>
        <input type="text" id="CelebFact" name="CelebFact" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>
<?php
include "db.php";
include "auth.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        global $db;

        $sql = "INSERT INTO apidata (CelebFName, CelebLName, CelebFact) VALUES (:CelebFName, :CelebLName, :CelebFact)";



            $stmt = $db->prepare($sql);

            $stmt->bindValue(':CelebFName', filter_input(INPUT_POST, 'CelebFName', FILTER_SANITIZE_SPECIAL_CHARS));
            $stmt->bindValue(':CelebLName', filter_input(INPUT_POST, 'CelebLName', FILTER_SANITIZE_SPECIAL_CHARS));
            $stmt->bindValue(':CelebFact', filter_input(INPUT_POST, 'CelebFact', FILTER_SANITIZE_SPECIAL_CHARS));


            $stmt->execute();
            echo("Data added to Database");
    
        
}


?>   

<a href="index.php">Go to Registration Page</a>


</body>
</html>


