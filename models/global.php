<?php

use App\Core\App;

if(!empty($_POST['new'])){
    if($_POST['new'] === 'task'){

        App::get('database')->insert('todos', [
            'tittle' => $_POST['tittle'],
            'description' => $_POST['description']
        ]);
    
    }

    if($_POST['new'] === 'done'){

        App::get('database')->update('todos', [
            'completed' => $_POST['completed']
        ], $_POST['update']);
    
    }
}
