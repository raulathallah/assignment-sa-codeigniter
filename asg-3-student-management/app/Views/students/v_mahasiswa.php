<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
  Mahasiswa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
    <h3>List Mahasiswa</h3>
    <a href="/mahasiswa/create"><button>Add Mahasiswa</button></a>
    <hr>
    <table class="table">
      <thead>
        <td>Mahasiswa</td>
        <td>Status</td>
        <td>Action</td>
      </thead>
    <?php foreach($mahasiswa as $row): ?>
      <tr>
        <td><?= $row->getFullInfo();?></td>
        <td><?= view_cell('App\Cells\AcademicStatusCell', ['status' => $row->status], 24*60*60,'cache_academic_status') ?></td>
        <td>
          <a href="/mahasiswa/detail/<?= $row->nim; ?>">Detail</a>
          <a href="/mahasiswa/edit/<?= $row->nim; ?>">Edit</a>
          <a href="/mahasiswa/delete/<?= $row->nim; ?>">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</div>
<?= $this->endSection() ?>
