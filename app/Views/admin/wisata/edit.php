<?= $this->extend('/admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row-lg">
        <?php $validationErrors = session('_ci_validation_errors'); ?>
        <?php d($validationErrors) ?>
        <form action="<?= base_url('admin/wisata/update/') ?><?= $wisata['id'] ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $wisata['id'] ?>">
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= (isset($validationErrors['name'])) ? 'is-invalid' : ''; ?>" id="inputName" name="name" value="<?= (old('name')) ? old('name') : $wisata['name'] ?>" autofocus>
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
                    <input type="text" class="form-control <?= (isset($validationErrors['description'])) ? 'is-invalid' : ''; ?>" id="inputDescription" name="description" value="<?= (old('description')) ? old('description') : $wisata['description'] ?>">
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
                    <input type="number" class="form-control <?= (isset($validationErrors['price'])) ? 'is-invalid' : ''; ?>" id="inputPrice" name="price" value="<?= (old('price')) ? old('price') : $wisata['price'] ?>">
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
                    <input type="text" class="form-control <?= (isset($validationErrors['category'])) ? 'is-invalid' : ''; ?>" id="inputCategory" name="category" value="<?= (old('category')) ? old('category') : $wisata['category'] ?>">
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
                    <input type="text" class="form-control <?= (isset($validationErrors['image_url'])) ? 'is-invalid' : ''; ?>" id="inputImageUrl" name="image_url" value="<?= (old('image_url')) ? old('image_url') : $wisata['image_url'] ?>">
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
                    <input type="text" class="form-control <?= (isset($validationErrors['location_url'])) ? 'is-invalid' : ''; ?>" id="inputLocationUrl" name="location_url" value="<?= (old('location_url')) ? old('location_url') : $wisata['location_url'] ?>">
                    <?php if (isset($validationErrors['location_url'])) : ?>
                        <div class="invalid-feedback">
                            <?= $validationErrors['location_url'] ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="javascript:history.back()" class="btn btn-outline-primary">Back</a>
        </form>
    </div>

</div>
<?php $this->endSection(); ?>