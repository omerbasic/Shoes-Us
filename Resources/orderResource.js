
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
    makeRequest('./../API/recievers/orderReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
        renderOrders(result);
    })
}

export function renderOrders(result) {
    var order = result;
 
    var orderDiv = document.getElementsByClassName('orderDiv');
    orderDiv.innerHTML = '';

    for (var i = 0; i < order.length; i++) {
        var purchases = createPurchaseDiv(order[i]);
        orderDiv.appendChild(purchases);
        console.log(purchases)

    }
}

function createPurchaseDiv(order) {

    console.log(order.purchaseID);
    
}
