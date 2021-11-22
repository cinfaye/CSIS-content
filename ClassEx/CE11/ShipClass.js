/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ship {
    Name;
    Speed;
    Hardpoints;
    Cargo;
    Cost;
    Image;
    Armor;
    
    constructor(n, s, h, c, co, i){
        this.Name = n;
        this.Speed = s;
        this.Hardpoints = h;
        this.Cargo = c;
        this.Cost = co;
        this.Image = i;
        this.Armor = 100;
    }
    
    DisplayShip (divtag) {
        divtag.innerHTML = "";
        var displayString = "<table><tr><td>Name</td><td>"+this.Name+"</td></tr>";
        displayString += "<tr><td>Speed</td><td>"+this.Speed+"</td></tr>";
        displayString += "<tr><td>Hard points</td><td>"+this.Hardpoints+"</td></tr>";
        displayString += "<tr><td>Cargo Space</td><td>"+this.Cargo+"</td></tr>";
        displayString += "<tr><td>Cost</td><td>"+this.Cost+"</td></tr>";
        displayString += "<tr><td>Armor</td><td>"+this.Armor+"</td></tr>";
        displayString += "<tr><td colspan = '2'><img src = imgs/"+this.Image+" alt =''></td></tr></table>";
        divtag.innerHTML = displayString;
        return true;
    }
}

