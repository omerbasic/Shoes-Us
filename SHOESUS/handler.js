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

getAllProducts();