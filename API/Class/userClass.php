<?php

$pdo_dsn='mysql:host=localhost;dbname=shoes_us';
$pdo_user='root';     
$pdo_password='root';

try {
    // Establish connection to database
    $conn = new PDO($pdo_dsn, $pdo_user, $pdo_password);

    // Throw exceptions in case of error.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Use prepared statements to mitigate SQL injection attacks.
    // See https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php for more details
    $qry=$conn->prepare('INSERT INTO user (fName, lName, email, phone, city, postalcode, country, street) VALUES (:myvalue)');

    // Execute the prepared statement using user supplied data.
    $qry->execute(Array(":myvalue" => $fName));
    $qry->execute(Array(":myvalue" => $lName));
    $qry->execute(Array(":myvalue" => $email));
    $qry->execute(Array(":myvalue" => $phone));
    $qry->execute(Array(":myvalue" => $city));
    $qry->execute(Array(":myvalue" => $postalcode));
    $qry->execute(Array(":myvalue" => $country));
    $qry->execute(Array(":myvalue" => $street));
    

} catch(PDOException $e) {
    error_log($e->getMessage());
    throw $e;
}

?>