<?php

$dataTasks = App::get('database')->fetchAll('todos');

require './views/index.php';