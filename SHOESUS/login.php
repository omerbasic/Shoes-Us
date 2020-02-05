<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logga in</title>
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link rel="stylesheet" href="./style/loginStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <script src="handler.js"></script>
</head>
<body>
    <header>
        <div class="headTitle">
           <h1 class="textTitle" onclick="toIndex()">Shoes US</h1>
        </div>
    </header>

    <nav> 
        <div class="dropdown">
            <button class="dropBtn">Dam
            </button>
            <div class="dropdownContent">
                <a href="#">Stövlar</a>
                <a href="#">Stövlar</a>
                <a href="#">Stövlar</a>
                <a href="#">Stövlar</a>
            </div>
        </div>  

        <div class="dropdown">
        <button class="dropBtn">Herr</button>
            <div class="dropdownContent">
                <a href="#">Sneakers</a>
                <a href="#">Sneakers</a>
                <a href="#">Sneakers</a>
                <a href="#">Sneakers</a>
            </div>
        </div>

        <div class="loginCartWrap">
            <div class="myPageText">
                Mina sidor
            </div>

            <div class="cartField">
                Kundvagn
            </div>
        </div>
    </nav>

    <div id="loginDiv">
        <div>
            <h1>Logga in:</h1>
        </div>
        <div id="username">
            Användarnamn:<input type="text" placeholder="Användarnamn" id="usernameInput">
        </div> 
        <div id="password">
            Lösenord:<input type="text" placeholder="Lösenord" id="passwordInput">
        </div>
        <div id="button">
            <button id="loginButton">Logga in</button>
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