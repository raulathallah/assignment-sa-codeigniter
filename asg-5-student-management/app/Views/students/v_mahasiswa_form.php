<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Mahasiswa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
    <h3><?= $type ?> Mahasiswa Form</h3>

    <?php if (session('errors')) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <?php if ($type == "Create"): ?>
        <form action="/student/save_add" method="post" style="display: grid;width: fit-content; gap: 5px">
        <?php else: ?>
            <form action="/student/save_update" method="post" style="display: grid;width: fit-content; gap: 5px">
            <?php endif; ?>

            <?php if ($type == "Create"): ?>
            <?php else: ?>
                <input
                    type="text"
                    id="id"
                    name="id"
                    hidden
                    value="<?= $mahasiswa->id ?>"
                    autofocus />
            <?php endif; ?>
            <label
                <?php if ($type == "Create"): ?>
                <?php else: ?>
                hidden
                <?php endif; ?>>
                NIM (Nomor Induk Mahasiswa)
            </label>
            <input
                type="text"
                id="student_id"
                name="student_id"
                <?php if ($type == "Create"): ?>
                <?php else: ?>
                hidden
                <?php endif; ?>
                value="<?= $mahasiswa->student_id ?>"
                autofocus />
            <label>Nama</label>
            <input
                type="text"
                id="name"
                value="<?= $mahasiswa->name  ?>"
                name="name" />
            <label>Study Program</label>
            <input
                type="text"
                id="study_program"
                value="<?= $mahasiswa->study_program  ?>"
                name="study_program" />
            <label>Current Semester</label>
            <input
                type="number"
                id="current_semester"
                value="<?= $mahasiswa->current_semester  ?>"
                name="current_semester" />

            <label>Academic Status</label>
            <input
                type="text"
                id="academic_status"
                value="<?= $mahasiswa->academic_status ?>"
                name="academic_status" />
            <label>Entry Year</label>
            <input
                type="number"
                id="entry_year"
                value="<?= $mahasiswa->entry_year ?>"
                name="entry_year" />
            <label>GPA</label>
            <input
                type="nummber"
                id="gpa"
                value="<?= $mahasiswa->gpa ?>"
                name="gpa" />

            <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
</div>
<?= $this->endSection() ?>