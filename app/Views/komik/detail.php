<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 650px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?php echo $komik['sampul']; ?>" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $komik['judul']; ?></h5>
                            <p class="card-text"><b>Penulis : <?php echo $komik['penulis']; ?></b></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : <?php echo $komik['penerbit']; ?></b></small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="/komik">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>