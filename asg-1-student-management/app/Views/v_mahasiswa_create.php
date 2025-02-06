<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Add Mahasiswa Form</h3>

    <form action="/mahasiswa/save_add" method="post" style="display: grid;width: fit-content; gap: 5px">
        <label>NIM (Nomor Induk Mahasiswa)</label> 
        <input 
            type="number"
            id="nim"
            name="nim"
            autofocus
        />
        <label>Nama</label>
        <input 
            type="text"
            id="nama"
            name="nama"
        />
        <label>Jurusan</label>
        <input 
            type="text"
            id="jurusan"
            name="jurusan"
        />

        <button type="submit">Save</button>
    </form>
</body>
</html>