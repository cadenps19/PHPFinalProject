<?php
include "db.php";

function Auth(){
    global $db;
    if (isset($_GET['ApiKey'])) {

    $sql = "SELECT * FROM `apiusers`";
    $sql .= "WHERE `ApiKey` = :ApiKey";


    $stmt = $db->prepare($sql);

    $stmt->bindValue(':ApiKey', filter_input(INPUT_GET, 'ApiKey', FILTER_SANITIZE_SPECIAL_CHARS));


    $stmt->execute();
    $row = $stmt->rowCount();
    return $row == 1;
    }else{

    //$qry = $db->query($sql)->fetchAll();
    return false;

    }
}
?>
