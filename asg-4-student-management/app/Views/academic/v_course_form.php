<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
    <h3><?= $type ?> Course Form</h3>

    <?php if (session('errors')) : ?>
        <div class="alert alert-danger w-100">
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <?php if ($type == "Create"): ?>
        <form action="/course/save_add" method="post" style="display: grid;width: fit-content; gap: 5px">
        <?php else: ?>
            <form action="/course/save_update" method="post" style="display: grid;width: fit-content; gap: 5px">
            <?php endif; ?>

            <?php if ($type == "Create"): ?>
            <?php else: ?>
                <input
                    type="text"
                    id="id"
                    name="id"
                    hidden
                    value="<?= $course->id ?>"
                    autofocus />
            <?php endif; ?>
            <label
                <?php if ($type == "Create"): ?>
                <?php else: ?>
                hidden
                <?php endif; ?>>
                Code
            </label>
            <input
                type="text"
                id="code"
                name="code"
                <?php if ($type == "Create"): ?>
                <?php else: ?>
                hidden
                <?php endif; ?>
                value="<?= $course->code ?>"
                autofocus />
            <label>Nama</label>
            <input
                type="text"
                id="name"
                value="<?= $course->name  ?>"
                name="name" />
            <label>Credits</label>
            <input
                type="number"
                id="credits"
                value="<?= $course->credits  ?>"
                name="credits" />
            <label>Semester</label>
            <input
                type="number"
                id="semester"
                value="<?= $course->semester  ?>"
                name="semester" />
            <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
</div>
<?= $this->endSection() ?>