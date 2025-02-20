<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
  Courses
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
    <h3>List Course</h3>
    <hr>
    <?= $table ?? '' ?>

</div>
<?= $this->endSection() ?>
