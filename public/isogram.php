<?php
function isIsogram(str) {
  str = str.toLowerCase();
  
  for (let i = 0; i < str.length - 1; i++) {
    for (let j = i + 1; j < str.length; j++) {
      if (str[i] === str[j]) {
        return false;
      }
    }
  }
  
  return true;
}

isIsogram('');           // true
isIsogram('abc');        // true
isIsogram('aab');        // false
isIsogram('aba');        // false
isIsogram('Aba');        // false
isIsogram('Isogram');    // true
isIsogram('isIsogram');  // false
isIsogram('Codewars');   // true
?>