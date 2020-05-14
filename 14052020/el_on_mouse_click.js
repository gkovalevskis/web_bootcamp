
var i = 1;
function elOnMouseClick() {
    let element = document.getElementById("hello-world-left");
    element.innerHTML = "Something: " + i;
    i++;
}