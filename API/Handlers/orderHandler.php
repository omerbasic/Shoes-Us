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
function createPurchase($userID, $shipperID, $date, $sum){
    // include_once('./../Class/userClass.php');
    include_once('./../Class/database.php');
    $database = new Database();
    

    try {

        $database->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $qry = $database->connection->prepare('INSERT INTO purchase (userID, shipperID, date, sum) 
                                VALUES (:userID, :shipperID, :date, :sum); SELECT purchaseID FROM purchase;');

        $qry->execute(array(':userID' => $userID, 
                            ':shipperID' => $shipperID,     
                            ':date' => $date, 
                            ':sum' => $sum));

        
                            $result = $query->fetch(PDO::FETCH_ASSOC);
        
    } catch(PDOException $e) {
        error_log($e->getMessage());
        throw $e;
    }
    return $result;
}
function createPurchaseDetail($purchaseID, $productID, $quantity, $sum){
    // include_once('./../Class/userClass.php');
    include_once('./../Class/database.php');
    $database = new Database();
    

    try {

        $database->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $qry = $database->connection->prepare('INSERT INTO purchasedetails (purchaseID, productID, quantity, sum) 
                                VALUES (:purchaseID, :productID, :quantity, :sum);');

        $qry->execute(array(':purchaseID' => $purchaseID, 
                            ':productID' => $productID,     
                            ':quantity' => $quantity, 
                            ':sum' => $sum));

        
        
        
    } catch(PDOException $e) {
        error_log($e->getMessage());
        throw $e;
    }
}

?>

?>