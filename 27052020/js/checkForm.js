function checkForm(){
    let fullName = document.getElementById("fullName").value;
    let age = document.getElementById("age").value;
    let email = document.getElementById("email").value;
    let fullNameSign = document.getElementById("fullName").value.includes(" ");
    let fullNameSplit = fullName.split(" ");
    console.log("check");
    if (!fullNameSign || fullName === "" || fullName.search(/[a-zA-Z]/) < 0 || fullNameSplit[0].lenght < 2 || fullNameSplit[1].lenght < 2){
    // if(fullName === ""){
    let x = document.getElementById("fullName").value;
        x.setCustomValidity("Your name and surname: Please fill out as Name Surname!");
        x.reportValidity();
        return false;
    }
    if (age === ""){
        let y = document.getElementById("age").value;
        y.setCustomValidity("Your age: Please fill out age!");
        y.reportValidity();
        return false;
    }
    if (email === ""){
        let z = email = document.getElementById("email").value;;
        z.setCustomValidity("Your e-mail: Please fill out e-mail!");
        z.reportValidity();
        return false;
    }
    return true;
}