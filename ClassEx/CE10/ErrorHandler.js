/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function TakeOff() {
    try {
        //status string
        statusInd = document.getElementById('status');
        statusInd.innerHTML = "";
        
        //check coolent
        if (document.getElementById('ECOn').checked){
            statusInd.innerHTML += "<li>Too much Engine coolant, cannot keep engine hot.</li>";
            return false;
        }
        
        //check Fuel Burn
        if (document.getElementById('Burn').value < 20){
            statusInd.innerHTML += "<li>Burn is too low...</li>";
            return false;
        } else if (document.getElementById('Burn').value > 30){
            statusInd.innerHTML += "<li>Burn is too high!</li>";
            return false;
        } else {
            statusInd.innerHTML += "<li>Burn is just right.</li>"; 
        }
        
        //check for launch code
        codeString = document.getElementById('Code').value;
        if (codeString !== "") {
            statusInd.innerHTML += "<li>" + codeString.toUpperCase() +"</li>";
        } else {
            statusInd.innerHTML += "<li>You are missing a Launch Code!</li>";
            return false;
        }
        
        //all is good count down to launch
        for (i = 10; i > 0; i--){
            statusInd.innerHTML += "<li>" + i +"</li>";
        }
        statusInd.innerHTML += "<li>Launch</li>";
    } catch (err) {
        console.log(err);
    }
}


