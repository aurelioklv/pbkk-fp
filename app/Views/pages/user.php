<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 header-text">
        <h2>My <em>Profile</em></h2>
      </div>
    </div>
  </div>
</div>

<div class="user-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="avatar">
          <img src="https://picsum.photos/seed/<?= user()->username ?>/200" alt="">
          <h4>
            <?= (user() !== null) ? user()->username : '' ?>
          </h4>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="info">
          <h6>Email</h6>
          <h4><?= (user() !== null) ? user()->email : '' ?></h4>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>