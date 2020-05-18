function game(elem){
    var userChoice = elem.id;

    function getComputerChoice(){
    const randomNumber = Math.floor(Math.random() * 3);
    switch (randomNumber){
      case 0:
        return 'rock';
      case 1:
        return 'paper';
      case 2:
        return 'scissors';    
    }
  };
  function determineWinner(userChoice, ComputerChoice){ 
    if (userChoice === computerChoice){
        alert('The game is a tie');
      return 'The game is a tie';
    }
    else if (userChoice === "bomb"){
        alert('You win, no matter what!');
      return "You win, no matter what!";
    }
    else{
      if (userChoice === "rock"){
        if(computerChoice === "paper"){
            alert("The computer won!");
          return "The computer won!";
        }
        else{
            alert("You won!");
          return "You won!";
        }
      }
      else if (userChoice === "paper"){
        if(computerChoice === "scissors"){
            alert("The computer won!");
          return "The computer won!";
        }
        else{
            alert("You won!");
          return "You won!";
        }
      }
          else if (userChoice === "scissors"){
        if(computerChoice === "rock"){
            alert("The computer won!");
          return "The computer won!";
        }
        else{
            alert("You won!");
          return "You won!";
        }
      }
    }
  }; 
//   const playGame = () => {
//     const userChoice = getUserChoice("bomb");
//     const computerChoice = getComputerChoice();
//     console.log('You threw: ' + userChoice);
//     console.log('The computer threw: ' + computerChoice);
//     console.log(determineWinner(userChoice, computerChoice));
//   };
//   playGame();
}