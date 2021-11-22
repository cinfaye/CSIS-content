/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var error = false;
var nameExpression = /^[a-zA-Z]+$/;
var emailExpression = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    
function search(){
    error = false;
    console.log("Validating");
    if (document.getElementById("CharName").value == "" || !document.getElementById("CharName").value.match(nameExpression)){
        console.log("CharName");
        document.getElementById("CharName").classList.add("is-invalid");
        alert ("Please enter valid Character Name");
        error = true;
    }
    if (error == true){
        return false;
    }
    
}
function create(){
    error = false;
    console.log("Validating");
    console.log(document.getElementById("playEmail").value);
    if (document.getElementById("CharName").value == "" || !document.getElementById("CharName").value.match(nameExpression)){
        console.log("CharName");
        document.getElementById("CharName").classList.add("is-invalid");
        alert ("Please enter valid Character Name");
        error = true;
    }
    if (document.getElementById("playEmail").value == "" || !emailExpression.test(document.getElementById("playEmail").value)){
        console.log("playEmail");
        document.getElementById("playEmail").classList.add("is-invalid");
        alert ("Please enter valid Email");
        error = true;
    }
    if (document.getElementById("History").value == ""){
        console.log("History");
        document.getElementById("History").classList.add("is-invalid");
        alert ("Please fill out the History for your character");
        error = true;
    }
    if (error == true){
        return false;
    }
}
function update(){
    error = false;
    console.log("Validating");
    console.log(document.getElementById("playEmail").value);
    if (document.getElementById("CharName").value == "" || !document.getElementById("CharName").value.match(nameExpression)){
        console.log("CharName");
        document.getElementById("CharName").classList.add("is-invalid");
        alert ("Please enter valid Character Name");
        error = true;
    }
    if (document.getElementById("playEmail").value == "" || !emailExpression.test(document.getElementById("playEmail").value)){
        console.log("playEmail");
        document.getElementById("playEmail").classList.add("is-invalid");
        alert ("Please enter valid Email");
        error = true;
    }
    if (document.getElementById("History").value == ""){
        console.log("History");
        document.getElementById("History").classList.add("is-invalid");
        alert ("Please out the History for your character");
        error = true;
    }
    if (error == true){
        return false;
    }
}

