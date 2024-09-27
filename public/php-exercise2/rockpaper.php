<?php
function rockPaperScissors(p1, p2) {
  if (p1 === p2) {
    return `Draw!`;
  }  if (p1 === 'rock' && p2 === 'scissors') {
    return `Player 1 won!`;
  } else if (p1 === 'paper' && p2 === 'rock') {
    return `Player 1 won!`;
  } else if (p1 === 'scissors' && p2 === 'paper') {
    return `Player 1 won!`;
  } else {
    return `Player 2 won!`;
  }
}
echo rockPaperScissors('rock', 'rock');      // Draw!
echo rockPaperScissors('scissors', 'rock');  // Player 2 won!
echo rockPaperScissors('paper', 'rock');     // Player 1 won!
echo rockPaperScissors('paper', 'paper');    // Draw!

?>