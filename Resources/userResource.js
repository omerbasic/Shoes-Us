function makeRequest(url, method, data, callback) {
    fetch(url, {
        method: method,
        body: data
    }).then((data) => {
        return data.json()
    }).then((result) => {
        callback(result);
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

export function getLogggedInUser(callback){

    makeRequest('./../API/recievers/userReciever.php?endpoint=getLoggedinUser', 'GET', null, (result) => {
        if (result == false){
            console.log("not logged in")
            callback(result)

        } else {
            callback(result)
        }
    })

}

export async function login(event) {

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

export function logout(user) {
    localStorage.removeItem("Current User", JSON.stringify(user));
    console.log("You have successfully logged out from local storage!")
    makeRequest('./../API/recievers/userReciever.php?endpoint=logout', 'GET', null, (user) => {
        console.log("You have logged out from session")
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
export function registerNewUser() {
    
    var fName = document.getElementById("fName").value
    var lName = document.getElementById("lName").value
    var email = document.getElementById("usernameInput").value
    var phone = document.getElementById("phone").value
    var password = document.getElementById("passwordInput").value
    var city = document.getElementById("city").value
    var postalcode = document.getElementById("postalcode").value
    var country = document.getElementById("country").value
    var street = document.getElementById("street").value

    let data = new FormData()
    data.append("fName", fName)
    data.append("lName", lName)
    data.append("email", email)
    data.append("phone", phone)
    data.append("password", password)
    data.append("city", city)
    data.append("postalcode", postalcode)
    data.append("country", country)
    data.append("street", street)
    data.append("endpoint", "addNew")

    console.log(data)
            
    makeRequest('./../API/recievers/userReciever.php', 'POST', data, (result) => {
            console.log(result);
    })
        
}








    

    




