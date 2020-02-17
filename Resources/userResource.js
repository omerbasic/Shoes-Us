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

    FormData = new FormData()
    FormData.append("fName", fName)
    FormData.append("lName", lName)
    FormData.append("street", street)
    FormData.append("city", city)
    FormData.append("postalcode", postalcode)
    FormData.append("country", country)
    FormData.append("phone", phone)
    FormData.append("email", email)

    makeRequest('./../API/recievers/userReciever.php?endpoint=addNew', 'POST', FormData, (result) => {
            console.log(result);
    })
}



    

    




