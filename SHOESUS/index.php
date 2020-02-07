<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesUs - Hemsida</title> 
    <link rel="stylesheet" href="./style/mainStyle.css">
    <!-- Link to get th right font -->
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <!-- Link to use Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Link to the handler.js -->
    <script defer src="./handler.js"></script>
</head>
<body>
<header>
        <div class="headTitle">
            <h1 class="textTitle" onclick="toIndex()">Shoes US</h1>
        </div>
    </header>
    

    <nav> 

        <div class="mobileScreenMenu">
            <div class="RespDropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Meny
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="login.php">Inloggning</a>
                    <a class="dropdown-item" href="myPage.php">Mina sidor</a>
                    <a class="dropdown-item" href="cart.php">Min kundvagn</a>
                </div>
            </div>
        </div>
        

    <div class="largeScreenMenu">
        <div class="manWomanField">
        <div class="dropdown" id="herr">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                HERR
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="categoryListDropDown" href="menShoes.php">HERR (Alla)</a> <br>
                <hr>
                <a class="categoryListDropDown" href="#">Boots</a> <br>
                <a class="categoryListDropDown" href="#">Sneakers</a> <br>
                <a class="categoryListDropDown" href="#">Lågskor</a> <br>
                <a class="categoryListDropDown" href="#">Pumps</a> <br>
                <a class="categoryListDropDown" href="#">Stövlar</a>
            </div>
        </div>  

        <div class="dropdown" id="dam">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DAM
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="categoryListDropDown" href="femShoes.php">DAM (Alla)</a> <br>
                <hr>
                <a class="categoryListDropDown" href="#">Boots</a> <br>
                <a class="categoryListDropDown" href="#">Sneakers</a> <br>
                <a class="categoryListDropDown" href="#">Lågskor</a> <br>
                <a class="categoryListDropDown" href="#">Pumps</a> <br>
                <a class="categoryListDropDown" href="#">Stövlar</a> 
            </div>
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