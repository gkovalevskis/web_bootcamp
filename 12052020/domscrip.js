window.onload = () => {
    let header = document.getElementsByTagName("h1")
    header[3].innerHTML = "This is JS!"
    //innerHTML - Hello world!
    //outerHTML - <h1>Hello world!</h1>
    let name = document.getElementById("world").innerHTML = "This is id = world"; 
    let myArray = document.getElementsByClassName("figure");
    for(let i = 0; i < myArray.length; i++){
        myArray[i].innerHTML = "YoHoHo";
    }
    let cooler = document.getElementsByClassName("element");
    for(let i = 0; i < cooler.length; i++){
        cooler[i].innerHTML = "COOLER";
    }
    console.log(typeof myArray);
    let writer = document.getElementById('hello');
    writer.style.color = "red";
    writer.style.textAlign = "center";
    writer.style.background = "pink";
    writer.classList.remove("make-red");
    writer.classList.add("make-blue");
    writer.className = writer.className.replace(/\bmake-red\b/g, "make-blue");
    const myName = 'Girts';
    const myCity = 'Riga';
    console.log(`My name is ${myName}. My favorite city is ${myCity}.`);
    let x = document.getElementsByClassName("something")[0];//to access first class = "something" element
} 