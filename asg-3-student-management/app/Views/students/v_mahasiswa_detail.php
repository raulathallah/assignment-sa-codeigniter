<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
  Mahasiswa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div>
        <h3>Detail Mahasiswa</h3>

        <p>NIM : <?= $mahasiswa->__get('nim')?></p>
        <p>Nama : <?= $mahasiswa->__get('nama')?></p>
        <p>Jurusan : <?= $mahasiswa->__get('jurusan')?></p>


        <h3>Courses</h3>
        <?= view_cell('App\Cells\LatestGradesCell', ['dataCourses' => $mahasiswa->courses]) ?>

    </div>
<?= $this->endSection() ?>