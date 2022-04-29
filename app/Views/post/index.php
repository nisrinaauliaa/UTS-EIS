<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <?php foreach($post as $p): ?>
        <div class="container content" style="width: 30rem;">
            <img src="/img/<?= $p['foto']; ?>" class="card-img-top" alt="foto">
            <div class="card-body">
            <a href="#" class="btn" style="color: red;"><i class='bx bx-heart' style="color: red;"></i></a>
                <p class="card-text"><?= $p['caption']; ?></p>
                <div class="form-group">
                    <input type="text" class="form-control" id="example-email" aria-describedby="emailHelp" 
                        placeholder="Comment" required name="comment">
                </div>
                <button type="submit" class="btn btn-outline-secondary">Sent</button>
            </div>
        </div>
        <?php endforeach ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
