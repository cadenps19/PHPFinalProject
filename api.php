<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include "db.php";
include "auth.php";




if (Auth()) {

    $sql = "SELECT * FROM apidata";


    $stmt = $db->prepare($sql);

    $stmt->execute();
    $qry = $stmt->fetchAll();

    echo json_encode($qry);

}else{

    //$qry = $db->query($sql)->fetchAll();
    echo("API Key not valid");
    
}







?>