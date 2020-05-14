// let person = {
//     firstName: "Ģirts",
//     surName: "Kovaļevskis",
//     age: 45,
//     fullName: function() {
//         return this.firstNam + " " + this.lastName;
//     }
// }
function elOnClick(element){
    element.innerHTML = "I have been changed!"
    element.classList.add("make-blue");
}
function elOnDbClick(element){
    element.innerHTML = "Hello world!"
    element.classList.remove("make-blue"); 
}