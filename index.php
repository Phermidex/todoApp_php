<?php
require 'vendor/autoload.php';

require './core/Request.php';
require './core/Services.php';
require './models/global.php';

use App\Core\{Router, Request};

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());