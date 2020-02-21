import { getLogggedInUser } from './userResource.js'
import{ renderShippers } from './shipperResource.js'
function getCart() {
    return JSON.parse(localStorage.getItem("localCart")) || [];
  }
  function getShipperID() {
    return JSON.parse(localStorage.getItem("shipperID")) || [];
  }

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

export function getUserOrders() {
    makeRequest('./../API/recievers/orderReciever.php?endpoint=getAllFromUser', 'GET', null, (result) => {
        if (result.status == 404){
            console.log("Det gick inte att hämta dina beställningar!")
        } else {
            console.log(result)
            renderOrders(result);     
        }
    })
}

export function makeOrder(){

    getLogggedInUser((user) => {        
        var myuserid = user.userID;
    
        })
        var cart = getCart();
        var shipperid = getShipperID();
   
    FormData = new FormData()
    FormData.set("userID", myuserid)
    FormData.append("Cart", cart)
    FormData.append("shipperID", shipperid)
    makeRequest('./../API/recievers/orderReciever.php', 'POST', FormData, (result) => {
        console.log(result);
})

    


}


function renderOrders(result) {
    var MainOrderDiv = document.getElementsByClassName("MainOrderDiv")[0];
    var order = result;
    
    var orderDiv = document.createElement("div");
    orderDiv.classList = "orderDiv";
    orderDiv.innerHTML = '';
    MainOrderDiv.appendChild(orderDiv);

    for (var i = 0; i < order.length; i++) {
        var selectedOrder = order[i];


        var contentDiv = document.createElement('div');
        contentDiv.classList = 'contentDiv';
        
        var purchaseID = document.createElement('p');
        purchaseID.classList = 'purchaseID';
        purchaseID.innerText = 'orderID' + ' ' + selectedOrder.purchaseID;

        var date = document.createElement('p')
        date.classList = 'date';
        date.innerText = 'datum' + ' ' + selectedOrder.date;

        var sum = document.createElement('p');
        sum.classList = 'sum';
        sum.innerText = 'Totalbelopp' + ' ' + selectedOrder.sum + 'kr';

        var quantity = document.createElement('p');
        quantity.classList = 'quantity';
        quantity.innerText = 'Kvantitet' + ' ' + selectedOrder.quantity;

        var name = document.createElement('p');
        name.classList = 'name';
        name.innerText = 'Produkt:' + ' ' + selectedOrder.name;

        var price = document.createElement('p');
        price.classList = 'price';
        price.innerText = 'Pris' + ' ' + selectedOrder.price + 'kr';


        orderDiv.appendChild(contentDiv);

        contentDiv.appendChild(purchaseID);
        contentDiv.appendChild(date);
        contentDiv.appendChild(sum);
        contentDiv.appendChild(quantity);
        contentDiv.appendChild(name);
        contentDiv.appendChild(price);

    }    
}    



