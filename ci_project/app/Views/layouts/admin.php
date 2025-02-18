<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <div class="container d-flex">
        <div class="sidebar">
            <?= view_cell('App\Cells\SidebarCell') ?>
        </div>

        <div class="main-content">
            <?= $this->renderSection('admin_content') ?>
        </div>
    </div>  

<?= $this->endSection() ?>