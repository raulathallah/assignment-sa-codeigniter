<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $web_title ?></title>
</head>
<body>
    <h3><?= $title ?></h3>

    <form action="/articles/create" method="post" style="display: grid;width: fit-content; gap: 5px">
        <label>Title</label>
        <input 
            type="text"
            id="title"
            name="title"
            style="padding: 5px;"
        />
        <label>Content</label>
        <textarea id="content" name="content" rows="5" style="padding: 5px;"></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>