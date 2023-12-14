<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <a href="/admin/wisata/add" class="btn btn-primary mt-3 mb-3">Add Wisata</a>
    <div class="row">
        <div class="col-lg">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allWisata as $wisata) : ?>
                        <tr>
                            <th scope="row"><?= $wisata['id'] ?></th>
                            <td><img src="<?= $wisata['image_url'] ?>" alt="<?= $wisata['name'] ?>" class="sampul" width="100" height="100" style="object-fit: cover;"></td>
                            <td><?= $wisata['name'] ?></td>
                            <td><?= $wisata['price'] ?></td>
                            <td><?= $wisata['category'] ?></td>
                            <td><a href="<?= base_url('admin/wisata/') ?><?= $wisata['id'] ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>