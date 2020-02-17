import { getSpecificUser } from './Resources/userResource.js'
import { getAllCategory } from './Resources/productResource.js'

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

export function getAllProducts() {
    
    makeRequest('./API/recievers/productReciever.php?endpoint=getAll', 'GET', null, (result) => {
        
    })
}

function getAllUser() {
    makeRequest('./API/recievers/userReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log (result)
    })
}

function getAllOrder() {
    makeRequest('./API/recievers/orderReciever.php?endpoint=getAll', 'GET', null, (result) => {
        console.log(result)
    })
}


document.getElementById("menShoes").addEventListener("click", getAllCategory);
document.getElementById("womenShoes").addEventListener("click", getAllCategory)
// document.getElementById("login_btn").addEventListener("click", getSpecificUser);


/*  getAllOrder();
getAllUser();
getAllProducts(); */



//Funktion för att logga in


/* function check(username) {
    var un = username;
    var pw = password;
    var userToLogIn = undefined;

    getSpecificUser(un);
    console.log()
  
    users.forEach(user => {
      if (un == user.username && pw == user.password) {
        userToLogIn = user;
  
        loggedIn = true;
        localStorage.setItem("Current User", JSON.stringify(userToLogIn));
        
      }
    });
  
    if (!userToLogIn) {
      alert("Login was unsuccessful, please check your username and password");
  
      loggedIn = false;
    }
  } */

//Funktion för att registrera (temp)
/* function store(username, password) {
    var existingUsername = false;
    
  
    users.forEach(user => {
        if(username==user.username){
            existingUsername = true;
        }
  });
            if (!existingUsername) {
              var newUser = {
                username: username,
                password: password,
                orders: []
              };
        
              users = users || [];
              users.push(newUser);
              var allUsers = JSON.stringify(users);
              localStorage.allaAnvändare = allUsers;
              users = localStorage.getItem("allaAnvändare");
              location.reload();
            } 
            else{
                alert("Username already exists");
            }
  }

  function getCurrentUser() {
    return JSON.parse(localStorage.getItem("Current User"));
  } */