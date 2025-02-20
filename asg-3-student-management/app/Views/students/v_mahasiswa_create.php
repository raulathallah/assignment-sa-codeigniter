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
        <label>Program</label>
        <input 
            type="text"
            id="program"
            name="program"
        />        
        <label>Semester</label>
        <input 
            type="number"
            id="semester"
            name="semester"
        />
        <label>GPA</label>
        <input 
            type="text"
            id="gpa"
            name="gpa"
        />
        <label>Status</label>
        <input 
            type="text"
            id="status"
            name="status"
        />

        <button type="submit">Save</button>
    </form>
</body>
</html>