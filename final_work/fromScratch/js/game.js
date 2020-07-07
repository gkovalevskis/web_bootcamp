function playGame(userChoiceNumber){
			

    var compChoiceNumber = Math.round(2 * Math.random());
    var compChoice = rpsChoice(compChoiceNumber);
    console.log("Computer chose: " + compChoice); 

    var userChoice = rpsChoice(userChoiceNumber);
    console.log("User chose: " + userChoice);

    
    var results = determineWinner(userChoiceNumber, compChoiceNumber);

    console.log("The winner is: " + results);
    
    let removeClass = document.getElementsByClassName("winner")[0];
    removeClass.remove();
    let containerDiv = document.getElementsByClassName("main")[0];
    let containerBoxDiv = document.createElement("p");
    containerBoxDiv.setAttribute("class", "winner");
    containerDiv.appendChild(containerBoxDiv);
    let containerForWinner = document.getElementsByClassName("winner")[0];
    let h2ForWinner = document.createElement("h2");
    let textForWinner = document.createTextNode(`You chose ${userChoice} & computer chose ${compChoice}. The winner is ${results}!`);
    h2ForWinner.appendChild(textForWinner);
    containerForWinner.appendChild(h2ForWinner);
}
function rpsChoice(choiceNumber){		

    if (choiceNumber == 0){
        return "diamond";

    }
    else if (choiceNumber== 1){
        return "paper";
    }
    else {
        return "scissors";
    }
}

function determineWinner(userChoiceNumber, compChoiceNumber){
    var winner = "";
    if (userChoiceNumber == compChoiceNumber){
       winner = "no one. Tie!"; 
    }

    else if ((userChoiceNumber==1 && compChoiceNumber==0) || (userChoiceNumber==0 && compChoiceNumber==1)) {
        if (userChoiceNumber==1){
            
            winner = "you";
        }
        else
        {
            
            winner = "computer";
        }
    }
    
    else if ((userChoiceNumber==1 && compChoiceNumber==2) || (userChoiceNumber==2 && compChoiceNumber==1)) {
        if (userChoiceNumber==2){
            winner = "you";
        }
        else {
            winner = "computer";
        }
    }
    
    else if ((userChoiceNumber==0 && compChoiceNumber==2) || (userChoiceNumber==2 && compChoiceNumber==0)) {
        if (userChoiceNumber == 0){
            winner = "you";
        }
        else {
            winner = "computer";
        }

    }
    
    return winner;
}

