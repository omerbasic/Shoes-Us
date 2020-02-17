<?php

try {

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    

        include('./../Handlers/newsletterHandler.php');
        $result = postNewsletter($_POST['Email'], $_POST['fName'], $_POST['lName']);
        echo json_encode($result); 

    


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