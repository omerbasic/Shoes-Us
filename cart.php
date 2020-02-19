<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesUs - Hemsida</title> 
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link rel="stylesheet" href="./style/cartStyle.css">
    <!-- Link to use Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e8127072bf.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <script defer type="module" src="cartHandler.js"></script>
    <script defer type="module" src="handler.js"></script>
</head>
<body>
<header>
        <div class="headTitle">
            <h1 class="textTitle">Shoes US</h1>
        </div>
    </header>
    

<nav> 
    <div id="toIndex"><a href="index.php">Startsidan</a></div>    

    <div class="loginCartWrap">
        <div class="loginText">
            <a href="login.php">Inloggning</a>
        </div>

        <div class="myPageText">
            <a href="myPage.php">Mina sidor</a>
        </div>

        <div class="cartField">
            <div id="numberOfItemsInCart"></div>
            <a href="cart.php"><img src="./img/CartIcon.png" style="width:20px;height:auto;text-align:right;"></a>
        </div>

    </div>
</nav>
   
    <div class="article">
        <h1 style="color: #333333;">Kundvagn <img src="./img/CartIcon.png" style="width:20px;height:auto;text-align:right;"></h1>
    </div>

    <div id="productsInCart"></div>
    
    
    <footer>
        <br> <br>
        <form class="newsletterField" id ="newsletter-form">
            Prenumerera på vårt nyhetsbrev: 
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        
            <label for="firstname">Förnamn</label>
            <input type="text" name="firstname" id="firstname">
        
            <label for="lastname">Efternamn</label>
            <input type="text" name="lastname" id="lastname">
            <button type="submit" id="newsLetterBtn">Skicka</button>
        </form>
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