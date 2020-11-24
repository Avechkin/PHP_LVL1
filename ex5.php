<?php
$a = 4;
$b = 5;
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;
echo $b;