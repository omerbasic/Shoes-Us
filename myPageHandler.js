import { getUserOrders } from './Resources/orderResource.js'


let loggedInUser;
getUserOrders();

getLoggedInUser((user) => {
    // Gör det som skall göras om det finns någon inloggad
    console.log(user)
    if(user) {
        loggedInUser = user
        // Visa logga ut knapp etc.
    }
    
    if(user.isAdmin) {
        // Visa dashboard knapp
    }
})