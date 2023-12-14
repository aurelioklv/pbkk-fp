<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col">
            <?php $validationErrors = session('_ci_validation_errors'); ?>
            <form action="<?= base_url('admin/wisata/save') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['name'])) ? 'is-invalid' : ''; ?>" id="inputName" name="name" value="<?= old('name') ?>" autofocus>
                        <?php if (isset($validationErrors['name'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['name'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['description'])) ? 'is-invalid' : ''; ?>" id="inputDescription" name="description" value="<?= old('description') ?>">
                        <?php if (isset($validationErrors['description'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['description'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= (isset($validationErrors['price'])) ? 'is-invalid' : ''; ?>" id="inputPrice" name="price" value="<?= old('price') ?>">
                        <?php if (isset($validationErrors['price'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['price'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['category'])) ? 'is-invalid' : ''; ?>" id="inputCategory" name="category" value="<?= old('category') ?>">
                        <?php if (isset($validationErrors['category'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['category'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputImageUrl" class="col-sm-2 col-form-label">Image URL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['image_url'])) ? 'is-invalid' : ''; ?>" id="inputImageUrl" name="image_url" value="<?= old('image_url') ?>">
                        <?php if (isset($validationErrors['image_url'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['image_url'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputLocationUrl" class="col-sm-2 col-form-label">Location URL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['location_url'])) ? 'is-invalid' : ''; ?>" id="inputLocationUrl" name="location_url" value="<?= old('location_url') ?>">
                        <?php if (isset($validationErrors['location_url'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['location_url'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>