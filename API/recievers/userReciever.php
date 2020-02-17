<?php

try {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if($_POST['endpoint'] == 'add') {

            include('./../Handlers/userHandler.php');
            $result = getAll();
            echo json_encode($result); 

        } else {
            throw new Exception('Not a valid endpoint', 501);
        }


    } else if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if($_GET['endpoint'] == 'getAll') {

            include('./../Handlers/userHandler.php');
            $result = getAll();
            echo json_encode($result); 

        } else if ($_GET['endpoint'] == 'getSpecific'){
            include('./../Handlers/userHandler.php');
            $result = getSpecific($_GET['username'] , $_GET['password']);
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