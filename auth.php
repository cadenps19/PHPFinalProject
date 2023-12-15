<?php
//Name: Caden Sanders
//Assignment: PHP Final Project
//Class: CIS-239
//Date: 12/14/2023


//set up includes
include "db.php";


//set up Auth() function
function Auth(){
    //set up global db
    global $db;
    //if get request
    if (isset($_GET['ApiKey'])) {

    //set up sql statement where apikey is the same as the get request
    $sql = "SELECT * FROM `apiusers`";
    $sql .= "WHERE `ApiKey` = :ApiKey";

        //prepare the statement
    $stmt = $db->prepare($sql);

    //sanitize the statement
    $stmt->bindValue(':ApiKey', filter_input(INPUT_GET, 'ApiKey', FILTER_SANITIZE_SPECIAL_CHARS));

        //execute the statement
    $stmt->execute();
    //set up true or false return
    $row = $stmt->rowCount();
    //row is true, return true
    return $row == 1;
    }else{

    //$qry = $db->query($sql)->fetchAll();
    return false;

    }
}
?>
