<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 header-text">

        <h2>Categories for Your <em>Surabaya Vacation</em></h2>
        <p>Unlock the best of Surabaya with our curated selection of categories, designed to enhance your vacation
          experience. Delve into the charm and beauty of Surabaya with our carefully crafted recommendations, ensuring
          an unforgettable journey through the city's diverse offerings. </p>
      </div>
    </div>
  </div>
</div>

<div class="top-categories">
  <div class="container">
    <div class="row">
      <div class="col-lg col-sm-4">
        <div class="item">
          <div class="icon">
            <img src="assets/images/icon-01.png" alt="">
          </div>
          <h4>Sejarah</h4>
          <span>Available Contests</span>
          <span class="counter">128</span>
        </div>
      </div>
      <div class="col-lg col-sm-4">
        <div class="item">
          <div class="icon">
            <img src="assets/images/icon-02.png" alt="">
          </div>
          <h4>Alam</h4>
          <span>Available Contests</span>
          <span class="counter">224</span>
        </div>
      </div>
      <div class="col-lg col-sm-4">
        <div class="item">
          <div class="icon">
            <img src="assets/images/icon-03.png" alt="">
          </div>
          <h4>Religi</h4>
          <span>Available Contests</span>
          <span class="counter">145</span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?= $this->endSection(); ?>