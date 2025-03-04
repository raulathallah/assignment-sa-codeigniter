<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
  Mahasiswa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
    <h3>List Mahasiswa</h3>
    <a href="/mahasiswa/create"><button>Add Mahasiswa</button></a>
    <hr>

    <?= $content ?? '' ?>

</div>
<?= $this->endSection() ?>
