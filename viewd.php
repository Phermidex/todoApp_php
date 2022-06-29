<?php 
$config = require './config/database.php';
require './core/database/Connection.php';
require './core/Tools.php';
require './core/Services.php';
$conn = new Connection($config);

$Services = new Services($conn->start());
$dataTasks = $Services->fetchOne('todos', htmlspecialchars($_GET['get']));

require './views/view.php';