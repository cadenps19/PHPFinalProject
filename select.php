<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data</title>
</head>
<body>



    <?php
    include "db.php";
    global $db;

        $sql = "SELECT * FROM apidata";


        $stmt = $db->prepare($sql);

        $stmt->execute();
        $qry = $stmt->fetchAll();
?>
        <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>CelebID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Fact</th>
                    </tr>
                </thead>
                <tbody>

<?php

        foreach($qry as $celeb){
            echo "<tr>";
            echo "<td>" . "<a href='edit.php?CelebId=$celeb[0]'>Edit</a>" . "</td>";
                echo "<td>" . "<a href='delete.php?CelebId=$celeb[0]'>Delete</a>" . "</td>";
                echo "<td>" . $celeb[0] . "</td>";
                echo "<td>" . $celeb[1] . "</td>";
                echo "<td>" . $celeb[2] . "</td>";
                echo "<td>" . $celeb[3] . "</td>";
                echo "</tr>";
            
        }

    ?>


</tbody>
    </table>


    <br>
    <br>
    <a href="index.php">Go to Registration Page</a>
</body>
</html>