<?php

namespace App\Cells;

class Notification
{
    public function show($type, $message, $icon = NULL)
    {
        return 
        "<div class=\"alert alert-{$type} d-flex align-items-center\">
            <i class=\"bi bi-{$icon}-circle-fill \"></i>
            <div class=\"mx-2\">
                {$message}
            </div>
        </div>";
    }
}

?>