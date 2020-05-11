var psw = 12345;
var lettersSum = 0;
for(let i = 0; i < psw.length; i++){
    if(typeof psw[i] === "number"){
        lettersSum = lettersSum + 1;
    }
}
if (psw.length === lettersSum){
    console.log("Yehh");
}
let text = "dasfhkfksj hjfgakffb 1112";
console.log(text.length);
console.log(text.indexOf("fh"));
console.log(text.slice(3, 5));
console.log(text.slice(-22, -20));
console.log(text.substring(3));
console.log(text.replace("1", "gggggG"));
console.log(text.toLowerCase());
console.log(text.toUpperCase());
let cars = "Audi, BMW, Saab, Vw"
console.log(cars.charAt(6));

let num = "Pēteris";
console.log(typeof num);
num2 = Number(num);
console.log(typeof num2);

let otherCars = ["Audi", "BMW", "Saab", "Vw"];
console.log(otherCars.splice(""));
otherCars.forEach(myFunction);

function myFunction(item){
    console.log(item);
}

