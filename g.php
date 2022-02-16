<?php
$product = readline("tell me the price of the product ");
$money = readline("how much will you pay ");

$change = $money-$product;
$changeDif = $change * 0.1;

$efeChange = $change -$changeDif;


echo("the change with 10% tip is ".$efeChange);


