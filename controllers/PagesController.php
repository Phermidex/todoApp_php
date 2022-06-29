<?php

namespace App\Controllers;

use App\Core\App;

class PagesController 

{

    public function index() {

        $dataTasks = App::get('database')->fetchAll('todos');

        require 'views/index.php';

    }


    public function view() {

        $dataTasks = App::get('database')->fetchOne('todos', htmlspecialchars($_GET['get']));

        require 'views/view.php';

    }

}