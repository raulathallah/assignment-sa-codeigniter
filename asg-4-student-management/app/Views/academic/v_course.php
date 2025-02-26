<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Courses
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
  <h3>List Course</h3>
  <a href="/course/create"><button>Add Course</button></a>
  <hr>
  <?= $content ?? '' ?>

</div>
<?= $this->endSection() ?>