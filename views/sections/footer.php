
<footer id="contact" class="footer-one iq-bg-dark">
    <!-- Address -->
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row footer-standard">
                <div class="col-lg-6">
                    <div class="widget text-left">
                        <div class="menu-footer-link-1-container">
                            <ul id="menu-footer-link-1" class="menu p-0">
                                <li id="menu-item-7314"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7314">
                                    <a href="#">Terms Of Use</a>
                                </li>
                                <li id="menu-item-7316"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7316">
                                    <a href="privacy-policy.html">Privacy-Policy</a>
                                </li>
                                <li id="menu-item-701"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-701">
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li id="menu-item-7118"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
                                    <a href="watch-video.html">Watch List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget text-left">
                        <div class="textwidget">
                            <p><small>© 2021 STREAMIT. All Rights Reserved. All videos and shows on this platform are
                                    trademarks of, and all related images and content are the property of, Streamit Inc.
                                    Duplication and copy of this is strictly prohibited. All rights reserved.</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <h6 class="footer-link-title">
                        Follow Us :
                    </h6>
                    <?php if (!empty($allFooterLinks)):?>
                    <ul class="info-share">
                        <?php foreach ($allFooterLinks as $link): ?>
                            <li><a target="_blank" href="<?=$link['link']; ?>"><i class="<?=$link['class']; ?>"></i></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="widget text-left">
                        <div class="textwidget">
                            <h6 class="footer-link-title">Streamit App</h6>
                            <div class="d-flex align-items-center">
                                <a class="app-image" href="#">
                                    <img src="<?=ASSETS?>images/footer/01.jpg" loading="lazy" alt="play-store">
                                </a><br>
                                <a class="ml-3 app-image" href="#"><img src="<?=ASSETS?>images/footer/02.jpg" loading="lazy" alt="app-store"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address END -->
</footer>



<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
</div>
<!-- back-to-top End -->

<!-- jQuery, Popper JS -->
<script src="<?=ASSETS?>js/jquery-3.5.1.min.js"></script>
<script src="<?=ASSETS?>js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?=ASSETS?>js/bootstrap.min.js"></script>
<!-- owl carousel Js -->
<script src="<?=ASSETS?>js/owl.carousel.min.js"></script>
<!-- select2 Js -->
<script src="<?=ASSETS?>js/select2.min.js"></script>
<!-- Magnific Popup-->
<script src="<?=ASSETS?>js/jquery.magnific-popup.min.js"></script>
<!-- Custom JS-->
<script src="<?=ASSETS?>js/custom.js"></script>
<script src="<?=ASSETS?>js/rtl.js"></script>
<!-- gsap JS -->
<script src="<?=ASSETS?>plugin/gsap/gsap.min.js"></script>
<script src="<?=ASSETS?>js/gsap-scripts.js"></script>
<!-- Swiper JS -->
<script src="<?=ASSETS?>js/swiper.min.js"></script>
<script src="<?=ASSETS?>js/swiper.js"></script>
</body>


</html>
