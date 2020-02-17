<?php

function postNewsletter($email, $fName, $lName){
    include_once('./../Class/database.php');
    $v1 = $_POST["email"];
    $v2 = $_POST["fName"];
    $v3 = $_POST["lName"];
    $database = new Database(); 
   

    //$database->bindValue(':email', $uname, PDO::PARAM_INT);
    $query = $database->connection->prepare('INSERT INTO subscription (email, fName, lName)
                                                    VALUES ($v1, $fName, $lName)');
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    //Använder fetch istället för fetchAll för att få ut usern utanför array av alla users

    
    return $result; 
}

?>

<!-- ':email' => $email, ':fName' => $fName, ':lName' => $lName -->