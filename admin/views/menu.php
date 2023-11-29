<?php require_once "sections/header.php"?>
<?php require_once "sections/sidebar.php"?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menyu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Menyu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 text-right">
                        <a class="btn btn-success" href="/admin?r=new-menu">Yangi menyu qo'shish</a>
                    </div>
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="text-center bg-gradient-secondary">
                            <tr>
                                <th>#</th>
                                <th>Sarlavha</th>
                                <th>Manzil (link)</th>
                                <th>Pozitsiya</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($AllMenus)): ?>
                                <?php foreach ($AllMenus as $key => $menu): ?>
                                    <tr>
                                        <td><?=$key + 1;?></td>
                                        <td><?=$menu['title'];?></td>
                                        <td><?=$menu['link']?></td>
                                        <td><?=$menu['position']?></td>
                                        <td>
                                            <div>
                                                <a class="btn btn-secondary mr-3" href="/admin?r=menu-edit&id=<?=$menu['id']?>"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger remove" href="/admin?r=menu-delete&id=<?=$menu['id']?>"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php require_once "sections/footer.php"?>


