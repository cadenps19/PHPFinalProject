<?php
include "db.php";
global $db;

        $sql = "DELETE FROM `apidata` WHERE `CelebId` = :CelebId";


            $stmt = $db->prepare($sql);

            $stmt->bindValue(':CelebId', filter_input(INPUT_GET, 'CelebId', FILTER_SANITIZE_SPECIAL_CHARS));
           

            $stmt->execute();
            echo("Deleted");

            header("Location: http://localhost/CIS-239/FinalProject/select.php");

            exit();


?>