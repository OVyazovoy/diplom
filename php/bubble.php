<?php
$a = file_get_contents('/');

function bubble($array = []){
  for($j = 0; $j < count($a) - 1; $j++) {
  	$i = 0;
    while ($i < count($a)-1)  {
      if( $a[$i] > $a[$i + 1]) {
          $c        =$a[$i];
      	  $a[$i]    =$a[$i + 1];
      	  $a[$i + 1]  =$c;
      }
      ++$i;
    }
  }
  print_r($a);
}
