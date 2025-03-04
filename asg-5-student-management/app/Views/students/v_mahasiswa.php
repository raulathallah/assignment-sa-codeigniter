<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Mahasiswa
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div class="card">
  <div class="card-header fs-4">
    List Mahasiswa
  </div>
  <div class="card-body">
    <a href="/student/create"><button class="btn btn-primary mb-2"><i class="bi bi-plus"></i>Add Mahasiswa</button></a>
    <form action="<?= $baseUrl ?>" method="get" class="form-inline">
      <div class="row mb-4">
        <div class="col-md-5">
          <div class="input-group mr-2">
            <input type="text" class="form-control" name="search"
              value="<?= $params->search ?>" placeholder="Cari code atau nama...">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="submit">Cari</button>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="input-group ml-2">
            <select name="study_program" class="form-control" onchange="this.form.submit()">
              <option value="">All Study Program</option>
              <?php foreach ($study_program as $sp): ?>
                <option value="<?= $sp ?>" <?= ($params->semester == $sp) ? 'selected' : '' ?>><?= ucfirst($sp) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <!-- ROLES -->

        <div class="col-md-2">
          <div class="input-group ml-2">
            <select name="perPage" class="form-control" onchange="this.form.submit()">
              <option value="5" <?= ($params->perPage == 5) ? 'selected' : '' ?>>
                5 per halaman
              </option>
              <option value="10" <?= ($params->perPage == 10) ? 'selected' : '' ?>>
                10 per halaman
              </option>
              <option value="20" <?= ($params->perPage == 20) ? 'selected' : '' ?>>
                20 per halaman
              </option>
            </select>
          </div>
        </div>
        <div class="col-md-1">
          <a href="<?= $params->getResetUrl($baseUrl) ?>" class="btn btn-secondary ml-2">
            Reset
          </a>
        </div>



        <input type="hidden" name="sort" value="<?= $params->sort; ?>">
        <input type="hidden" name="order" value="<?= $params->order; ?>">

    </form>



    <div class="p-3">


      <table class="table table-bordered table-striped">
        <thead>
          <td>NIM</td>
          <td>Name</td>
          <td>Study Program</td>
          <td>GPA</td>
          <td>Current Semester</td>
          <!--  <td>Academic Status</td> -->
          <td>Entry Year</td>
          <td>Action</td>
        </thead>
        <?= $content ?? '' ?>
      </table>
      <?= $pager->links('students', 'custom_pager') ?>
    </div>



  </div>
</div>

<?= $this->endSection() ?>