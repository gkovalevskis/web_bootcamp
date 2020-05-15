function changeDiv() {
    //element that deleted
    let elementToChange = document.getElementsByClassName("conteiner")[0];
    elementToChange.remove();
    //created new div
    let createdElementDiv = document.createElement("div");
    createdElementDiv.setAttribute("class", "container");
    let inserterNewDiv = document.body;
    inserterNewDiv.appendChild(createdElementDiv);
    //created button in new div
    let newBtn = document.createElement("button");
    let textForNewButton = document.createTextNode("BACK TO OLD DIV");
    newBtn.appendChild(textForNewButton);
    newBtn.setAttribute("onclick", "changeBackDiv()");
    createdElementDiv.appendChild(newBtn);
}
function changeBackDiv(){
    location.reload();
}
