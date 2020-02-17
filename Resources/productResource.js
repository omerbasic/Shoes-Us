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
    const category = this.innerHTML;
    let categorytoSend;
    if (category == "Herr"){
        categorytoSend = 1;
    } else if (category == "Dam") {
        categorytoSend = 2;
    }
    makeRequest('./API/recievers/categoryReciever.php?endpoint=getSpecific&categorytoSend=' + categorytoSend , 'GET', null, (result) => {
    
        const showProducts = document.getElementById("allProducts")
        showProducts.innerHTML = "" 

        for (let i = 0; i < result.length; i++) {
            const selectedProduct = result[i]
            
            const productDiv = document.createElement("div")
            productDiv.classList = "productDiv"

            const image = document.createElement("img")
            image.setAttribute("src", "./img/products/" + selectedProduct.img_path)
            image.classList = "productImage"
            // Kundvagns-ikon i knappen
            const cartIcon = document.createElement("i") 
            cartIcon.classList = "fas fa-cart-arrow-down"
            const addToCartBtn = document.createElement("button")
            addToCartBtn.innerHTML = "Köp"
            addToCartBtn.classList = "addToCartBtn"
            // Funktion för att lägga i kundvagnen 
            addToCartBtn.addEventListener("click", function()  { 
                console.log(inCart)
                if(inCart) {
                    // Här finns kundvagnen
                    inCart.push(selectedProduct)
                } else {
                    // Här finns inte kundvagnen
                    inCart = []
                    inCart.push(selectedProduct)
                }
                saveToLocalStorage(inCart)
            }) 
            const title = document.createElement("p")
            title.innerHTML = selectedProduct.name
            const price = document.createElement("p") 
            price.innerHTML = selectedProduct.price + " kr"

            productDiv.append(image)
            productDiv.append(title)
            productDiv.append(price)
            addToCartBtn.appendChild(cartIcon)
            productDiv.append(addToCartBtn)
            showProducts.append(productDiv)            
    }
    
    })
}

const inCart = [/* {
    product,
    quantity
} */]

function saveToLocalStorage(inCart) {
    /* Spara kundvagnen till localstorage */
    localStorage.setItem('cart', JSON.stringify(inCart))

}