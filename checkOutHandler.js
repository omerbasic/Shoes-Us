//get current user
// if (current user)
// submitform innerhtml = ""
// ny knapp? eventlistener? -> submit, makePurchase

import { registerNewUser } from './Resources/userResource.js'
import {getLogggedInUser} from './Resources/userResource.js'

//document.getElementById("checkOutSubmit").addEventListener("submit", registerNewUser)

function testFunction(){
    getLogggedInUser((user) => {        
        console.log(user)
        console.log(user.Fname)
        
        if(user.fName){
            document.getElementById("checkoutField").innerHTML = "";
        }

    })
}

testFunction();
