<?php
for ($i = 1; $i<5; $i++){
  echo $i * 2  . "<br />";
}

$i = 0;

while($i < 21){
  echo $i++ . "<br />";
}

while ($i < 10){
  if ($i === 5){
    break;
  }
  echo $i;
  $i++;
}

while ($count <= 100){
  if($count === 20){
    break;
  }
  if($count % 3 === 0){
    $count++;
    continue;
  }
  echo $count . "<br />";
  $count++;
}