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



export function getSpecificUser(event) {

    var username = document.getElementById("usernameInput").value
    var password = document.getElementById("passwordInput").value
    makeRequest('./../API/recievers/userReciever.php?endpoint=getSpecific&username=' + username + '&password=' + password, 'GET', null, (user) => {
        if (user.status == 404){
            console.log("Det gick inte att logga in!")
        } else {
            console.log(user)
            localStorage.setItem("Current User", JSON.stringify(user));
        }
    })
}

export function registerNewUser() {
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

    makeRequest('./../API/recievers/userReciever.php', "POST", formData, (result) => {

    })
}



    

    




