<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>

<?php
include "db.php";
include "auth.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        global $db;

        $sql = "UPDATE `apidata` SET `CelebFName` = :CelebFName, `CelebLName` = :CelebLName, `CelebFact` = :CelebFact WHERE `CelebId` = :CelebId";



            $stmt = $db->prepare($sql);

            $stmt->bindValue(':CelebFName', filter_input(INPUT_POST, 'CelebFName', FILTER_SANITIZE_SPECIAL_CHARS));
            $stmt->bindValue(':CelebLName', filter_input(INPUT_POST, 'CelebLName', FILTER_SANITIZE_SPECIAL_CHARS));
            $stmt->bindValue(':CelebFact', filter_input(INPUT_POST, 'CelebFact', FILTER_SANITIZE_SPECIAL_CHARS));
            $stmt->bindValue(':CelebId', filter_input(INPUT_POST, 'CelebId', FILTER_SANITIZE_SPECIAL_CHARS));

            $stmt->execute();
            echo("Data has been edited");

            header("Location: http://localhost/CIS-239/FinalProject/select.php");

            exit();
    
        
}
else{
    global $db;

    $sql = "SELECT * FROM `apidata` WHERE `CelebId` = :CelebId";
    

    $stmt = $db->prepare($sql);

    $stmt->bindValue(':CelebId', filter_input(INPUT_GET, 'CelebId', FILTER_SANITIZE_SPECIAL_CHARS));

    $stmt->execute();
    
    $row = $stmt->fetch();
    if ($row) {
        
        $CelebFName = $row['CelebFName'];
        $CelebLName = $row['CelebLName'];
        $CelebFact = $row['CelebFact'];
        $CelebId = $row['CelebId'];
            
}
}

?>  


<form action="edit.php" method="post">
        <label for="CelebFName">Celeb First Name:</label><br>
        <input type="text" id="CelebFName" name="CelebFName" value="<?php echo isset($CelebFName) ? $CelebFName : ''; ?>"required>
        <br><br>

        <label for="CelebLName">Celeb Last Name:</label><br>
        <input type="text" id="CelebLName" name="CelebLName" value="<?php echo isset($CelebLName) ? $CelebLName : ''; ?>"required>
        <br><br>

        <label for="CelebFact">Celeb Fact:</label><br>
        <textarea id="CelebFact" name="CelebFact" required><?php echo isset($CelebFact) ? $CelebFact : ''; ?></textarea>
        <br><br>

        <input type="hidden" id="CelebId" name="CelebId" value="<?php echo isset($CelebId) ? $CelebId : ''; ?>">
        <button type="submit">Submit</button>
    </form>


</body>
</html>


