// function generateElement(){
//     let header = document.createElement("h1");
//     header.setAttribute("class", "typing");
//     header.innerHTML = "You typing";
//     document.getElementById("my-center-right").appendChild(header);
// }
// function removeElement(){
//     let headerTwo = document.getElementsByClassName("typing");
//     while(headerTwo.length > 0){
//         headerTwo[0].parentNode.removeChild(headerTwo[0]);
//     }
// }
function generateElement(){
    let parent = document.getElementById("my-center-right");
    let element = document.createElement('p');
    let text = document.createTextNode('A key has been pressed!');
    element.appendChild(text);
    element.setAttribute('class', 'generated-element');
    parent.appendChild(element);
}
function removeElement(){
    let generated = document.getElementsByClassName('generated-element');
    while(generated[0]){
        generated[0].parentNode.removeChild(generated[0]);
    }
}