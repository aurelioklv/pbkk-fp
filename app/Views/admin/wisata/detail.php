<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $wisata['image_url'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title display-4"><strong><?= $wisata['name'] ?></strong></h5>
                            <p class="card-text"><b>Price : </b><?= $wisata['price'] ?></p>
                            <p class="card-text"><b>Description : </b><?= $wisata['description'] ?></p>
                            <p class="card-text"><b>Category : </b><?= $wisata['category'] ?></p>

                            <a href="<?= base_url('admin/wisata/edit/') ?><?= $wisata['id'] ?>" class="btn btn-warning">Edit</a>
                            <form action="<?= base_url('admin/wisata/') ?><?= $wisata['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                            </form>
                            <br><br>
                            <!-- <a href="/wisata">Kembali ke daftar buku</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <iframe src="<?= $wisata['location_url'] ?>" width="500" height="500" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>