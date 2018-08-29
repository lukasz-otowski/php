<?php

require_once 'data.php';
require_once 'variables.php';

//calling namespace form data.php
use function Space\Data\text;

//calling class from namespace Space\Variables
use Mind_var\Variables\all_variables;

//calling function from Space\data\text namespace function
text();

//calling function from Space\Variables\all_variables; class namespace
echo all_variables::more();

//creating class container from namespace
$my_vars = new Mind_var\Variables\all_variables;

//calling function from class $my_vars
echo $my_vars->vars_value();

