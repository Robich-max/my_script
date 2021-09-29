<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

$base_url_local = 'http://childrenteeth.localhost';

$active_group_local = 'default';
$query_builder_local = TRUE;

$db_local = array(
	// 'dsn'	=> 'mysql:host=localhost; dbname=elecawfp_u-childrenteeth; charset=utf8;',
	'dsn'	=> '',
	'hostname' => '127.0.0.1',
	'username' => 'root',
	'password' => '123@Arsl',
	'database' => 'elecawfp_u-childrenteeth',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

// Twilio Settings
$config['twilio'] = [
	'twilio_number' => '',
	'sid' => '',
	'token' => '',
];


// Stripe Settings
$config['stripe'] = [
	'publish_key' => '',
	'secret_key' => '',
];