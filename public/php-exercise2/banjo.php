<?php

function areYouPlaying(name) {
  if (name[0] === 'R' || name[0] === 'r') {
    return `${name} plays banjo`;
  } else {
    return `${name} does not play banjo`;
  }
}
areYouPlaying('Leo');    // Leo does not play banjo
areYouPlaying('Ralph');  // Ralph plays banjo
?>