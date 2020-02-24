import { getUserOrders } from './Resources/orderResource.js'
import {getLogggedInUser} from './Resources/userResource.js'
import {getAllOrders} from './Resources/orderResource.js'
import {getAllSubscribers} from './Resources/orderResource.js'
import {getAllChangeProducts} from './Resources/orderResource.js'

checkAdminStatus();

function checkAdminStatus(){
    getLogggedInUser((user) => {
        //gör det som skall göras om någon är inloggad
        
        if (user.isAdmin == 1) {
            
            console.log('du är admin');
            getAllOrders();
            getAllSubscribers();
            getAllChangeProducts();
        } else if (user.isAdmin == 0) {

            console.log('du är inte admin');
            getUserOrders();
        }


    })

}