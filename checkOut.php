<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesUs - Hemsida</title> 
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link rel="stylesheet" href="./style/checkOutStyle.css">
    <link rel="stylesheet" href="./style/shipperStyle.css">
    <!-- Link to get th right font -->
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">    
    <!-- Link to the handler.js -->
    <script defer type ="module" src="./checkOutHandler.js"></script>
    <script defer type ="module" src="./shippersHandler.js"></script>
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

    

        <div class="categoryTitle">
            <h1>Check out</h1>
        </div>

        <div class="checkOutForm">
        <form method="post">
            <fieldset id="userData">
            Förenamn: <input type="text" name="fName" value="..." id="fName"><br>
            Efteramn: <input type="text" name="lName" value="..." id="lName"><br>
            Adress: <input type="text" name="street" value="..." id="street"><br>
            Stad: <input type="text" name="city" value="..." id="city"><br>
            Postnummer: <input type="text" name="postalcode" value="..." id="postalcode"><br>
            Land: <input type="text" name="country" value="..." id="country"><br>
            Telefonnummer: <input type="text" name="phone" value="..." id="phone"><br>
            Postadress: <input type="text" name="email" value="..." id="email"><br>
            Lösenord: <input type="text" name="password" value="1234" id="password"><br> 
            <input type="submit" value="Submit" id="checkOutSubmit">
            </fieldset>
        </form>

        <form method="get">
            <h3 style="text-align:center">Välj din fraktalternativ:</h3>
            <fieldset id="shippers">
              <button id="getShippers">Klicka här för att hämta våra fraktalternativ</button>
            </fieldset>
        </form>
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