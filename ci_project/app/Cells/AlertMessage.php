<?php

namespace App\Cells;

class AlertMessage
{
    public function show(array $params)
    {
        return "<div class=\"alert alert-{$params['type']}\">{$params['message']}</div>";
    }

    public function show2($type, $message):string
    {
        return "<div class=\"alert alert-{$type}\">{$message}</div>";
    }
}

?>