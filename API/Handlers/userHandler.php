<?php 
session_start();

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

function login($uname, $pw){
    $loggedinUser = getSpecific($uname, $pw);
    $_SESSION["loggedinUser"] = serialize($loggedinUser);
    return $loggedinUser;

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

//ny funkt
function registerNewUser($fName, $lName, $email, $phone, $password, $city, $postalcode, $country, $street){
    // include_once('./../Class/userClass.php');
    include_once('./../Class/database.php');
    $database = new Database();
    $hashedpass = hash("md5", $password);

    try {

        $database->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $qry = $database->connection->prepare('INSERT INTO user (fName, lName, email, phone, password, isAdmin, city, postalcode, country, street) 
                                VALUES (:fName, :lName, :email, :phone, :password, 0, :city, :postalcode, :country, :street)');

        $qry->execute(array(':fName' => $fName, 
                            ':lName' => $lName,     
                            ':email' => $email, 
                            ':phone' => $phone, 
                            ':password' => $hashedpass, 
                            ':city' => $city, 
                            ':postalcode' => $postalcode, 
                            ':country' => $country, 
                            ':street' => $street));

        echo "New user inserted in database";
        
        
    } catch(PDOException $e) {
        error_log($e->getMessage());
        throw $e;
    }
}
 
?>