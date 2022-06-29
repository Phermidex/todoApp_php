<?php 

$dataTasks = App::get('database')->fetchOne('todos', htmlspecialchars($_GET['get']));

require './views/view.php';