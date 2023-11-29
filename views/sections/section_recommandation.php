<section id="iq-tvthrillers" class="s-margin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="main-title">Recommended For You</h4>
                    <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="favourite-slider">
            <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <?php if (!empty($recommandMovies)): ?>
                    <ul class="swiper-wrapper p-0 m-0">
                        <?php foreach ($recommandMovies as $movie): ?>
                            <?php $img = getImage('movie', $movie['id'], $movie['image']) ?>
                            <li class="swiper-slide slide-item">
                                <div class="block-images position-relative ">
                                    <div class="img-box">
                                        <img src="<?=$img?>" loading="lazy" class="img-fluid w-100" style="height: 175px; object-fit: cover" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-detail.html"><?=$movie['name']?></a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-white"><?=$movie['duration']?></span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="?route=movie-view&id=<?=$movie['id']?>" role="button" class="btn btn-hover"><i
                                                    class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Hoziroq Ko'rish
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

