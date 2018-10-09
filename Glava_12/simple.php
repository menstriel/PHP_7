<?php ## Простейший генератор
 function simple($from = 0, $to = 100)
 {
 for($i = $from; $i < $to; $i++) {
 echo "znachenie = $i<br />";
 yield $i;
 }
 } 
 foreach(simple() as $val) {
 echo "kvadrat = ".($val * $val)."<br />";
 if ($val >= 5) break;
 }
?> 