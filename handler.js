import { getSpecificUser } from './Resources/userResource.js'
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

export function getAllProducts() {
    
    makeRequest('./API/recievers/productReciever.php?endpoint=getAll', 'GET', null, (result) => {
        
    })
}

function getAllUser() {
    makeRequest('./API/recievers/userReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log (result)
    })
}

function getAllCategory() {
    makeRequest('./API/recievers/categoryReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
    })
}
document.getElementById("login_btn").addEventListener("click", getSpecificUser);

/* getAllCategory();
getAllOrder();
getAllUser();
getAllProducts(); */


// Funktion för att komma till startsidan från inloggningssidan
function toIndex() {
    window.location = "index.php"
}

document.getElementById("menShoes").addEventListener("click", getAllCategory);
document.getElementById("womenShoes").addEventListener("click", getAllCategory)
document.getElementById("womenShoes").addEventListener("click", getAllCategory)
// document.getElementById("login_btn").addEventListener("click", getSpecificUser);
document.getElementById("newsletter-form").addEventListener("submit", sendNewsLetter)


// document.getElementById("login_btn").addEventListener("click", getSpecificUser);
document.getElementById("newsletter-form").addEventListener("submit", sendNewsLetter)
