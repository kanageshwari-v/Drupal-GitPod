<?php
 const $sc = words => {
  var alreadyRead = [];
  return words.toLowerCase().replace(/[^a-z\s]/g, "").split(" ").reduce((result, word) => {
    if (alreadyRead.indexOf(word) > -1){
      return result + 1;
    } else {
      alreadyRead.push(word);
      return result + word.length;
    }
  }, 0);
 }
?>