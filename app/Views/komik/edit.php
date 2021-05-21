<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"><?php echo $title; ?></h2>
            <form action="/komik/update/<?php echo $komik['id']; ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="slug" value="<?php echo $komik['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?php echo $komik['sampul']; ?>">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10 my-3">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul']; ?>">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10 my-3">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10 my-3">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?php echo $komik['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8 my-3">
                        <input class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul" type="file" id="sampul" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('sampul'); ?>
                        </div>
                        <label for="sampul" class="custom-file-label"><?php echo $komik['sampul']; ?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 my-3">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>