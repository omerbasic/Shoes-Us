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
            
            var productDiv = document.createElement("div") // Div för varje produkt
            productDiv.classList = "productDiv"

            var image = document.createElement("img") // Produktbilden
            image.setAttribute("src", "./img/products" + selectedProduct.img_path)
            image.classList = "productImage"

            var cartIcon = document.createElement("i") // Kundvagns-ikon i knappen
            cartIcon.classList = "fas fa-cart-arrow-down"
            var addToCartBtn = document.createElement("button")
            addToCartBtn.innerHTML = "Köp"
            addToCartBtn.classList = "addToCartBtn"
            /* addToCartBtn.addEventListener("click") */ // Funktion för att lägga i kundvagnen senare
            var title = document.createElement("p") // Produkt-namn
            title.innerHTML = selectedProduct.name
            var price = document.createElement("p") // Produkt-pris
            price.innerHTML = selectedProduct.price + " kr"

            productDiv.append(image)
            productDiv.append(title)
            productDiv.append(price)
            addToCartBtn.appendChild(cartIcon)
            productDiv.append(addToCartBtn)
            showProducts.append(productDiv)

            console.log(selectedProduct)
            
    }
    
    })
}