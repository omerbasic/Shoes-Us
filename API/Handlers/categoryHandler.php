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
function getSpecific($specificCategory) {
    include_once('./../Class/database.php');
    $database = new Database();

    $query = $database->connection->prepare('SELECT * FROM products WHERE name = :category;');
    $query->execute(array(':category' => $specificCategory));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        throw new exception('No category found', 404);
        exit;
    }
    return $result; 
}

?>