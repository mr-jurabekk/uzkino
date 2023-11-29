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
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin?r=menu">Menyu</a></li>
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

            <form method="post">
                <input type="hidden" name="id" value="<?=(!empty($showMenu)) ? $showMenu['id'] : ''?>">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <input class="form-control mb-2" type="text" name="title" placeholder="Title" value="<?=(!empty($showMenu['title'])) ? $showMenu['title'] : '' ?>">
                                <input class="form-control" type="text" name="link" placeholder="link" value="<?=(!empty($showMenu['link'])) ? $showMenu['link'] : '' ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <select class="form-control" id="menu_position" name="position">
                                    <option value="">Joylashuvni tanlang</option>
                                    <?php if (!empty(MENU_POSITION)): ?>
                                        <?php foreach (MENU_POSITION as $key => $item):?>
                                            <option <?=(!empty($showMenu) && $showMenu['position'] == $key) ? 'selected' : '' ?> value="<?=$key;?>"><?=$item;?></option>
                                        <?php endforeach;?>
                                    <?php endif; ?>
                                </select>
                                
                                <input class="form-control my-2" type="text" name="order_by" placeholder="Tartibi" value="<?=(!empty($showMenu['order_by'])) ? $showMenu['order_by'] : '' ?>">

                                <select class="form-control" id="menu_parent" name="parent">
                                        <option value="">Ota elementni tanlang</option>
                                    <?php if (!empty($parentMenu)): ?>
                                        <?php foreach ($parentMenu as $menu):?>

                                            <option <?=(!empty($showMenu) && $showMenu['parent'] == $menu['id']) ? 'selected' : '' ?> value="<?=$menu['id'];?>"><?=$menu['title'];?></option>
                                        <?php endforeach;?>
                                    <?php endif; ?>
                                </select>
                                <div class="d-flex my-3">
                                    <div class="form-check mx-3">
                                        <input <?=(!empty($showMenu) && $showMenu['status'] == 1) ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="status" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Faol menu
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input <?=(!empty($showMenu) && $showMenu['status'] == 0) ? 'checked' : '' ?>  class="form-check-input" value="0" type="radio" name="status" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Nofaol menu
                                        </label>
                                    </div>
                                </div>

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


