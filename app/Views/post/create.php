<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Buat Post Baru</h2>
            <form action="/post/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
            <div class="mb-3">
                <input class="form-control" type="file" name="foto" for="foto" id="foto" autofocus multiple>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="caption" name="caption" rows="3" placeholder="Caption"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>