window.onload = () => {
    let createdElementOne = document.createElement("h1");//create h1 tag
    let text = document.createTextNode("This is a h1 element with text inserted in div class test & created in JS!");//create text for h1 tag
    createdElementOne.appendChild(text);//insert created text in created h1 tag
    createdElementOne.style.color = "pink";
    createdElementOne.setAttribute("id", "elementOne")
    createdElementOne.setAttribute("title", "This is a title")
    let inserter = document.getElementById("test");//declare variable for inserting element in HTML
    inserter.appendChild(createdElementOne);//declare where insert element

    let createdElementTwo = document.createElement("a");
    let textTwo = document.createTextNode("This is a tag with text inserted in div class test created in JS!");
    createdElementTwo.appendChild(textTwo);
    createdElementTwo.style.textAlign = "center";
    createdElementTwo.setAttribute("href", "https://www.google.com")
    createdElementTwo.setAttribute("target", "_blank")
    let inserterTwo = document.getElementById("test");
    inserterTwo.appendChild(createdElementTwo);

    let createdElementButton = document.createElement("BUTTON");
    let buttonText = document.createTextNode("This is a button with text inserted in body & created in JS!");
    createdElementButton.appendChild(buttonText);
    createdElementButton.style.borderColor = "blue";
    createdElementButton.setAttribute("id", "button")
    createdElementButton.setAttribute("class", "main")
    let inserterButton = document.body;
    inserterButton.appendChild(createdElementButton);

    let createdElementFour = document.createElement("a");
    let textForDiv = document.createTextNode("This is a a with text inserted in body & created in JS!");
    createdElementFour.style.float = "right";
    createdElementFour.setAttribute("href", "https://www.codecademy.com")
    createdElementFour.setAttribute("target", "_blank")
    createdElementFour.appendChild(textForDiv);
    let inserterFour = document.body;
    inserter.appendChild(createdElementFour);
    
    let createdElementFive = document.createElement("IMG");
    createdElementFive.style.width = "75px";
    createdElementFive.setAttribute("src", "https://www.fenikssfun.com/cache/images/1551048504/02_1400678328.jpg");
    createdElementFive.setAttribute("height", "75px")
    let inserterFive = document.body;
    inserterFive.appendChild(createdElementFive);
 }