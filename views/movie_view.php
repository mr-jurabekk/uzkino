<?php require_once 'sections/header.php'; ?>

<section class="iq-main-slider site-video">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-0">
                    <?php $movies = getFile('movie', $movieData['id'], $movieData['trailer_file']);?>

                    <video id="my-video" class="video-js vjs-big-play-centered w-100" controls preload="auto">
                        <source src="<?=$movies;?>" type="video/mp4" />
                        <source src="MY_VIDEO.html" type="video/webm" />
                        </p>
                    </video>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Banner End -->
<!-- MainContent -->
<div class="main-content movi ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-info mt-4 pt-0 pb-4">
                    <div class="row">
                        <div class="col-md-9 col-12  mb-auto">
                            <div class="d-md-flex">
                                <h3 class="trending-text big-title text-uppercase mt-0 fadeInLeft animated"
                                    data-animation-in="fadeInLeft" data-delay-in="0.6"
                                    style="opacity: 1; animation-delay: 0.6s"><?= $movieData['name'];?>
                                </h3>
                                <div class="slider-ratting d-flex align-items-center ml-md-3 ml-0">
                                    <ul
                                        class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                                    </ul>
                                    <span class="text-white ml-2"><?= $movieData['rating']?></span>
                                </div>
                            </div>
                            <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                                <li class="trending-list"><a class="text-primary title"
                                                             href="tags/thriller.html"><?= $movieData['genre'];?></a></li>
                            </ul>
                            <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                <span class="badge badge-secondary font-size-16">G</span>
                                <span class="ml-3 font-Weight-500 genres-info"><?= $movieData['duration'];?></span>
                                <span class="trending-year trending-year-list font-Weight-500 genres-info"><?= $movieData['date'];?>
                                 </span>
                                <span
                                    class="trending-year trending-year-list single-view-count font-Weight-500 genres-info"><i
                                        class="fa fa-eye"></i> <?= $movieData['seen_count'];?></span>
                            </div>
                        </div>
                        <?php $movieTrailer = getFile('movie', $movieData['id'], $movieData['trailer_file']);?>
                        <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
                            <a href="<?=$movieTrailer?>"
                               class="video-open playbtn block-images position-relative playbtn_thumbnail">
                                <img width="1920" height="1080" src="<?=$movieImage;?>"
                                     class="attachment-medium-large size-medium-large wp-post-image" alt="" loading="lazy"
                                     sizes="(min-width: 960px) 75vw, 100vw" />
                                <span class="content btn btn-transparant iq-button">
                              <i class="fa fa-play mr-2"></i>
                              <span>Trailer Link</span>
                           </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="streamit-content-details trending-info g-border iq-rtl-direction">
                    <ul class="trending-pills-header d-flex nav nav-pills align-items-center text-center  mb-5 justify-content-center"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="pill" href="#dectripton-1" role="tab"
                               aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#reviw-1" role="tab" aria-selected="false">Rate
                                &amp; Review</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="dectripton-1" class="tab-pane fade active show" role="tabpanel">
                            <div class="description-content">
                                <p><?= $movieData['description']?></p>
                            </div>
                        </div>
                        <div id="reviw-1" class="tab-pane fade" role="tabpanel">
                            <div id="reviews" class="streamit-reviews">
                                <div id="comments" class="comments-area validate-form">
                                    <p class="masvideos-noreviews mt-3">
                                        There are no reviews yet.
                                    </p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title mt-0">
                                                Be the first to review “Pirates of Sea”
                                            </h3>
                                            <form class="comment-form">
                                                <p class="comment-notes">
                                                    <span id="email-notes">Your email address will not be published.</span>
                                                    <span class="required-field-message" aria-hidden="true">Required fields are
                                             marked
                                             <span class="required" aria-hidden="true">*</span></span>
                                                </p>
                                                <div class="comment-form-rating">
                                                    <label for="rating">Your rating</label>
                                                    <div class="star ml-3">
                                                        <span><i class="ri-star-line"></i></span>
                                                        <span><i class="ri-star-line"></i></span>
                                                        <span><i class="ri-star-line"></i></span>
                                                        <span><i class="ri-star-line"></i></span>
                                                        <span><i class="ri-star-line"></i></span>
                                                    </div>
                                                </div>
                                                <p class="comment-form-comment p-0 mb-3 mt-0">
                                                    <label for="comment">Your review&nbsp;<span
                                                            class="required">*</span></label><textarea id="comment" name="comment"
                                                                                                       cols="45" rows="8" required=""></textarea>
                                                </p>
                                                <p class="comment-form-author mt-3 pr-lg-3 pr-0">
                                                    <label for="author">Name&nbsp;<span class="required">*</span></label>
                                                    <input id="author" name="author" type="text" value="" size="30" required="" />
                                                </p>
                                                <p class="comment-form-email mt-3 pl-lg-3 pl-0">
                                                    <label for="email">Email&nbsp;<span class="required">*</span></label>
                                                    <input id="email" name="email" type="email" value="" size="30" required="" />
                                                </p>
                                                <p class="comment-form-cookies-consent">
                                                    <input id="coment-check" name="coment-check" type="checkbox" value="yes" />
                                                    <label for="coment-check">Save my name, email, and website in this browser for
                                                        the next time I comment.</label>
                                                </p>
                                                <p class="form-submit">
                                                    <button name="submit" type="submit" id="submit"
                                                            class="btn btn-hover iq-button" value="Submit">
                                                        <span><i class="ri-play-fill"></i>Submit</span>
                                                    </button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once 'sections/footer.php'; ?>