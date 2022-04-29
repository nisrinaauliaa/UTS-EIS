<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col">
        <div class="card text-center">
            <div class="card-header">
               <b>Profile</b>
            </div>
            <div class="card-body">
                <a href=""><img src="/img/foto1.jpg" alt="profile" style="border-radius: 5cm;"></a>
                <h5 class="card-title mt-2">Nama</h5>
                <p class="card-text">bio</p>
                <a href="#" class="btn btn-primary">Follow</a>
                <a href="/post/create" class="btn btn-success">Buat Post Baru</a>
            </div>

            <div class="card-group mt-5">
                <div class="card border-light" style="width: 18rem; padding: 0.15cm">
                    <a href=""><img src="/img/foto2.jpg" style="height: 18rem; width: 18rem" class="card-img-top" alt="..."></a>
                <div class="card-body"></div>
                </div>

                <div class="card border-light" style="width: 18rem; padding: 0.15cm">
                    <a href=""><img src="/img/foto1.jpg" style="height: 18rem; width: 18rem" class="card-img-top" alt="..."></a>
                <div class="card-body"></div>
                </div>

                <div class="card border-light" style="width: 18rem; padding: 0.15cm">
                    <a href=""><img src="/img/foto2.jpg" style="height: 18rem; width: 18rem" class="card-img-top" alt="..."></a>
                <div class="card-body"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>