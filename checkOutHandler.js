//get current user
// if (current user)
// submitform innerhtml = ""
// ny knapp? eventlistener? -> submit, makePurchase

import { registerNewUser } from './Resources/userResource.js'


//document.getElementById("checkOutSubmit").addEventListener("submit", registerNewUser)

function checkLoginStatus(){

    let url = "./API/recievers/verifyReciever.php"
    let method = "GET"

    fetch(url,{
        method: method,
    }).then((response) => {
        return response.json()
    }).then((result) => {
        console.log(result)
        
        if (result == false){
            console.log("Not logged in")
        }else{
            document.getElementById("checkoutField").innerHTML = "";
        }

    }).catch((err)=>{
        console.log("Error: ", err)
    }) 
}

document.getElementById("checkoutSubmit").addEventListener("click", checkLoginStatus)