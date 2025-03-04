<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Photos
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">


    <h3>Add Photos Form</h3>

    <form id="formData" action="/photos/create" method="post" style="display: grid;width: fit-content; gap: 5px" novalidate>
        <label>Nama</label>
        <input
            type="text"
            id="nama"
            name="nama"
            data-pristine-required
            data-pristine-required-message="Nama harus diisi"
            data-pristine-minlength="3"
            data-pristine-minlength-message="Nama minimal 3 karakter" />
        <label>Number</label>
        <input
            type="number"
            id="number"
            name="number" />
        <button type="submit">Save</button>
    </form>



</div>
<?= $this->endSection() ?>