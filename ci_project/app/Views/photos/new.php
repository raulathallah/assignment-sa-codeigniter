<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photos</title>
</head>
<body>
    <h3>Add Photos Form</h3>

    <form action="/photos/create" method="post" style="display: grid;width: fit-content; gap: 5px">
        <label>Nama</label>
        <input 
            type="text"
            id="nama"
            name="nama"
        />
        <label>Number</label>
        <input 
            type="number"
            id="number"
            name="number"
        />
        <button type="submit">Save</button>
    </form>
</body>
</html>