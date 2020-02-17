import { getSpecificUser } from './Resources/userResource.js'
import { getAllCategory } from './Resources/productResource.js'

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

function getAllOrder() {
    makeRequest('./API/recievers/orderReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
    })
}


document.getElementById("menShoes").addEventListener("click", getAllCategory);
document.getElementById("womenShoes").addEventListener("click", getAllCategory)
// document.getElementById("login_btn").addEventListener("click", getSpecificUser);


/*  getAllOrder();
getAllUser();
getAllProducts(); */




