<?php
session_start();

try {
    if (!isset($_SESSION['loggedinUser'])) {
        throw new Exception('Not authorized', 403);
    } 

     else if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if($_GET['endpoint'] == 'getAllFromUser') {

            include('./../Handlers/orderHandler.php');
            $userId = unserialize($_SESSION['loggedinUser'])[userID];
            error_log($userId);
            $result = getAllFromUser($userId);
            echo json_encode($result); 


        }else if($_POST['endpoint'] == 'createOrder') {

            include('./../Handlers/orderHandler.php');
            $result = createPurchase($_POST["userID"], $_POST["shipperID"], $_POST["email"],$_POST["cartsum"]);
            // ->>>> $result = createPurchase(userid, shipperid, date, cart.sum)
            //createPurchaseDetails($result)
            $cartArray = $_POST["cart"];

        } else {
            throw new Exception('Not a valid endpoint', 501);
        } else if($_GET['endpoint'] == 'getAllOrder') {


            include('./../Handlers/orderHandler.php');
            $result = getAllOrders();
            echo json_encode($result); 

        }

       
         else if($_GET['endpoint'] == 'getAllSubscribers') {

            include('./../Handlers/orderHandler.php');
            $result = getAllSubscribers();
            echo json_encode($result); 

        } else if($_GET['endpoint'] == 'getAllChangeProducts') {

            include('./../Handlers/orderHandler.php');
            $result = getAllChangeProducts();
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