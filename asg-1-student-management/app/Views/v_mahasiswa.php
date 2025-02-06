<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa</title>
    <style>
      table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 12px;
      }
    </style>
</head>
<body>
    <h3>List Mahasiswa</h3>
    <a href="/mahasiswa/create"><button>Add Mahasiswa</button></a>
    <hr>
    <table>
      <thead>
        <td>Mahasiswa</td>
        <td>Action</td>
      </thead>
    <?php foreach($mahasiswa as $row): ?>
      <tr>
        <td><?= $row->getFullInfo();?></td>
        <td>
          <a href="/mahasiswa/detail/<?= $row->__get('nim'); ?>">Detail</a>
          <a href="/mahasiswa/edit/<?= $row->__get('nim'); ?>">Edit</a>
          <a href="/mahasiswa/delete/<?= $row->__get('nim'); ?>">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>