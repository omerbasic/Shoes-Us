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

export function getAllShippers() {
    event.preventDefault()
    makeRequest('./../API/recievers/shippersReciever.php?endpoint=getAllShippers', 'GET', null, (result) => {
        if (result.status == 404){
            console.log("Kan inte hämta leverantörer!")
        } else {
            console.log(result)
            renderShippers(result);     
        }
    })
}

function renderShippers(result) {  

   var shippersWrap = document.getElementById("shippers");
   var shipper = result;
   /* var specificShipperDiv = document.createElement("div")
   specificShipperDiv.classList = "specificShipper"
   specificShipperDiv.innerHTML = ''
   shippersWrap.appendChild(specificShipperDiv); */
   
   for (var i = 0; i < shipper.length; i++) {
    var selectedShipper = shipper[i];

    var shipperDiv = document.createElement('div');
        shipperDiv.classList = 'shipperDiv';
        
        var shipperID = document.createElement('p');
        shipperID.classList = 'shipperID';
        shipperID.innerText = selectedShipper.shipperID;


        var name = document.createElement('p');
        name.classList = 'shipperName';
        name.innerText = selectedShipper.name;


        var info = document.createElement('p')
        info.classList = 'shipperInfo';
        info.innerText = selectedShipper.info;

        var buttonDiv = document.createElement('p')
        buttonDiv.classList = 'buttonDiv'
        var choiceBtn = document.createElement('button')
        choiceBtn.classList = 'chooseShipper'
        choiceBtn.innerText = 'Välj'
        buttonDiv.appendChild(choiceBtn);


        shippersWrap.appendChild(shipperDiv);

        shipperDiv.appendChild(shipperID);
        shipperDiv.appendChild(name);
        shipperDiv.appendChild(info);
        shipperDiv.appendChild(buttonDiv);

    }    

}