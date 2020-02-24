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
        price.innerHTML = selectedProduct.price - selectedProduct.discount + " kr"

        const deleteProductBtn = document.createElement("button")
        deleteProductBtn.classList = "deleteProductBtn"
        deleteProductBtn.innerHTML = "Ta bort"
        deleteProductBtn.num = i;
        deleteProductBtn.addEventListener("click", function(){
            removeProductFromCart(this.num)
            numberOfProductsInCart()
        })

        productDiv.append(image)
        productDiv.append(title)
        productDiv.append(price)
        if(selectedProduct.discount != 0) {
            const discount = document.createElement("p")
            discount.innerHTML = "10 %"
            discount.id = "discount"
            productDiv.append(discount)
        }
        productDiv.append(deleteProductBtn)
        showCartProducts.append(productDiv)    
    }

    const sumDiv = document.getElementById("goToCheckout")
    const sum = document.createElement("p")
    sum.classList = "sumText"
    sum.innerText = "Totalbelopp: " + totalCart() + " kr"
    sumDiv.appendChild(sum)
}
showProductsInCart()

function removeProductFromCart(title){
    const cart = JSON.parse(localStorage.getItem("localCart"))
    var selectedProduct = title;
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

function totalCart(){
    const cart = JSON.parse(localStorage.getItem("localCart"))
    let total = 0;
    for (var i = 0; i < cart.length; i++){
        total += Number(cart[i].price);
    }
    return total
}

