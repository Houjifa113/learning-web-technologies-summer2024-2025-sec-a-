<?php
for($i= 1; $i<= 3; $i++){
  for ($j= 1; $j<= $i; $j++){
    echo "*";
  }
  echo "<br>";
}

$num = 1;
for ($i = 1; $i <= 3; $i++){
  for ($j = 1; $j <= (4 - $i); $j++){
    echo $num;
  }
  echo "<br>";
}

$char = 'A';
for ($i = 1; $i <= 3; $i++){
  for ($j = 1; $j <= $i; $j++){
    echo $char." ";
    $char++;
  }
  echo "<br>";
}
?>