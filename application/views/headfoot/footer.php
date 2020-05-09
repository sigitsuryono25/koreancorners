<!-- /slider -->
<script src='https://connect.facebook.net/en_US/all.js'></script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/grids.owl.carousel.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript">
var infolinks_pid = 3257330;
var infolinks_wsid = 0;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>

<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 2,
                    nav: true,
                    margin: 20
                },
                667: {
                    items: 3,
                    nav: true,
                    margin: 20
                },
                1000: {
                    items: 5,
                    nav: true,
                    margin: 20
                }
            }
        })
    })
</script>
<!-- /slider -->

<!-- footer-66 -->
<footer class="w3l-footer-66">
    <section class="footer-inner-main py-md-5 py-5">
        <div class="container">
            <div class="footer-top row">
                <div class="sub-one-left col-lg-4 col-md-6">
                    <h6>About Webzine</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris.</p>
                    <div class="columns-2">
                        <ul class="social-footer">
                            <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="sub-two-right col-lg-4 col-md-6 my-md-0 my-5">
                    <h6>Editor Pics</h6>
                    <div class="row editor-pics mb-3">
                        <div class="col-3 item-pic">
                            <img src="<?php echo base_url() ?>assets/images/m4.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="col-9 item-details">
                            <a href="#">
                                <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                    NYC...</h5>
                            </a>
                            <div class="td-post-date">Jan 22, 2019</div>
                        </div>

                    </div>
                    <div class="row editor-pics mb-3">
                        <div class="col-3 item-pic">
                            <img src="<?php echo base_url() ?>assets/images/m1.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="col-9 item-details">
                            <a href="#">
                                <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                    NYC...</h5>
                            </a>
                            <div class="td-post-date">Jan 22, 2019</div>
                        </div>

                    </div>
                    <div class="row editor-pics mb-3">
                        <div class="col-3 item-pic">
                            <img src="<?php echo base_url() ?>assets/images/m3.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="col-9 item-details">
                            <a href="#">
                                <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                    NYC...</h5>
                            </a>
                            <div class="td-post-date">Jan 22, 2019</div>
                        </div>

                    </div>

                </div>

                <div class="sub-one-left col-lg-4 col-md-6 mt-lg-0 mt-md-5">
                    <h6>Information</h6>
                    <div class="columns-2 d-flex">
                        <ul class="footer-sub-gd mr-5">
                            <li><a href="#">Celebrities</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="lifestyle.html">Lifestyle</a></li>
                            <li><a href="#">Blog Page</a></li>
                        </ul>
                        <ul class="footer-sub-gd">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Signup</a></li>
                            <li><a href="#">Author</a></li>
                            <li><a href="#">Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="below-section">
        <div class="container">
            <div class="copyright-footer text-center">

                <p>© 2020 Korean Corners. All rights reserved.
                </p>
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" style="bottom: 20px" id="movetop" title="Go to top">
            <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </div>
    <!-- copyright -->
</footer>
<!--//footer-66 -->
</body>

</html>
