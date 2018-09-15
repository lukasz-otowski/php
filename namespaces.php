<?php

require_once 'data.php';
require_once 'variables.php';
require_once 'constant.php';

//calling namespace form data.php
use function Mind_lobes\Data\write_lobes;
//calling class from namespace "Mind_var\Variables"
use Mind_var\Variables\all_variables;
//
use Mind_const\Values\CNS;

//calling function from "Mind_lobes\data\text" namespace function
write_lobes();

//calling function from "Mind_var\Variables\all_variables" class namespace
echo all_variables::more();

//creating class container from namespace "Mind_var\Variables\all_variables"
$my_vars = new Mind_var\Variables\all_variables;

//calling function from class $my_vars
echo $my_vars->vars_value();

//calling constant from "Mind_const\Values namespace"
echo "<br>", CNS;