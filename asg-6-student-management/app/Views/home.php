<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php if (logged_in()): ?>
    Welcome, <?= user()->username; ?>!
<?php else: ?>
    Home
<?php endif; ?>

<?= $this->endSection() ?>