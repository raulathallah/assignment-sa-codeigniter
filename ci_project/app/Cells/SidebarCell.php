<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class SidebarCell extends Cell
{
    protected $menu = [];

    public function mount()
    {
        $this->menu = [
            ['title'=>'Dashboard', 'url'=> '/dashboard'],
            ['title'=>'Photos', 'url'=> '/photos'],
        ];
    }

    public function getMenuProperty()
    {
        return $this->menu;
    }

    public function getActiveMenu()
    {
        $currentUrl = current_url();
        return $currentUrl;
    }
}
