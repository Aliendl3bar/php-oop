<?php
require 'Database.php';
require 'User.php';

// connection
$database = new Database();
$db = $database->getConnection();

// Create user
$user = new User($db);
$user->name = "houda";
$user->email = "houda@gmail.com";
$user->create();

//read users
$list = $user->read();
foreach ($list as $u) {
    echo $u['NAME'] . " - " . $u['email'] . "<br>";
}
