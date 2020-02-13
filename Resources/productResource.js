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
export function getAllCategory() {
    var category = this.innerHTML;
    if (category == "Herr"){
        var categorytoSend = 1;
    } else if (category == "Dam") {
       var categorytoSend = 2;
    }
    makeRequest('./API/recievers/categoryReciever.php?endpoint=getSpecific&categorytoSend=' + categorytoSend , 'GET', null, (result) => {
        console.log(result)
        var showProducts = document.getElementById("allProducts")
        showProducts.innerHTML = ""
        


        for (var i = 0; i < result.length; i++) {
            var selectedProduct = result[i]
            
            var productDiv = document.createElement("div")
            var title = document.createElement("p")
            title.innerHTML = selectedProduct.name
            showProducts.append(title)
            
            
            console.log(selectedProduct)
    }
    
    })
}