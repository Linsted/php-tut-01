<?php 
error_reporting(-1);

// 1st method to define constant variable.
define("CONST_1", "value 1");

echo CONST_1;

// 2nd method to define constant variable.
const CONST_2 = 'value 2';

var_dump(CONST_2);

const CONST_2 = 'new value';

// ERR- const is already defined
var_dump(CONST_2);


