<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 header-text">
        <h2>Ayo Dolan <em>Rek</em></h2>
        <p>Temukan keindahan Surabaya! Jelajahi tempat-tempat menarik, landmark ikonik, dan kuliner khas. Rencanakan
          petualanganmu di DolanRek sekarang!</p>
      </div>
    </div>
  </div>
</div>

<div class="search-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form id="search-form" name="gs" method="submit" role="search" action="#">
          <div class="row">
            <div class="col-lg-4">
              <fieldset>
                <label for="contest" class="form-label">Cari Tempat Wisata</label>
                <input type="text" name="contest" class="searchText" placeholder="Tugu Pahlawan" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-4">
              <fieldset>
                <label for="category" class="form-label">Pick Category</label>
                <select name="category" class="form-select" aria-label="Choose a category" id="category" onchange="this.form.click()">
                  <option selected>Choose a category</option>
                  <option type="checkbox" name="Sejarah" value="Sejarah">Sejarah (200 Tempat Wisata)</option>
                  <option value="Alam">Alam (172 Tempat Wisata)</option>
                  <option value="Religi">Religi (92 Tempat Wisata)</option>
                </select>
              </fieldset>
            </div>
            <div class="col-lg-2">
              <fieldset>
                <label for="chooseprice" class="form-label">Harga Price</label>
                <select name="Price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                  <option selected>Choose a price</option>
                  <option value="gratis">Gratis</option>
                  <option value="50">Di bawah 50k</option>
                  <option value="100">50k - 100k</option>
                  <option value="100+">>100k</option>
                </select>
              </fieldset>
            </div>
            <div class="col-lg-2">
              <fieldset>
                <button class="main-button">Cari</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<section class="photos-videos">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center">
          <h6>Wisata di Surabaya</h6>
          <h4>Tempat Wisata <em>Terbaik &amp; Terkeren</em> di Surabaya</h4>
        </div>
      </div>
      <?php foreach ($allWisata as $index => $wisata) : ?>
        <?php
        $colClass = ($index < 2) ? 'col-lg-6' : 'col-lg-4';
        $imageWidth = ($colClass === 'col-lg-6') ? 570 : 370;
        $imageHeight = 370;
        ?>
        <div class="<?= $colClass ?>">
          <div class="item">
            <div class="thumb">
              <img src="<?= ($wisata['image_path'] != null) ? base_url($wisata['image_path']) : $wisata['image_url'] ?>" alt="" width="<?= $imageWidth ?>" height="<?= $imageHeight ?>" style="object-fit: cover;">
              <div class="top-content">
                <h4>
                  <?= $wisata['name'] ?>
                </h4>
                <h6><i class="fa fa-eye"></i> 840 | <i class="fa fa-heart"></i> 160</h6>
              </div>
            </div>
            <div class="down-content">
              <div class="row">
                <div class="col-7">
                  <h2>
                    <?= $wisata['price'] ?>
                  </h2>
                </div>
                <div class="col-5">
                  <h6>Category:
                    <?= $wisata['category'] ?>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>