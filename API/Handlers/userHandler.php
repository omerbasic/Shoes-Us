<?php 

function getAll() {
    include_once('./../Class/database.php');
    $database = new Database();

    $query = $database->connection->prepare('SELECT * FROM User;');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        throw new exception('No user found', 404);
        exit;
    }
    return $result; 
}

function getSpecific($uname, $pw){
    include_once('./../Class/database.php');
    $database = new Database(); 
    $hashedPW = hash("md5", $pw);

    //$database->bindValue(':email', $uname, PDO::PARAM_INT);
    $query = $database->connection->prepare('SELECT * FROM User WHERE email = :email AND password = :password;');
    $query->execute(array(':email' => $uname, ':password' => $hashedPW));
    $result = $query->fetch(PDO::FETCH_ASSOC);
    //Använder fetch istället för fetchAll för att få ut usern utanför array av alla users

    if (empty($result)) {
        throw new exception('No user found', 404);
        exit;
    }
    return $result; 
}

?>