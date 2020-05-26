function myFunction(){
    console.log("Hello World!");
}
myFunction();
function multiplyNumbers(myNum, yourNum){
    return myNum * yourNum;
}
console.log(multiplyNumbers(254, 890));

function factorial(number){
    if(number === 0){
        return 1;
    }
    return number * factorial(number - 1);
}
console.log(factorial(3));
//in FUNCTION block you can access to var, const, 
//let. But not outside of function block.
//in IF & LOOP block you can access to var, const, 
//let. But outside of IF & LOOP block you can 
//access only to var & const.
//COUNTER you can use for all loop blocks.
let text = "fjfgajgfjfhg";
console.log(text.length);
text.indexOf("hg");