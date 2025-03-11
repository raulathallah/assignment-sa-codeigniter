<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php if (logged_in()): ?>
    <p>Welcome, <?= user()->username; ?>!</p>


    <?php if (!empty(user()->getRoles())): ?>
        <?php foreach (user()->getRoles() as $role): ?>
            <p>Role: <span class="fw-bold"><?= $role ?></span></p>
        <?php endforeach; ?>
    <?php endif; ?>
<?php else: ?>
    Home
<?php endif; ?>

<?= $this->endSection() ?>