<?php
//Name: Caden Sanders
//Assignment: PHP Final Project
//Class: CIS-239
//Date: 12/14/2023

//set up includes
include "db.php";
//global var call
global $db;

        //set up sql call to delete where get request is equal
        $sql = "DELETE FROM `apidata` WHERE `CelebId` = :CelebId";

            //prepare
            $stmt = $db->prepare($sql);
            //sanitize
            $stmt->bindValue(':CelebId', filter_input(INPUT_GET, 'CelebId', FILTER_SANITIZE_SPECIAL_CHARS));
           
            //execute
            $stmt->execute();
            echo("Deleted");
            //set up redirect
            header("Location: http://localhost/CIS-239/FinalProject/select.php");
            //exit page and redirect to select.php
            exit();


?>