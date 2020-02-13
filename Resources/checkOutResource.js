
function makeRequest(url, method, FormData, callback) 



export function makePurchase() {
    var fName = document.getElementById("fName").value
    var lName = document.getElementById("lName").value
    var street = document.getElementById("street").value
    var city = document.getElementById("city").value
    var postalcode = document.getElementById("postalcode").value
    var country = document.getElementById("country").value
    var phone = document.getElementById("phone").value
    var email = document.getElementById("email").value

    let url = './../API/recievers/purchaseReciever.php'
    let method = "POST"

    formData = new FormData()
    formData.append("fName", fName)
    formData.append("lName", lName)
    formData.append("street", street)
    formData.append("city", city)
    formData.append("postalcode", postalcode)
    formData.append("country", country)
    formData.append("phone", phone)
    formData.append("email", email)

    console.log(fName, lName, street, city, postalcode, country, phone, email)

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

