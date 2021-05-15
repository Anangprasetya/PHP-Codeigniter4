<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"><?php echo $title; ?></h2>
            <form action="/komik/save" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10 my-3">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?php echo old('judul'); ?>">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10 my-3">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo old('penulis'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10 my-3">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo old('penerbit'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10 my-3">
                        <input type="text" class="form-control" id="sampul" name="sampul" value="<?php echo old('sampul'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 my-3">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>