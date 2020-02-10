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
    makeRequest('./API/recievers/userReciever.php?endpoint=getSpecific&username=' + username + '&password=' + password, 'GET', null, (result) => {
        
        if (username = result.email && password == result.password){
        console.log(result)
        console.log(result.password)
        
        localStorage.setItem("Current User", JSON.stringify(result));
            }
    })
}



    

    




