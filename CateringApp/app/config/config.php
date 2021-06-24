<?php
session_start();
// DB Params

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'catering');

// App Root
//echo dirname(dirname(__FILE__));
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/catering/CateringApp/');
// Site Name
define('SITENAME', 'MIU Blog MVC');

//public pages path
define('VIEWS_PATH', '../app/views/');
