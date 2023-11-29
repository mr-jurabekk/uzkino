<main id="main" class="genres-main">
    <section class="iq-genres-section">
        <div class="container-fluid">
            <div class="iq-main-header d-flex align-items-center justify-content-between mt-5 mt-lg-0">
                <h4 class="main-title">Movie Genres</h4>
            </div>

            <?php if (!empty($getAllgenre)): ?>
            <ul class="row list-inline  mb-0 iq-rtl-direction iq_genres-contents">
                <?php foreach ($getAllgenre as $genre): ?>
                <?php $img = getImage('movie', $genre['id'], $genre['image']) ?>

                <li class="slide-item col-lg-3 col-md-4 col-sm-6">
                    <div class="block-images position-relative  watchlist-first">
                        <div class="img-box">
                            <img  src="<?=$img; ?>"  loading="lazy" class="img-fluid w-100" style="height: 175px; object-fit: cover" alt="">
                        </div>
                        <div class="block-description d-flex justify-content-center flex-column text-center">
                            <h6 class="iq-title"><a href="?route=view-genre&id=<?=$genre['id']?>"><?=$genre['genre']?></a></h6>
                        </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </section>
</main>