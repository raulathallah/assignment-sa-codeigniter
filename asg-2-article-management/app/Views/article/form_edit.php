<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $web_title ?></title>
</head>
<body>
    <h3><?= $title ?></h3>

    <form action="/articles/update/<?= $article->id ?>" method="post" style="display: grid;width: fit-content; gap: 5px">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
        <label>Title</label>
        <input 
            type="text"
            id="title"
            name="title"
            value="<?= $article->title ?>"
            style="padding: 5px;"
        />
        <label>Content</label>
        <textarea id="content" name="content" rows="5" style="padding: 5px;" ><?= $article->content ?></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>