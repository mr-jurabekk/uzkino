<?php require_once "sections/header.php"?>
<?php require_once "sections/sidebar.php"?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Yangi Film</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin?r=movie">Kinolar</a></li>
                        <li class="breadcrumb-item active"><?=$_GET['r'] == 'movie-edit' ? 'Tahrirlash' : "Qo'shish"?></li>
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

            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <input class="form-control mb-2" type="text" name="name" placeholder="Nomi" value="<?=(!empty($movieData) && !empty($movieData['name'])) ? $movieData['name'] : '' ?>" >
                                <input class="form-control my-2" type="text" name="duration" placeholder="Davomiyligi" value="<?=(!empty($movieData['duration'])) ? $movieData['duration'] : '' ?>" required>
                                <textarea class="form-control" name="description" placeholder="Qisqacha tavsif" rows="5"><?=(!empty($movieData)) ? $movieData['description'] : '' ?></textarea>
                                <input class="form-control my-2" type="date" name="date" value="<?=(!empty($movieData['date'])) ? $movieData['date'] : '' ?>" required>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5>Trayler</h5>
                                <?php if (!empty($movieData)): ?>
                                <?php $trailerFile = getFile('movie', $movieData['id'], $movieData['trailer_file'])?>
                                    <a class="btn btn-info w-100 mb-2" href="<?=$trailerFile?>" target="_blank">Treylerni Ko'rish</a>
                                    <br>
                                    <a class="btn btn-danger w-100" href="/admin?r=trailer-delete" target="_blank">Treylerni O'chirish</a>
                                <?php else: ?>
                                    <input class="form-control" type="file" name="trailer_file">
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5>Kino</h5>
                                <?php if (!empty($movieData)): ?>
                                    <?php $movieFile = getFile('movie', $movieData['id'], $movieData['movie_file'])?>
                                    <a class="btn btn-info w-100 mb-2" href="<?=$movieFile?>" target="_blank">Kinoni Ko'rish</a>
                                    <br>
                                    <a class="btn btn-danger w-100" href="/admin?r=movie-delete" target="_blank">Kinoni O'chirish</a>
                                <?php else: ?>
                                    <input class="form-control" type="file" name="movie_file">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php $image = getImage('movie', (!empty($movieData)) ? $movieData['id'] : null, (!empty($movieData)) ? $movieData['image'] : null) ?>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <label class="d-flex">

                                    <img src="<?=$image?>" alt="" class="w-100">
                                    <input type="file" class="preview" name="image">
                                </label>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <select class="form-control" id="menu_position" name="genre">
                                    <option value="">Janrni tanlang</option>
                                    <?php if (!empty($AllGenres)): ?>

                                        <?php foreach ($AllGenres as $key => $item):?>
                                            <option <?=(!empty($movieData) && $movieData['genre'] == $item['name']) ? 'selected' : '' ?> value="<?=$item['name']?>"><?=$item['name'];?></option>
                                        <?php endforeach;?>
                                    <?php endif; ?>
                                </select>

                                <label class="my-2">
                                    Seen Count
                                    <input class="form-control" type="number" min="0" name="seen_count" placeholder="Ko'rishlar soni" value="<?=(!empty($movieData['seen_count'])) ? $movieData['seen_count'] : '' ?>" required>
                                </label>
                                <div class="d-flex justify-content-between">

                                    <label class="my-2">
                                        Upcoming
                                        <input <?=(!empty($movieData) && $movieData['upcoming'] == 1) ? 'checked' : '' ?> class="form-check" type="checkbox"  name="upcoming">
                                    </label>
                                    <label class="my-2">
                                        Top
                                        <input <?=(!empty($movieData) && $movieData['top10'] == 1) ? 'checked' : '' ?> class="form-check" type="checkbox" name="top10">
                                    </label>
                                    <label class="my-2">
                                        Recommend
                                        <input <?=(!empty($movieData) && $movieData['recommand'] == 1) ? 'checked' : '' ?> class="form-check" type="checkbox" name="recommend">
                                    </label>
                                </div>

                                <div class="d-flex my-3">
                                    <div class="form-check mx-3">
                                        <input <?=(!empty($movieData) && $movieData['status'] == 1) ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="status" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Faol kino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input <?=(!empty($showMenu) && $showMenu['status'] == 0) ? 'checked' : '' ?>  class="form-check-input" value="0" type="radio" name="status" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Nofaol kino
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success w-25 mb-5">Saqlash</button>
                </div>
            </form>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php require_once "sections/footer.php"?>


