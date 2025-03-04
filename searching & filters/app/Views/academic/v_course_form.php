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
    <form action="/course/<?= $action; ?>" id="formData" method="post" style="display: grid;width: fit-content; gap: 5px" novalidate>
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

        <div class="form-element d-grid gap-2">
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
                data-pristine-required
                data-pristine-required-message="Code harus diisi (client)"
                data-pristine-minlength="3"
                data-pristine-minlength-message="Code minimal 3 karakter (client)"
                autofocus />
            <?php if (session('errors')) : ?>
                <div class="text-danger">
                    <?= session('errors')['code'] ?>
                </div>
            <?php endif ?>
        </div>

        <div class="form-element d-grid gap-2">
            <label>Nama</label>
            <input
                type="text"
                id="name"
                value="<?= $course->name  ?>"
                name="name"
                data-pristine-required
                data-pristine-required-message="Name harus diisi (client)"
                data-pristine-minlength="3"
                data-pristine-minlength-message="Name minimal 3 karakter (client)" />
            <?php if (session('errors')) : ?>
                <div class="text-danger">
                    <?= session('errors')['code'] ?>
                </div>
            <?php endif ?>
        </div>

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

<?= $this->section('scripts') ?>
<script>
    let pristine;
    window.onload = function() {
        let form = document.getElementById("formData");
        var pristine = new Pristine(form, {
            classTo: 'form-element',
            errorClass: 'is-invalid',
            successClass: 'is-valid',
            errorTextParent: 'form-element',
            errorTextTag: 'div',
            errorTextClass: 'text-danger'
        });

        form.addEventListener('submit', function(e) {
            var valid = pristine.validate();
            if (!valid) {
                e.preventDefault();
            }
        });

    };
</script>
<?= $this->endSection() ?>