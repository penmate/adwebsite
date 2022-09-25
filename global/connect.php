<?php

$user = 'root';
$pw = '';
$database = 'advdb';

$db = new mysqli('localhost', $user, $pw, $database) or die('Unable to connect to the Host!');
print_r('Successfully connected to the host!');