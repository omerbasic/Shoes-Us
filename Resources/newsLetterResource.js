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


export function sendNewsLetter(){
    var nlemail = document.getElementById("newsletterEmail").value
    var nlfName = document.getElementById("newsletterfName").value
    var nllName = document.getElementById("newsletterlName").value
    FormData = new FormData();
    FormData.set("Email", nlemail)
    FormData.append("fName", nlfName)
    FormData.append("lName", nllName)
    makeRequest('./../API/recievers/newsletterReciever.php', 'POST', FormData, (result) => {
        console.log(result)
    })
}