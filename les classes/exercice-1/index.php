<?php
require 'User.php';

$user1 = new user(1,"admin", "admin");
$user2  = new user(2, "user" , "user");

echo $user1 -> id;
echo $user1 -> username;
echo $user1 -> password;

echo $user2->id;
echo $user2 -> username;
echo $user2 -> password;






?>
