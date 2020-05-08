let person = {
    name: "Aloizs", surname: "Auseklis", age: 45,
};
let cars = ["Saab", "vw", "Audi", "Volvo", "BMW"];
let integer = 0.2 + 0.1;
let text = "This is a text";
console.log(person.name + " " + person.surname);
let nullAddPlus = 123e5;
let nullAddMinuss = 123e-5;
let number = 9999999999999999;//16bit

let name = "Alex";
let otherName = "Igors";

if(name == "Igors"){
    console.log(`My name is ${name}.`);
}
else if (otherName == "Igors"){
    console.log(`My name is ${otherName}.`)
}

switch (new Date().getDay()){
    case 0:
        console.log("Sunday");
        break;        
    case 1:
        console.log("Monday");
        break;    
    case 2:
        console.log("Tuesday");
        break;    
    case 3:
        console.log("Wednesday");
        break;    
    case 4:
        console.log("Thursday");
        break;
    case 5:
        console.log("Friday");
        break;    
    case 6:
        console.log("Saturday");
        break;    
}
for(let i = 0; i < 5; i++){
    console.log(i);
};
let x = 0;
while (x < 10){
    console.log(x);
    x++;
}
for(let a = 0; a < cars.length; a++){
    console.log(cars[a]);
}
let b = 0;
while(cars[b]){
    console.log(cars[b]);
    b++;
};
