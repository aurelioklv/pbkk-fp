<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 header-text">
        <h2>Ayo Dolan <em>Rek</em></h2>
        <p>Temukan keindahan Surabaya! Jelajahi tempat-tempat menarik, landmark ikonik, dan kuliner khas. Rencanakan petualanganmu di [Nama Website] sekarang!</p>
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
          <h4>Tempat Wisata <em>Terbaik &amp; Terkeren</em> di [Nama Website]</h4>
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
              <img src="<?= $wisata['image_url'] ?>" alt="" width="<?= $imageWidth ?>" height="<?= $imageHeight ?>" style="object-fit: cover;">
              <div class="top-content">
                <h4><?= $wisata['name'] ?></h4>
                <h6><i class="fa fa-eye"></i> 840 | <i class="fa fa-heart"></i> 160</h6>
              </div>
            </div>
            <div class="down-content">
              <div class="row">
                <div class="col-7">
                  <h2><?= $wisata['price'] ?></h2>
                </div>
                <div class="col-5">
                  <h6>Category: <?= $wisata['category'] ?></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="contest-win">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center">
          <h6>Recently Added Contests by Users</h6>
          <h4>Current <em>Contests</em> to Enter Now &amp; <em>Win</em></h4>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="contest-item">
          <div class="top-content">
            <span class="award">Award Price</span>
            <span class="price">$1,200</span>
          </div>
          <img src="assets/images/contest-01.jpg" alt="">
          <h4>Walk In The Nature Night</h4>
          <div class="info">
            <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>80 Participants</span>
            <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>260 Submissions</span>
          </div>
          <div class="border-button">
            <a href="contest-details.html">Browse Nature Pic Contests</a>
          </div>
          <span class="info">* Client will pay via Online Payments</span>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="contest-item">
          <div class="top-content">
            <span class="award">Award Price</span>
            <span class="price">$2,400</span>
          </div>
          <img src="assets/images/contest-02.jpg" alt="">
          <h4>Walk In The Nature Night</h4>
          <div class="info">
            <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>60 Participants</span>
            <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>212 Submissions</span>
          </div>
          <div class="border-button">
            <a href="contest-details.html">Browse Nature Pic Contests</a>
          </div>
          <span class="info">* Client will pay via Online Payments</span>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="contest-item">
          <div class="top-content">
            <span class="award">Award Price</span>
            <span class="price">$3,600</span>
          </div>
          <img src="assets/images/contest-03.jpg" alt="">
          <h4>Walk In The Nature Night</h4>
          <div class="info">
            <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>55 Participants</span>
            <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>150 Submissions</span>
          </div>
          <div class="border-button">
            <a href="contest-details.html">Browse Nature Pic Contests</a>
          </div>
          <span class="info">* Client will pay via Online Payments</span>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="contest-item">
          <div class="top-content">
            <span class="award">Award Price</span>
            <span class="price">$4,800</span>
          </div>
          <img src="assets/images/contest-04.jpg" alt="">
          <h4>Walk In The Nature Night</h4>
          <div class="info">
            <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>40 Participants</span>
            <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>120 Submissions</span>
          </div>
          <div class="border-button">
            <a href="contest-details.html">Browse Nature Pic Contests</a>
          </div>
          <span class="info">* Client will pay via Online Payments</span>
        </div>
      </div>
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>