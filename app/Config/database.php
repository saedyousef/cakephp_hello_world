<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '123456',
		'database' => 'cakephp_db',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}

/*CREATE TABLE posts (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, title VARCHAR(50), body TEXT, created DATETIME DEFAULT NULL, modified DATETIME DEFAULT NULL);*/


/*CREATE TABLE users (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), password VARCHAR(255), role VARCHAR(20), created DATETIME DEFAULT NULL, modified DATETIME DEFAULT NULL);*/


