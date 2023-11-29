<?php require_once 'sections/header.php';?>
<div class="iq-breadcrumb-one  iq-bg-over " style="background-image: url(<?=ASSETS?>images/about-us/01.jpg);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h2 class="title">Yangiliklar</h2>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                        <li class="breadcrumb-item active">Yangiliklar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <?php if (!empty($news)): ?>
            <div class="col-lg-8 col-sm-12">
                <?php foreach ($news as $category): ?>
                <article>
                    <div class="iq-blog-box">
                        <div class="iq-blog-image">
                            <a href="?route=blog-view&id=<?=$category['id']?>">

                                <?php $newsImage = getImage('movie', $category['id'], $category['image']); ?>
                                <img width="1920" height="1080" src="<?=$newsImage?>" alt="">
                            </a>
                        </div>
                        <div class="iq-blog-detail">
                            <div class="iq-blog-meta">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-eye mr-1" aria-hidden="true"></i><?=$category['seen_count']; ?>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                                        <span class="screen-reader-text">Yuklangan:</span>
                                        <a href="#" rel="bookmark">
                                            <time datetime="2019-02-02T12:46:15+00:00"><?=$category['created_date']; ?></time>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-title">
                                <h3 class="entry-title">
                                    <a href="?route=blog-view&id=<?=$category['id']?>">
                                        <?=$category['title']; ?></a>
                                </h3>
                            </div>
                            <div class="blog-content">
                                <p><?=$category['anons']; ?></p>
                            </div>
                            <div class="blog-button">
                                <a class="button-link" href="?route=blog-view&id=<?=$category['id']?>">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <ul class="iq-blogcat">
                                <li class="iq-tag-title"><i class="fa fa-film" aria-hidden="true"></i> Categories:</li>
                                <li><a href="?route=blog-view&id=<?=$category['id']?>"><?=$category['genre']; ?></a></li>
                            </ul>

                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="col-lg-4 col-sm-12">
                <div class="widget-area">
                    <div id="search-2" class="widget widget_search">
                        <form method="get" class="search-form" action="#" autocomplete="off">
                            <label>
                                <span class="input-group screen-reader-text">Search for:</span>
                            </label>
                            <input type="search" class="search-field search__input" placeholder="Izlash" value="" name="s">
                            <button type="submit" class="search-submit">
                                <i class="ri-search-line"></i>
                                <span class="screen-reader-text">Izlash</span>
                            </button>
                        </form>
                    </div>
                    <div class="iq-widget-menu widget">
                        <h5 class="widget-title">Dolzarb Yangiliklar</h5>
                        <div class="list-inline iq-widget-menu">
                            <ul class="iq-post">
                                <li>
                                    <div class="post-img">
                                        <div class="post-img-holder">
                                            <a href="#" style="background-image: url('<?=ASSETS?>images/blog/blog1.jpg');"></a>
                                        </div>
                                        <div class="post-blog">
                                            <div class="blog-box">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item  mr-3 border-0">
                                                        <a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a>
                                                    </li>
                                                </ul>
                                                <a class="new-link" href="blog-details.html"><h6>The Most Anticipated Movies</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <div class="post-img-holder">
                                            <a href="#" style="background-image: url('<?=ASSETS?>images/blog/blog2.jpg');"></a>
                                        </div>
                                        <div class="post-blog">
                                            <div class="blog-box">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item  mr-3 border-0"><a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a></li>
                                                </ul>
                                                <a class="new-link" href="blog-details.html"><h6>Amy Adams Always Dreamed</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <div class="post-img-holder">
                                            <a href="#" style="background-image: url(<?=ASSETS?>images/blog/blog3.jpg);"></a>
                                        </div>
                                        <div class="post-blog">
                                            <div class="blog-box">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item  mr-3 border-0"><a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a></li>
                                                </ul>
                                                <a class="new-link" href="blog-details.html"><h6>WandaVision Will Reveal Scarlet Witch’s Untapped Powers</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="archives-2" class="widget widget_archive">
                        <h5 class="widget-title">Arxivlar</h5>
                        <ul>
                            <li><a href="#">February 2019</a></li>
                            <li><a href="#">January 2019</a></li>
                        </ul>
                    </div>
                    <div id="categories-2" class="widget widget_categories">
                        <h5 class="widget-title">Yangiliklar Kategoriyasi</h5>
                        <?php if (!empty($newsCategories)): ?>
                        <ul>
                            <?php foreach ($newsCategories as $category): ?>
                            <li><a href="?route=blog-category&id=<?=$category['id']?>"><?=$category['name']?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'sections/footer.php';?>
