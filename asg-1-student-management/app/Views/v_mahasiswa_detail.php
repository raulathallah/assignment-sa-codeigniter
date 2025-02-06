<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>

    <p>NIM : <?= $mahasiswa->__get('nim')?></p>
    <p>Nama : <?= $mahasiswa->__get('nama')?></p>
    <p>Jurusan : <?= $mahasiswa->__get('jurusan')?></p>
</body>
</html>