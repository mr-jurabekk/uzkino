<?php require_once "sections/header.php"?>
<?php require_once "sections/sidebar.php"?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Filmlar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Filmlar</li>
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
                        <a class="btn btn-success" href="/admin?r=new-movie">Yangi kino qo'shish</a>
                    </div>
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="text-center bg-gradient-secondary">
                        <tr>
                            <th>#</th>
                            <th>Nomi</th>
                            <th>Janri</th>
                            <th>Rasmi</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($allMovies)): ?>
                            <?php foreach ($allMovies as $key => $movie): ?>
                                <?php $image = getImage('movie', $movie['id'], $movie['image']); ?>
                                <tr>
                                    <td><?=$key + 1;?></td>
                                    <td><?=$movie['name'];?></td>
                                    <td><?=$movie['genre']?></td>
                                    <td><img src="<?= $image ?>" alt="img" style="width: 100px"></td>
                                    <td>
                                        <div>
                                            <a class="btn btn-secondary mr-3" href="/admin?r=movie-edit&id=<?=$movie['id']?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger remove" href="/admin?r=movie-delete&id=<?=$movie['id']?>"><i class="fas fa-trash-alt"></i></a>
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


