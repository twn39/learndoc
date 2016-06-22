<?php

$f = 0.58;
var_dump(intval($f * 100)); //为啥输出57
echo '<br>';
var_dump(intval(bcmul($f, 100))); 
