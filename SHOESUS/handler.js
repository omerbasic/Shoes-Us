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

function getAllProducts() {
    makeRequest('./API/recievers/productReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
    })
}

function getAllUser() {
    makeRequest('./API/recievers/userReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
    })
}

function getAllOrder() {
    makeRequest('./API/recievers/orderReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
    })
}

function getAllCategory() {
    makeRequest('./API/recievers/categoryReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
    })
}

getAllCategory();
getAllOrder();
getAllUser();
getAllProducts();
// Funktion för att komma till startsidan från inloggningssidan
function toIndex() {
    window.location = "index.php"
}
