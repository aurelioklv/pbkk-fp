<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<h1>Halo</h1>
<p>
    Username : <?= user()->username ?><br>
    Email : <?= user()->email ?>
</p>
<?= $this->endSection(); ?>