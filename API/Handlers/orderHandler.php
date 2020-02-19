<?php 

function getAllFromUser($user) {
    error_log($user);
    include_once('./../Class/database.php');
    $database = new Database();

    $query = <<<EOD
    SELECT o.purchaseID, o.date,o.sum, pd.quantity, pd.sum, p.name, p.price
    FROM purchase AS o 
    INNER JOIN purchasedetails AS pd
    ON o.purchaseID = pd.purchaseID 
    INNER JOIN product as p 
    ON pd.productID = p.productID
    WHERE o.userID = :user;
    EOD;
    error_log($user);
    $statement = $database->connection->prepare($query);
    $statement->bindParam(':user', $user, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        throw new exception('No order found', 404);
        exit;
    }
    return $result; 
}

?>