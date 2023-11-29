<?php require_once 'sections/login_header.php'?>

<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <p class="h1">Kino Dashbord</p>
        </div>
        <div class="card-body">
            <?php if (!empty($errorMessage)): ?>
                <p class="alert alert-danger"><?=$errorMessage; ?></p>
            <?php endif; ?>
            <p class="login-box-msg">Tizimga kirish uchun login va parolni kiriting</p>

            <form  method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Login" name="login" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Eslab qolish
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Kirish</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?php require_once 'sections/footer.php'?>