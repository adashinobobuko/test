<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);

function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①

function exam($score1, $score2,$score3)
{
  $total = $score1 + $score2 + $score3;
  if($total > 210){
    echo $total ."点なので合格です";
  }else{
    echo $total . "点なので不合格です";
  }
}

echo (exam(10,60,90));

