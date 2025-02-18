<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AlertMessageCell extends Cell
{
    public $type;
    public $message;

    private $result;

    public function mount(): void
    {
        $this->result = sprintf('%s - %s', $this->type, $this->message);
    }

    public function getResultProperty(): string
    {
        return $this->result;
    }

    public function getTypeProperty()
    {
        return $this->type;
    }
    
    public function getMessageProperty()
    {
        return $this->message;
    }
}

?>