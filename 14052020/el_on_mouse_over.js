window.onload = () => {
    const header = document.getElementById("hello-world-center-left");
    header.addEventListener("mouseover", myWorldCenterOver);
    header.addEventListener("mouseout", myWorldCenterOut);
    function myWorldCenterOver(){
        let element = document.getElementById("hello-world-center-left");
        element.innerHTML = "I'm differnt now!";
    }
    function myWorldCenterOut(){
        let element = document.getElementById("hello-world-center-left");
        element.innerHTML = "Point mouse over me!";
    }
}