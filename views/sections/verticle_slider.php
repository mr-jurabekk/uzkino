<div class="verticle-slider">
    <div class="container-fluid">
        <section class="slider">
            <div class="slider-flex position-relative">
                <div class="swiper-button-prev verticle-btn"></div>
                <h4 class="main-title ">Top 10 in United States</h4>
                <div class="slider--col position-relative">
                    <div class="slider-prev btn-verticle"><i class="ri-arrow-up-s-line vertical-aerrow"></i></div>
                    <div class="slider-thumbs" data-swiper="slider-thumbs">
                        <div class="swiper-container " data-swiper="slider-thumbs-inner">
                            <?php if (!empty($topMovies)): ?>
                                <div class="swiper-wrapper top-ten-slider-nav">
                                    <?php foreach ($topMovies as $topMovie): ?>

                                        <?php $img = getImage('movie', $topMovie['id'], $topMovie['image']) ?>
                                        <div class="swiper-slide swiper-bg">
                                            <div class="block-images position-relative ">
                                                <div class="img-box slider--image">
                                                    <img src="<?=$img?>" class="img-fluid" alt="" loading="lazy">
                                                </div>
                                                <div class="block-description">
                                                    <h6 class="iq-title"><a href="show-detail.html"><?=$topMovie['name']?></a></h6>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <span class="text-white"><?=$topMovie['duration']?></span>
                                                    </div>
                                                    <div class="hover-buttons">
                                                        <a href="?route=movie-view&id=<?=$topMovie['id']?>" role="button" class="btn btn-hover"><i
                                                                class="fa fa-play mr-1" aria-hidden="true"></i>
                                                            Hoziroq ko'rish
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="slider-next btn-verticle"><i class="ri-arrow-down-s-line vertical-aerrow"></i></div>
                </div>
                <div class="slider-images" data-swiper="slider-images">
                    <div class="swiper-container " data-swiper="slider-images-inner">
                        <?php if (!empty($topMovies)): ?>
                            <div class="swiper-wrapper ">
                                <?php foreach ($topMovies as $topMovie): ?>

                                    <?php $img = getImage('movie', $topMovie['id'], $topMovie['image']) ?>
                                    <div class="swiper-slide">
                                        <div class="slider--image block-images"><img src="<?=$img?>" loading="lazy" alt="" /></div>
                                        <div class="description">
                                            <div class="block-description">
                                                <h6 class="iq-title"><a href="show-detail.html"><?=$topMovie['name']?></a></h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="text-white"><?=$topMovie['duration']?></span>
                                                </div>
                                                <div class="hover-buttons">
                                                    <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                                            class="fa fa-play mr-1" aria-hidden="true"></i>
                                                        Hoziroq ko'rish
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="swiper-button-prev verticle-btn"></div>
                <div class="swiper-button-next verticle-btn"></div>
            </div>
    </div>
    </section>
</div>
