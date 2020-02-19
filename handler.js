import { getAllCategory } from './Resources/productResource.js'
import {sendNewsLetter} from './Resources/newsLetterResource.js'

var iKundvagn = [];

function cartCheck(){
const inCart = localStorage.localCart;
if (inCart) {
    iKundvagn = JSON.parse(inCart);
}
}
cartCheck();

function makeRequest(url, method, FormData, callback) {
    fetch(url, {
        method: method,
        body: FormData
    }).then((data) => {
        return data.json()
    }).then((result) => {
        callback(result);
    }).catch((err) => {
        console.log("Error: ", err)
    })
}




// Funktion för att komma till startsidan från inloggningssidan
function toIndex() {
    window.location = "index.php"
}

document.getElementById("menShoes").addEventListener("click", getAllCategory);
document.getElementById("womenShoes").addEventListener("click", getAllCategory)
document.getElementById("womenShoes").addEventListener("click", getAllCategory)
document.getElementById("newsletter-form").addEventListener("submit", sendNewsLetter)

