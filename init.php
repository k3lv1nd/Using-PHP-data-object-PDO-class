<?php
require 'config.php';
//get a configuration[db] instance.
$config=config::GetInstance();

$dbconfig=$config->get('db');


//database instance
$db=new PDO('mysql:host=127.0.0.1;dbname=bookstore',
			$dbconfig['user'],
			$dbconfig['password']
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query="SELECT*FROM `book` WHERE ISBN=:ISBN";
//The db::prepare()method instantiates a statement class object taking $query as the argument. 
$statement=$db->prepare($query);
//the statement::bindValue takes the parameter specified in the prepared statement and the value to be assigned to that parameter.
$statement->bindValue('ISBN',4566);
$statement->execute();
$rows=$statement->fetchAll();
var_dump($rows);
?>