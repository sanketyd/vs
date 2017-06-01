<?php

// Display errors in production mode
ini_set('display_errors', 0);

// load configuration file
require 'vs/config/config.php';

// let's get started
require APP_ROOT.'/app/kernel.php';
