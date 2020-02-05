// Funktion för att komma till startsidan från inloggningssidan
function toIndex() {
    window.location = "index.php"
}

// Funktion för att visa DROPDOWN meny på mobil telefon
function dropMenu() {
    var mainDiv = document.createElement("div")
    var article = document.getElementsByClassName("menuIconField")[0]
    article.appendChild(mainDiv)
    var header = document.getElementsByClassName("headTitle")[0]
    var navbar = document.getElementsByTagName("nav")[0]

    var link1 = document.createElement("a")
    mainDiv.appendChild(link1)
    link1.innerText = "Inloggning"
    link1.href = "login.php"

    var br1 = document.createElement("br")
    var br2 = document.createElement("br")
    link1.appendChild(br1)
    link1.appendChild(br2)

    var link2 = document.createElement("a")
    mainDiv.appendChild(link2)
    link2.innerText = "Mina sidor"
    link2.href = "myPage.php"

    link1.style.textDecoration = "none"
    link1.style.color = "black"
    link2.style.textDecoration = "none"
    link2.style.color = "black"

    mainDiv.style.fontSize = "1.4em"
    mainDiv.style.textAlign = "center"
    mainDiv.style.position = "absolute"
    mainDiv.style.marginTop = "40px"
    mainDiv.style.backgroundColor = "#E1F4F3"
    mainDiv.style.width = "100%"
    mainDiv.style.height = "auto"
   

}
