<?php 
//include('./API/Handlers/imageHandler.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesUs - Hemsida</title> 
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link rel="stylesheet" href="./style/indexStyle.css">
    <!-- Link to get th right font -->
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <!-- Link to use Bootstrap -->
    
    <!-- Link to the handler.js -->
    <script defer type="module" src="./handler.js"></script>

</head>
<body>

    <header>
        <div class="headTitle">
            <h1 class="textTitle">Shoes US</h1>
        </div>
    </header>
    

    <nav> 
        <div class="manWomanField">
            <div class="dam">
                <a href="#" id="womenShoes">Dam</a>
            </div>

            <div class="herr">
                <a href="#" id="menShoes">Herr</a>
            </div>

            <div class="rea">
                <a href="#" id="sale">Rea</a>
            </div>
        </div>


     

        <div class="loginCartWrap">
            <div class="loginText">
                <a href="login.php">Inloggning</a>
            </div>

            <div class="myPageText">
                <a href="myPage.php">Mina sidor</a>
            </div>

            <div class="cartField">
                <div class="numberOfItemsInCart">(...)</div>
                <a href="cart.php"><img src="./img/CartIcon.png" style="width:20px;height:auto;text-align:right;"></a>
            </div>
   
        </div>
    </nav>
   
            <div id="allProducts">
                <div class="menFemImg">
                    <a href="femShoes.php"><img src="./img/damskor.jpg" alt="FemShoes" id="damBild"></a>
                    <a href="menShoes.php"><img src="./img/herrskor.jpg" alt="MenShoes" href="menShoes.php" id="herrBild"></a>
                </div>
            </div>    
        

    <footer>
        <br> <br>
    <div class="newsletterField">
        Prenumerera på vårt nyhetsbrev: <input type="text" class="newsletterInput" value="Din e-postadress...">
        <button class="sendBtn">Skicka</button>
    </div>
    <br> <hr> 
    <div class="footWrap">
        
        
        <div class="contactUs">
            <h3>Kontakta Oss</h3>
            E-mail: <a href = "mailto: shoesus@gmail.com">ourmail@shoesus.com</a><br>
            Adress: Våragatan 6 <br> 455 65 Göteborg <br> Sverige
        </div>
        
        <div class="clientService">
            <h3>Kundtjänst</h3>
            <a href="#">Köpvillkor</a><br>
            <a href="#">Leverans</a><br>
            <a href="#">Byte/Returer</a><br>
            <a href="#">Integritetspolicy</a>
        </div>
        
        <div class="beMember">
            <h3>Medlem</h3>
            <a href="#">Bli medlem</a><br>
            <a href="#">Nyhetsbrev</a>
        </div>
    </div>
    
</footer>
</body>
</html>