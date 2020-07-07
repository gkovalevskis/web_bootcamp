function validateComments(){
    let name = document.getElementById("uname").value;
    let surname = document.getElementById("surname").value;
    let email = document.getElementById("email").value;
    let comments = document.getElementById("comments").value;
    
    if (name === "" || name.search(/[a-zA-Z]/) < 0 || name.search(/[0-9]/) > 0 || name.length < 2){
        let x = document.getElementById("uname");
        x.setCustomValidity("Name: Please fill out your Name!");
        x.reportValidity();
        return false;
    }
    if (surname === "" || surname.search(/[a-zA-Z]/) < 0 || surname.search(/[0-9]/) > 0 || surname.length < 2){
        let y = document.getElementById("surname");
        y.setCustomValidity("Surname: Please fill out your Surname!");
        y.reportValidity();
        return false;
    }
    if (email === ""){
        let z = document.getElementById("email");
        z.setCustomValidity("E-mail: Please fill out your e-mail!");
        z.reportValidity();
        return false;
    }
    if (comments === ""){
        let i = document.getElementById("comments");
        i.setCustomValidity("Comments: Please fill out your Comments!");
        i.reportValidity();
        return false;
    }
    return true;
}