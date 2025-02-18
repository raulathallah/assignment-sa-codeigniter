
<div>
    <?php foreach($cart as $row): ?>
        <div class="product-card">
            <h6><?= $row['quantity'] ?>x  Rp.<?= number_format($row['price']) ?> - <?= $row['name'] ?></h6>
            <button onclick="<?php $this->tambahQuantity($row['pid']); ?>">Tambah</button>
            <button>Kurang</button>
        </div>
    <?php endforeach; ?>

    <p class="my-3 fw-bold">TOTAL HARGA: <?= number_format($totalHarga) ?></p>
</div>

