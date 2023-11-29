<?php require_once 'sections/header.php';?>
<div class="iq-breadcrumb-one  iq-bg-over " style="background-image: url(<?=ASSETS?>images/video/bg.jpg);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h2 class="title">Barchasini Ko'rish</h2>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                        <li class="breadcrumb-item active">Kino</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<main id="main" class="site-main watchlist-contens">
    <div class="container-fluid">
        <div class="iq-main-header d-flex align-items-center justify-content-between mt-5 mt-lg-0">
            <h4 class="main-title">Movie Genres</h4>
        </div>
        <?php if (!empty($getAllgenre)):?>
        <ul class=" row list-inline  mb-0 iq-rtl-direction ">
            <?php foreach ($getAllgenre as $item):?>
            <li class="slide-item col-lg-3 col-md-4 col-6 mb-4">
                <div class="block-images position-relative  watchlist-first">
                    <div class="img-box">
                        <?php $img = getImage('movie', $item['id'], $item['image']) ?>
                        <img src="<?=$img?>" class="img-fluid" alt="" loading="lazy">
                    </div>
                    <div class="block-description">
                        <h6 class="iq-title text-left"><a href="genres-detail.html"><?=$item['name']?></a></h6>
                        <div class="movie-time d-flex align-items-center my-2">
                            <span class="text-white"><?=$item['duration']?></span>
                        </div>
                        <div class="hover-buttons text-left">
                            <a href="?route=movie-view&id=<?=$item['id']?>" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                Hoziroq Ko'rish</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</main>

<?php require_once 'sections/footer.php'?>
