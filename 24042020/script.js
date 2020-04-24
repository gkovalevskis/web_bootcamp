function changeHeading(){
    document.getElementById("heading").innerHTML = "Changed with button!"
}
function changeText(){
    document.getElementById("text").innerHTML = "Changed with on mouse over!"
}
function changeAll(idName){
    idName.innerHTML = "Changed all!"
}
function addElement(){
    let header = document.createElement("h1"); 
    header.classList.add("make-red");
    header.innerHTML = "Hello world again!";
    let elem = document.getElementById("after-this");
    elem.appendChild(header);
}
function removeElement(){
    let header = document.getElementsByClassName("make-red");
    let elem = header[0];
    elem.style.fontSize = "50px";
}
function reloadPage(){
    location.reload();
}
function validateForm(form){
    let userName = form["uname"].value;
    let surname = form["surname"].value;
    if (userName === ""){
        alert("You do not have a name!");
        return false;
    }
    if (surname === ""){
        alert("You do not have a surname!");
        return false;
    }
    return true;
}
