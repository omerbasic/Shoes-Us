<?php
session_start();
try {
// Checking if a request has been made.
    if(isset($_SERVER['REQUEST_METHOD'])) {

  
        if ($_SERVER['REQUEST_METHOD'] === 'GET'){
            if (isset($_SESSION['user'])){

            
                echo json_encode(true);
            }else{
                echo json_encode(false);
            }
        

        } else {
        
        // Sending a fault message explaining that the name is not set.
            echo json_encode("name is not set in body");
            exit;
        }
        } else {
            
    // Sending a fault message explaining that the request-method is not POST.
            echo json_encode("not a GET method");
            exit;
                }}
catch(Exception $e) {
    echo json_encode(array('Message' => $e->getMessage(), 'status' => $e->getCode()));
}



?>