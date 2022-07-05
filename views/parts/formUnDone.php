<?php

use App\Core\Tools;

function formUnDone($id) {
    #$url = Tools::baseURL("");
    $url = 'https://todoapp345.herokuapp.com/index.php';
    $done = "
        <form action='$url' method='post'>
            <input type='hidden' name='new' value='done' />
            <input type='hidden' name='completed' value='0' />
            <input type='hidden' name='update' value='$id' />
            <button type='submit' class='btn btn-sm btn-warning float-end'>Un Done</button>
        </form>
        ";

    return $done;

}
