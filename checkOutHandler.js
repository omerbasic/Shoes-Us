//get current user
// if (current user)
// submitform innerhtml = ""
// ny knapp? eventlistener? -> submit, makePurchase

import { registerNewUser } from './Resources/userResource.js'
import {getLogggedInUser} from './Resources/userResource.js'
import { login } from './Resources/userResource.js'
import {makeOrder} from 

//document.getElementById("checkOutSubmit").addEventListener("submit", registerNewUser)

function testFunction(){
    getLogggedInUser((user) => {        
        console.log(user.email)
        console.log(user.fName)
        
        if(user.fName){
            document.getElementById("checkoutField").innerHTML = "";
        }
        
    })
    
}

testFunction();

document.getElementById("checkoutSubmit").addEventListener("click", buttonFunction)


function buttonFunction(){
    
    getLogggedInUser((user) => {        
        
        
        if(user.fName){
            makeOrder();
        }
        else {
            registerNewUser();
            login();
            makeOrder();
        }
        
    })
   
}