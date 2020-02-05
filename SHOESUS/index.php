<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesUs - Hemsida</title> 
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <script defer src="./handler.js"></script>
</head>
<body>
    <header>
        
        <div class="headTitle">
            <h1 class="textTitle">Shoes US</h1>
        </div>
    </header>
    
    <nav> 
        <div class="menuIconField">
            <button class="menuButton"><img src="./img/menuIcon.png" style="width:30px;"></button>
        </div>

        <div class="dropdown">
            <button class="dropBtn">Dam
            </button>
            <div class="dropdownContent">
                <a href="#">Boots</a>
                <a href="#">Sneakers</a>
                <a href="#">Lågskor</a>
                <a href="#">Pumps</a>
                <a href="#">Stövlar</a>
            </div>
        </div>  

        <div class="dropdown">
        <button class="dropBtn">Herr</button>
            <div class="dropdownContent">
                <a href="#">Boots</a>
                <a href="#">Sandaler</a>
                <a href="#">Sneakers</a>
                <a href="#">Lågskor</a>
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
   
    <div class="article">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta ullam impedit quis nam architecto itaque autem iure, 
        obcaecati blanditiis et soluta illum maxime? Quae tempora et architecto aliquid vel? Assumenda?
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque esse vitae rerum enim perspiciatis? Pariatur eos necessitatibus tempore, a iusto unde officia dignissimos fugit eveniet accusantium quis labore expedita sunt!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente natus error architecto voluptatum incidunt facilis mollitia labore. Quos magni commodi aspernatur doloribus sint aliquam eos voluptatum eum fugiat, rem quisquam!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum amet eos quia corporis ex repellendus. Provident saepe vel nemo expedita eveniet iusto quasi, nulla ratione doloremque earum consectetur sit facilis.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita alias neque deleniti eum asperiores quo iste totam maxime et a blanditiis sint aliquam repudiandae cumque cum, voluptate molestias repellat ipsa.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, nisi aliquid! Voluptas culpa provident voluptatem blanditiis? A quia molestiae facilis, optio error beatae animi recusandae vero eaque, placeat nemo hic!locale_filter_matches
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea iure veritatis aspernatur cumque quasi, atque velit repudiandae eligendi, laudantium dolor alias animi placeat assumenda numquam cupiditate tempora porro, error delectus?
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