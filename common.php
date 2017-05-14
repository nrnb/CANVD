<?php
/*
	Contains files common to all pages and php files, such as database connections and global variables / functions.
*/

ini_set('display_errors','Off');
ini_set('error_reporting',0);


$settings = array(
					'db_host' 		=> 'localhost',
					'db_name' 		=> 'dvimpact',
					'db_user' 		=> 'root',
					'db_password' 	=> '',
);

require($root_path . 'PDOext.class.php');
// Connect to our database
$dbh = new PDOext('mysql:host=' . $settings['db_host'] . ';dbname=' . $settings['db_name'], $settings['db_user'], $settings['db_password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);



?>