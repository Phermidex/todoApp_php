<?php

use App\Core\{App, QueryBuilder};

App::bind('config', require './config/database.php');

App::bind('database', new QueryBuilder(
    Connection::start(App::get('config')['database'])
));


