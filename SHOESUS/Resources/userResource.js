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
    makeRequest('./API/recievers/userReciever.php?endpoint=getSpecific&username=' + username, 'GET', null, (result) => {
        if (username = result.email){
        console.log(result)
        
        localStorage.setItem("Current User", JSON.stringify(result));
    }
    else{
        alert("Fel användarnamn");
    }
    })
}



    

    




