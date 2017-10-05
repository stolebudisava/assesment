<?php
//input compressor

$inputWord = "aaaabbcc";

$outputWord = "";

$iterator=1;

$firstChar = $inputWord->charAt(0);

for($k=1; ($k < $input->length)); ++$k) {
  if(($input->charAt($k) == $firstChar)) {
    ++$iterator;
  } else {
    $outputWord .= $firstChar .= $iterator;
    $iterator = 1;
    $firstChar = $inputWord->charAt($k);
  }
}
  $outputWord .= $firstChar .= $iterator;
  print($outputWord);
}

?>
