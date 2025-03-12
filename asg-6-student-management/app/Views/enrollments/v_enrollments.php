<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Enrollments
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
  <div class="card-header fs-4">
    List Enrollments
  </div>
  <div class="card-body">
    <a href="/enrollments/create"><button class="btn btn-primary mb-2"><i class="bi bi-plus"></i>Add Enrollments</button></a>

    <form action="<?= $baseUrl ?>" method="get" class="form-inline">
      <div class="row mb-4">
        <div class="col-md-5">
          <div class="input-group mr-2">
            <input type="text" class="form-control" name="search"
              value="<?= $params->search ?>" placeholder="Cari...">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="submit">Cari</button>
            </div>
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
        <thead class="table-dark">
          <td>ID</td>
          <td>NIM</td>
          <td>Course</td>
          <td>Academic Year</td>
          <td>Semester</td>
          <td>Status</td>
        </thead>
        <tbody>
          <?php foreach ($enrollments as $row) : ?>
            <tr>
              <td><?= $row->id; ?></td>
              <td><?= $row->student_id; ?></td>
              <td><?= $row->course_id; ?></td>
              <!-- <td>
                <?php if ($row->status == 1) : ?>
                  <span class="badge bg-success">Active</span>
                <?php else : ?>
                  <span class="badge bg-danger">Inactive</span>
                <?php endif; ?>
              </td> -->

              <!-- <td>
                <a href="<?= base_url('admin/users/edit/' . $user->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                <form action="<?= base_url('admin/users/delete/' . $user->id); ?>" method="post" class="d-inline" onsubmit="return confirm('Are you sure to delete this user?')">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
                <a href="<?= base_url('admin/users/addToGroup/' . $user->id); ?>" class="btn btn-sm btn-info">Add to Group</a>
              </td> -->
            </tr>

          <?php endforeach; ?>

          <?php if (empty($enrollments)) : ?>
            <tr>
              <td colspan="6" class="text-center">Enrollments not found</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
      <?= $pager->links('enrollments', 'custom_pager') ?>

    </div>
  </div>
</div>
<?= $this->endSection() ?>