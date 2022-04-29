<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Login to continue</h5>

            <form action="/login" method="post">

                <div class="form-group">
                    <label for="example-email">Email</label>
                    <input type="text" class="form-control" id="example-email" aria-describedby="emailHelp" 
                        placeholder="Enter email" required name="email">
                </div>

                <div class="form-group">
                    <label for="example-password">Password</label>
                    <input type="password" class="form-control" id="example-password" aria-describedby="emailHelp" 
                        placeholder="Enter password" required name="password">
                </div>
                <small class="d-block mt-2">Belum punya akun? <a href="/auth/register">Register</a></small>
                <button type="submit" class="btn btn-primary mt-5">Login</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>