<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Update Mahasiswa Form</h3>

    <form action="/mahasiswa/save_update" method="post" style="display: grid;width: fit-content; gap: 5px">
        <label>NIM</label> 
        <input 
            type="text"
            id="nim"
            name="nim"
            autofocus
            value="<?= $mahasiswa->__get('nim') ?>"
        />
        <label>Nama</label>
        <input 
            type="text"
            id="nama"
            name="nama"
            value="<?= $mahasiswa->__get('nama') ?>"
        />
        <label>Jurusan</label>
        <input 
            type="text"
            id="jurusan"
            name="jurusan"
            value="<?= $mahasiswa->__get('jurusan') ?>"
        />

        <button type="submit">Save</button>
    </form>
</body>
</html>