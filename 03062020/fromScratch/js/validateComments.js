function validateComments(form){
    let userName = form["uname"].value;
    let surname = form["surname"].value;
    let email = form["email"].value;
    let comments = form["comments"].value;
    if (userName === ""){
        let x = document.getElementById("uname");
        x.setCustomValidity("Name: Please fill out your Name!");
        x.reportValidity();
        return false;
    }
    if (surname === ""){
        let x = document.getElementById("surname");
        x.setCustomValidity("Surname: Please fill out your Surname!");
        x.reportValidity();
        return false;
    }
    if (email === ""){
        let x = document.getElementById("email");
        x.setCustomValidity("E-mail: Please fill out your e-mail!");
        x.reportValidity();
        return false;
    }
    if (comments === ""){
        let x = document.getElementById("comments");
        x.setCustomValidity("Comments: Please fill out your Comments!");
        x.reportValidity();
        return false;
    }
    return true;
}