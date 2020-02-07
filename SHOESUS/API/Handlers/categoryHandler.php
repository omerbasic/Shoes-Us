<?php 

function getAll() {
    include_once('./../Class/database.php');
    $database = new Database();

    $query = $database->connection->prepare('SELECT * FROM category;');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        throw new exception('No category found', 404);
        exit;
    }
    return $result; 
}

?>