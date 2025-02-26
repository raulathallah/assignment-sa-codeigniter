<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class LatestGradesCell extends Cell
{
    protected $dataCourses;

    public function mount($dataCourses)
    {
        $this->dataCourses = $dataCourses;
    }

    public function getDataCoursesProperty()
    {
        $table = new \CodeIgniter\View\Table();

        $dataSorted = $this->dataCourses;
        uasort($dataSorted, function ($a, $b) {
            return strcmp($a['grades'], $b['grades']);
        });
        $dataFiltered = array_slice($dataSorted, 0, 5);

        $table->addRow(['ID', 'Course', 'Joined Date', 'Grades']);
        foreach ($dataFiltered as $row) {
            $table->addRow($row);
        }

        return $table->generate();
    }
}
