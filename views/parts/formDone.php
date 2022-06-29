<?php

use App\Core\Tools;

function formDone($id) {
    $url = Tools::baseURL("");
    $done = "
        <form action='$url' method='post'>
            <input type='hidden' name='new' value='done' />
            <input type='hidden' name='completed' value='1' />
            <input type='hidden' name='update' value='$id' />
            <button type='submit' class='btn btn-sm btn-success'>Done</button>
        </form>
        ";

    return $done;

}

