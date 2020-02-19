function getCart() {
    return JSON.parse(localStorage.getItem("localCart")) || [];
  }

function showProductsInCart() {
    
    const showCartProducts = document.getElementById("productsInCart")
        showCartProducts.innerHTML = "" 

        for (let i = 0; i < getCart().length; i++) {
            const selectedProduct = getCart()[i]
            
            const productDiv = document.createElement("div")
            productDiv.classList = "productDiv"

            const image = document.createElement("img")
            image.setAttribute("src", "./img/products/" + selectedProduct.img_path)
            image.classList = "productImage"
            // Kundvagns-ikon i knappen
           
            const title = document.createElement("p")
            title.innerHTML = selectedProduct.name
            const price = document.createElement("p") 
            price.innerHTML = selectedProduct.price + " kr"

            const deleteProductBtn = document.createElement("button")
            deleteProductBtn.classList = "deleteProductBtn"
            deleteProductBtn.innerHTML = "Ta bort"
            deleteProductBtn.addEventListener("click", function(){
                removeProductFromCart(selectedProduct)
                numberOfProductsInCart()
            })

            productDiv.append(image)
            productDiv.append(title)
            productDiv.append(price)
            productDiv.append(deleteProductBtn)
            showCartProducts.append(productDiv)            
        }
}
showProductsInCart()

function removeProductFromCart(selectedProduct){
    var cart = JSON.parse(localStorage.getItem("localCart"))
    cart.splice(selectedProduct, 1)    
    localStorage.setItem("localCart", JSON.stringify(cart))
    showProductsInCart()
}

function numberOfProductsInCart() {
    var getCart = JSON.parse(localStorage.getItem("localCart"))
    var quantity = document.getElementById("numberOfItemsInCart")
    quantity.innerHTML = getCart.length   
}
numberOfProductsInCart()