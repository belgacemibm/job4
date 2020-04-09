<?php
// Config File
require_once 'config.php';

function __autoload($class_name)
{
    require 'lib/' . $class_name . '.php';
}
