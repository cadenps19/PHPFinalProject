<?php
//Name: Caden Sanders
//Assignment: PHP Final Project
//Class: CIS-239
//Date: 12/14/2023


//set up access control
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
//set up includes
include "db.php";
include "auth.php";



//if Auth() is true
if (Auth()) {
    //set up sql statement
    $sql = "SELECT * FROM apidata";


    //prepare sql statement
    $stmt = $db->prepare($sql);

    //execute statement (query statement)
    $stmt->execute();
    //gather all info pulled back
    $qry = $stmt->fetchAll();

    //display all pulled data as a json
    echo json_encode($qry);

}else{

    //$qry = $db->query($sql)->fetchAll();
    echo("API Key not valid");
    
}







?>