<?php require_once "sections/header.php"?>
<?php require_once "sections/sidebar.php"?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tahrirlash</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li>
                        <li class="breadcrumb-item"><a href="/admin?r=users">Foydalanuvchiar</a></li>
                        <li class="breadcrumb-item active">Tahrirlash</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <?php if (!empty($showError)): ?>
                <div class="alert alert-danger"><?=$showError;?></div>
            <?php endif; ?>

            <form method="post" enctype='multipart/form-data'>
                <input type="hidden" name="id" value="<?=(!empty($showSocial)) ? $showSocial['id'] : ''?>">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <input class="form-control mb-2" type="text" name="username" placeholder="Username" value="<?=(!empty($allUsers['class'])) ? $allUsers['class'] : '' ?>">
                                <input class="form-control" type="text" name="password" placeholder="Password" value="<?=(!empty($allUsers['link'])) ? $allUsers['link'] : '' ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <input class="form-control my-1"  type="file"  name="avatar" >
                                <input class="form-control my-1" type="number" name="status" placeholder="Status" value="<?=(!empty($showSocial['order_by'])) ? $showSocial['order_by'] : '' ?>">

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success w-25">Saqlash</button>
                </div>
            </form>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php require_once "sections/footer.php"?>


