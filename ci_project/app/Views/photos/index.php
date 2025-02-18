<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
  Photos
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="container">
      
      <?= view_cell('Notification::show', ['type'=>'success', 'message'=>'The user has beed updated.', 'icon'=>'check'] )?>
      <hr>
      <?= view_cell('AlertMessageCell', 'type=warning, message=Failed.') ?>
      <hr>
      <?= view_cell('App\Cells\ProductCardCell', ['productId' => 123]) ?>
      <hr>
      <?= view_cell('App\Cells\CartCell') ?>

        


  </div>
<?= $this->endSection() ?>
