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



export function login(event) {

    var username = document.getElementById("usernameInput").value
    var password = document.getElementById("passwordInput").value
    makeRequest('./../API/recievers/userReciever.php?endpoint=login&username=' + username + '&password=' + password, 'GET', null, (user) => {
        if (user.status == 404){
            console.log("Det gick inte att logga in!")
        } else {
            console.log(user)
            localStorage.setItem("Current User", JSON.stringify(user));
        }
    })
}


export function getSpecific(event) {

    var username = document.getElementById("usernameInput").value
    var password = document.getElementById("passwordInput").value
    makeRequest('./../API/recievers/userReciever.php?endpoint=getSpecific&username=' + username + '&password=' + password, 'GET', null, (user) => {
        if (user.status == 404){
            console.log("Det gick inte att logga in!")
        } else {
            console.log(user)
            
        }
    })
}
//ny registeredUserOrder funktion
// var fname = getcurrentuser.Fname
//formdata.append ("fname", fname) -> endpoint userreciever POST
export function registerNewUser(event) {
    event.preventDefault()
    var fName = document.getElementById("fName").value
    var lName = document.getElementById("lName").value
    var email = document.getElementById("email").value
    var phone = document.getElementById("phone").value
    var password = document.getElementById("password").value
    var city = document.getElementById("city").value
    var postalcode = document.getElementById("postalcode").value
    var country = document.getElementById("country").value
    var street = document.getElementById("street").value

    FormData = new FormData()
    FormData.append("fName", fName)
    FormData.append("lName", lName)
    FormData.append("email", email)
    FormData.append("phone", phone)
    FormData.append("password", password)
    FormData.append("city", city)
    FormData.append("postalcode", postalcode)
    FormData.append("country", country)
    FormData.append("street", street)
    FormData.append("endpoint", "addNew")

    makeRequest('./../API/recievers/userReciever.php?endpoint=getSpecific&username=' + email + '&password=' + password, 'GET', null, (user) => {
        
            
            makeRequest('./../API/recievers/userReciever.php', 'POST', FormData, (result) => {
                    console.log(result);
            })
        
    })

}






    

    




