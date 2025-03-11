<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php if (logged_in()): ?>
    <p>Welcome, <?= user()->username; ?>!</p>

    <?php if (!empty(user()->getRoles())): ?>
        <span>Roles</span>
        <ul>
            <?php foreach (user()->getRoles() as $role): ?>
                <li><span class="fw-bold"><?= $role ?></span></li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>

<?php else: ?>
    Home
<?php endif; ?>

<?= $this->endSection() ?>