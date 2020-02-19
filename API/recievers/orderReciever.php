<?php
session_start();

try {
    if (!isset($_SESSION['user'])) {
        throw new Exception('Not authorized', 403);
    }


    else if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if($_POST['endpoint'] == 'getAll') {

            include('./../Handlers/orderHandler.php');
            $user = unserialize($_SESSION['user']);
            $result = getAll($user);
            echo json_encode($result); 

        } else {
            throw new Exception('Not a valid endpoint', 501);
        }


    } else if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if($_GET['endpoint'] == 'getAll') {

            include('./../Handlers/orderHandler.php');
            $user = unserialize($_SESSION['loggedInUser'])->userID;
            $result = getAllFromUser($user);
            echo json_encode($result); 

        } else {
            throw new Exception('Not a valid endpoint', 501);
        }

    } else {
        throw new Exception('Not a valid request method', 405);
    }

} catch(Exception $e) {
    echo json_encode(array('Message' => $e->getMessage(), 'status' => $e->getCode()));
}

?>