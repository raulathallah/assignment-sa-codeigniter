<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Courses
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
  <h3>List Course</h3>
  <a href="/course/create"><button>Add Course</button></a>
  <hr>
  <form action="<?= $baseUrl ?>" method="get" class="form-inline">
    <div class="row mb-4">
      <div class="col-md-5">
        <div class="input-group mr-2">
          <input type="text" class="form-control" name="search"
            value="<?= $params->search ?>" placeholder="Cari code atau nama...">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </div>

      <!-- ROLES -->
      <!-- ROLES -->
      <div class="col-md-2">
        <div class="input-group ml-2">
          <select name="perPage" class="form-control" onchange="this.form.submit()">
            <option value="10" <?= ($params->perPage == 10) ? 'selected' : '' ?>>
              10 per halaman
            </option>
            <option value="25" <?= ($params->perPage == 25) ? 'selected' : '' ?>>
              25 per halaman
            </option>
            <option value="50" <?= ($params->perPage == 50) ? 'selected' : '' ?>>
              50 per halaman
            </option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <a href="<?= $params->getResetUrl($baseUrl) ?>" class="btn btn-secondary ml-2">
          Reset
        </a>
      </div>
  </form>


  <?= $content ?? '' ?>
  <?= $pager->links('courses', 'custom_pager') ?>
</div>
<?= $this->endSection() ?>