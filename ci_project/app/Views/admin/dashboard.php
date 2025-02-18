<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>
    <?= $pageTitle ?>
<?= $this->endSection() ?>

<?= $this->section('admin_content') ?>

    <h1>Dashboard</h1>

    <div class="dashboard-widgets">
        <!-- Dashboard content -->
         !!CONTENT!!
    </div>

<?= $this->endSection() ?>