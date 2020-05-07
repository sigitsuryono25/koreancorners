<section class="w3l-mag-main">
    <!--/mag-content-->
    <div class="mag-content-inf pt-3 pb-4">
        <div class="container">
            <div class="banner-bottom-sechny py-md-4">
                <h3 class="hny-title text-center">Recent <span>News</span></h3>
                <div class="ban-content-inf row py-lg-3">
                    <div class="maghny-gd-1 col-lg-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily" style="cursor: inherit">
                                <img class="img-fluid" src="<?php echo $first_new->thumbnail ?>" alt="">
                                <figcaption class="w3set-hny">
                                    <div class="py-5">
                                        <h4 class="top-text"><a class="text-white" href="<?php echo site_url($this->etc->yeardate($first_new->date_post) . $first_new->slug_title) ?>" style="cursor: pointer"><?php echo $first_new->title ?></a></h4>
                                        <p class="lead mt-3"><?php echo date_format(date_create($first_new->date_post), "M, d Y") ?></p>
                                        <br>
                                        <br>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-lg-6">
                        <div class="row">
                            <?php foreach ($second__third_new as $b) { ?>
                                <div class="maghny-gd-1 col-md-6">
                                    <div class="maghny-grid">
                                        <img class="img-fluid" src="<?php echo $b->thumbnail ?>">
                                    </div>
                                    <h6 class="top-title mt-2 font-weight-bold">
                                        <a href="<?php echo site_url($this->etc->yeardate($b->date_post) . $b->slug_title) ?>">
                                            <?php echo $b->title ?>
                                        </a>
                                    </h6>
                                    <div class="mag-post-meta mt-1">
                                        <span class="author-date"><?php echo date_format(date_create($b->date_post), "M, d Y") ?></span>
                                    </div>
                                    <a href="<?php echo site_url($this->etc->yeardate($b->date_post) . $b->slug_title) ?>" style="cursor: pointer" class="read-more btn mt-3">Read More</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-inner-grids py-md-4 row">
                <div class="mag-content-left-hny col-lg-8">
                    <!--/mag-hny-content-1-->
                    <div class="mag-hny-content">
                        <h3 class="hny-title">IDOL <span>&amp; Seleb</span></h3>
                        <!--/mag-left-grid-1-->
                        <div class="maghny-grids-inf row">
                            <?php foreach ($idol as $i) { ?>
                                <div class="maghny-gd-1 col-lg-6 col-md-6 mt-3">
                                    <div class="maghny-grid">
                                        <div style="
                                             background-image: url('<?php echo $i->thumbnail ?>');
                                             width: 100%;
                                             height: 227px;
                                             background-repeat: no-repeat;
                                             background-position: top center;
                                             ">
                                        </div>
                                    </div>
                                    <p class="font-weight-bold mt-2 h6">
                                        <a href="<?php echo site_url($this->etc->yeardate($i->date_post) . $i->slug_title) ?>">
                                            <?php echo $i->title ?>
                                        </a>
                                    </p>
                                    <div class="mag-post-meta mt-3">
                                        <span class="author-date"><?php echo date_format(date_create($i->date_post), "M, d Y") ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!--//mag-hny-content-1-->
                    <!--//mag-left-grid-1-->
                    <div class="mag-hny-content my-lg-5">
                        <h3 class="hny-title">Drama <span>&amp; Movie</span></h3>
                        <!--/mag-left-grid-1-->
                        <div class="maghny-grids-inf row">
                            <?php foreach ($drama as $key => $d) { ?>
                                <div class="maghny-gd-1 col-md-6">
                                    <div class="maghny-grid">
                                        <img class="img-fluid" src="<?php echo $d->thumbnail ?>" alt="" style="height: 227px; width: 100%">
                                    </div>
                                    <p class="mt-2 font-weight-bold h6">
                                        <a href="<?php echo site_url($this->etc->yeardate($d->date_post) . $d->slug_title) ?>">
                                            <?php echo $d->title ?>
                                        </a>
                                    </p>
                                    <div class="mag-post-meta">
                                        <span class="author-date"><?php echo date_format(date_create($d->date_post), "M, d Y") ?></span>
                                    </div>
                                </div>
                                <?php
                                if ($key == 1) {
                                    break;
                                }
                            }
                            ?>
                        </div>
                        <!--/mag-sub-grids-->
                        <div class="row mng-front-cont mt-5">
                            <?php
                            foreach ($drama as $key => $d) {
                                if ($key !== 1 && $key !== 0) {
                                    ?>
                                    <div class="mag-small-post col-md-6">
                                        <div class="post-item-grid row mb-4">
                                            <div class="mag-post-thumb col-5">
                                                <a href="#"><img src="<?php echo $d->thumbnail ?>" class="img-fluid" alt=""></a>

                                            </div>
                                            <div class="mag-post-details col-7">
                                                <p class="mag-post-title font-weight-bold">
                                                    <a href="<?php echo site_url($this->etc->yeardate($d->date_post) . $d->slug_title) ?>">
                                                        <?php echo $d->title ?>
                                                    </a> 
                                                </p>
                                                <div class="mag-post-meta"> 
                                                    <span class="author-date"><?php echo date_format(date_create($d->date_post), "M, d Y") ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <!--//mag-sub-grids-->
                    </div>
                    <!--//mag-left-grid-2-->
                    <!--/mag-hny-content-1-->
                    <div class="mag-hny-content my-lg-5 mt-5">
                        <h3 class="hny-title">News</h3>
                        <!--/mag-left-grid-1-->
                        <div class="maghny-grids-inf row">
                            <div class="maghny-gd-1 col-lg-4 col-md-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily">
                                        <img class="img-fluid" src="<?php echo base_url() ?>assets/images/grid6.jpg">
                                        <figcaption>
                                            <div>
                                                <h4>Person lying down on white <span>surface</span></h4>
                                                <p>Jan.20.2020 </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </div>
                                <h5><a href="#">
                                        There are many variations that focuses on presenting</a></h5>

                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-lg-4 col-md-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily">
                                        <img class="img-fluid" src="<?php echo base_url() ?>assets/images/grid7.jpg">
                                        <figcaption>
                                            <div>
                                                <h4>woman near <span>pigeons</span></h4>
                                                <p>Jan.20.2020 </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </div>
                                <h5><a href="#">There are many variations that focuses on presenting</a></h5>

                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-lg-4 col-md-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily">
                                        <img class="img-fluid" src="<?php echo base_url() ?>assets/images/grid8.jpg">
                                        <figcaption>
                                            <div>
                                                <h4>Man standing on railroad near <span>plants</span></h4>
                                                <p>Jan.20.2020 </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </div>
                                <h5><a href="#">
                                        There are many variations that focuses on presenting</a></h5>
                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//mag-hny-content-1-->
                    <!--/mag-hny-content-3-->
                    <div class="mag-hny-content mb-5">
                        <h3 class="hny-title">Music <span>&amp; Video</span></h3>
                        <div class="maghny-grids-inf row">
                            <div class="mag-post-thumb col-md-6">
                                <a href="#"><img src="<?php echo base_url() ?>assets/images/grid9.jpg" class="img-fluid" alt=""></a>

                            </div>
                            <div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
                                <a href="#" class="link-mag">
                                    <h4 class="mag-post-head">
                                        There are many variations that focuses on presenting</h4>
                                </a>
                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"> <span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                                <p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
                                    ullamcorper dolor eu
                                    mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
                                <a href="#" class="read-more btn">Read More</a>

                            </div>


                        </div>
                        <div class="maghny-grids-inf row my-5">
                            <div class="mag-post-thumb col-md-6">
                                <a href="#"><img src="<?php echo base_url() ?>assets/images/grid10.jpg " class="img-fluid" alt=""></a>

                            </div>
                            <div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
                                <a href="#" class="link-mag">
                                    <h4 class="mag-post-head">
                                        There are many variations that focuses on presenting</h4>
                                </a>
                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                                <p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
                                    ullamcorper dolor eu
                                    mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
                                <a href="#" class="read-more btn">Read More</a>

                            </div>


                        </div>
                        <div class="maghny-grids-inf row">
                            <div class="mag-post-thumb col-md-6">
                                <a href="#"><img src="<?php echo base_url() ?>assets/images/grid5.jpg" class="img-fluid" alt=""></a>

                            </div>
                            <div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
                                <a href="#" class="link-mag">
                                    <h4 class="mag-post-head">
                                        There are many variations that focuses on presenting</h4>
                                </a>
                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                                <p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
                                    ullamcorper dolor eu
                                    mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
                                <a href="#" class="read-more btn">Read More</a>

                            </div>


                        </div>

                    </div>
                    <!--//mag-hny-content-3-->
                    <!--/mag-left-grid-6-->
                    <div class="mag-hny-content my-lg-5 mb-5">
                        <h3 class="hny-title">Top <span>Categories</span></h3>
                        <div class="fashny-grids-inf row">
                            <div class="fashion-gd-1 col-lg-4 col-6">
                                <div class="fas-gallery-grid">
                                    <a href="#">
                                        <div class="content">
                                            <div class="content-overlay"></div>
                                            <img src="<?php echo base_url() ?>assets/images/grid11.jpg" class="img-fluid" alt="">
                                            <div class="content-details fadeIn-bottom">
                                                <h4 class="content-title">Food</h4>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="fashion-gd-1 col-lg-4 col-6">
                                <div class="fas-gallery-grid">
                                    <a href="#">
                                        <div class="content">
                                            <div class="content-overlay"></div>
                                            <img src="<?php echo base_url() ?>assets/images/grid12.jpg" class="img-fluid" alt="">
                                            <div class="content-details fadeIn-bottom">
                                                <h4 class="content-title">Fashion</h4>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="fashion-gd-1 col-lg-4 col-6">
                                <div class="fas-gallery-grid">
                                    <a href="#">
                                        <div class="content">
                                            <div class="content-overlay"></div>
                                            <img src="<?php echo base_url() ?>assets/images/grid13.jpg" class="img-fluid" alt="">
                                            <div class="content-details fadeIn-bottom">
                                                <h4 class="content-title">Celebrities</h4>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--//mag-hny-content-6-->

                    <!--/mag-hny-content-3-->
                    <div class="mag-hny-content my-lg-5 mb-5">
                        <h3 class="hny-title">Variety <span>Show</span></h3>
                        <div class="maghny-grids-inf row">
                            <div class="mag-post-thumb col-md-6">
                                <a href="#"><img src="<?php echo base_url() ?>assets/images/grid16.jpg" class="img-fluid" alt=""></a>

                            </div>
                            <div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
                                <a href="#" class="link-mag">
                                    <h4 class="mag-post-head">
                                        There are many variations that focuses on presenting</h4>
                                </a>
                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"> <span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                                <p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
                                    ullamcorper dolor eu
                                    mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
                                <a href="#" class="read-more btn">Read More</a>

                            </div>


                        </div>
                        <div class="maghny-grids-inf row my-5">
                            <div class="mag-post-thumb col-md-6">
                                <a href="#"><img src="<?php echo base_url() ?>assets/images/grid17.jpg " class="img-fluid" alt=""></a>

                            </div>
                            <div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
                                <a href="#" class="link-mag">
                                    <h4 class="mag-post-head">
                                        There are many variations that focuses on presenting</h4>
                                </a>
                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                                <p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
                                    ullamcorper dolor eu
                                    mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
                                <a href="#" class="read-more btn">Read More</a>

                            </div>


                        </div>
                        <div class="maghny-grids-inf row">
                            <div class="mag-post-thumb col-md-6">
                                <a href="#"><img src="<?php echo base_url() ?>assets/images/grid13.jpg" class="img-fluid" alt=""></a>

                            </div>
                            <div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
                                <a href="#" class="link-mag">
                                    <h4 class="mag-post-head">
                                        There are many variations that focuses on presenting</h4>
                                </a>
                                <div class="mag-post-meta mt-3"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                                 class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                                <p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
                                    ullamcorper dolor eu
                                    mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
                                <a href="#" class="read-more btn">Read More</a>

                            </div>


                        </div>

                    </div>
                    <!--//mag-hny-content-3-->
                    <!--//mag-left-grid-5-->
                    <div class="mag-hny-content my-5">
                        <h3 class="hny-title">Tasty <span>Food</span></h3>
                        <!--/mag-left-grid-1-->
                        <div class="maghny-grids-inf row">
                            <div class="maghny-gd-1 col-md-6">
                                <div class="maghny-grid mb-3">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url() ?>assets/images/grid14.jpg" alt=""></a>
                                </div>
                                <h5><a href="#">
                                        There are many variations that focuses on presenting</a></h5>
                                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                                <div class="mag-post-meta"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                            class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-md-6">
                                <div class="maghny-grid mb-3">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url() ?>assets/images/grid15.jpg" alt=""></a>
                                </div>
                                <h5><a href="#">
                                        There are many variations that focuses on presenting</a></h5>
                                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                                <div class="mag-post-meta"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                            class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//mag-left-grid-5-->
                    <!--/social-->
                    <div class="mag-hny-content my-5">
                        <h3 class="hny-title">Tetap <span>Terhubung</span></h3>
                        <!--/social-media-->
                        <div class="mag-small-post my-lg-3">
                            <div class="social-media-icons row">
                                <div class="grid-social-box col-lg-3 col-sm-6">
                                    <a href="#" class="sub-facebook"><span class="fa fa-facebook"
                                                                           aria-hidden="true"></span>
                                        <div class="soc-info">
                                            <span class="sub_social_info sub_social_info_counter">14,507</span>
                                            <span class="sub_social_info sub_social_info_name">Followers</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid-social-box col-lg-3 col-sm-6 ">
                                    <a href="#" class="sub-facebook twitter"><span class="fa fa-twitter"
                                                                                   aria-hidden="true"></span>
                                        <div class="soc-info">
                                            <span class="sub_social_info sub_social_info_counter">14,507</span>
                                            <span class="sub_social_info sub_social_info_name">Followers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid-social-box col-lg-3 col-sm-6 ">
                                    <a href="#" class="sub-facebook google"><span class="fa fa-instagram"
                                                                                  aria-hidden="true"></span>
                                        <div class="soc-info">
                                            <span class="sub_social_info sub_social_info_counter">14,507</span>
                                            <span class="sub_social_info sub_social_info_name">Followers</span>
                                        </div>
                                    </a>


                                </div>
                                <div class="grid-social-box col-lg-3 col-sm-6 ">
                                    <a href="#" class="sub-facebook dribble"><span class="fa fa-pinterest"
                                                                                   aria-hidden="true"></span>
                                        <div class="soc-info">
                                            <span class="sub_social_info sub_social_info_counter">14,507</span>
                                            <span class="sub_social_info sub_social_info_name">Followers</span>
                                        </div>
                                    </a>
                                </div>
                                <!--/social-media-->
                            </div>
                        </div>
                    </div>
                    <!--//social-->
                    <!--/health-->
                    <div class="mag-hny-content my-5">
                        <h3 class="hny-title">Fashion <span>&amp; Beauty</span></h3>
                        <!--/mag-left-grid-1-->
                        <div class="maghny-grids-inf row">
                            <div class="maghny-gd-1 col-md-6">
                                <div class="maghny-grid mb-3">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url() ?>assets/images/grid18.jpg" alt=""></a>
                                </div>
                                <h5><a href="#">
                                        There are many variations that focuses on presenting</a></h5>
                                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                                <div class="mag-post-meta"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                            class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-md-6">
                                <div class="maghny-grid mb-3">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url() ?>assets/images/grid19.jpg" alt=""></a>
                                </div>
                                <h5><a href="#">
                                        There are many variations that focuses on presenting</a></h5>
                                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                                <div class="mag-post-meta"><a href="#"><img src="<?php echo base_url() ?>assets/images/admin.jpg"
                                                                            class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
                                        class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
                                            Brain</a> </span>
                                    <span class="author-date">Jan 5, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//health-->
                    <!--/mag-hny-content-4-->
                    <div class="mag-hny-content my-lg-5">
                        <h3 class="hny-title">We're on <span>Instagram</span></h3>
                        <!--  Demos -->
                        <div id="demos">
                            <div class="owl-carousel owl-theme grid-col-4">
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid1.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid2.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid3.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid6.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid7.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid8.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid1.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid3.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#link">
                                        <div class="gallery-grid">
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img src="<?php echo base_url() ?>assets/images/grid2.jpg" class="image-two img-fluid">

                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//mag-hny-content-4-->
                </div>

                <div class="mag-content-right-hny col-lg-4">
                    <aside>
                        <div class="side-bar-hny-recent mb-5">
                            <h4 class="mag-side-title">Random <span>Article</span></h4>
                            <div class="mag-small-post">
                                <?php foreach ($random as $key => $r) { ?>
                                    <div class="post-item-grid row mb-4">
                                        <div class="mag-post-thumb col-5">
                                            <a href="#"><img src="<?php echo $r->thumbnail ?>" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="mag-post-details col-7">
                                            <span class="mag-post-title">
                                                <a href="<?php echo site_url($this->etc->yeardate($r->date_post) . $r->slug_title) ?>">
                                                    <?php echo $r->title ?>
                                                </a>
                                            </span>
                                            <div class="mag-post-meta">
                                                <span class="author-date"><?php echo date_format(date_create($r->date_post), "M, d Y") ?></span>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="side-bar-hny-recent mb-5">
                            <h4 class="mag-side-title">Top <span>Categories</span></h4>
                            <div class="mag-small-post">
                                <div class="post-item-grid align-items-center row mb-4">
                                    <div class="mag-post-thumb col-3 pl-0">

                                        <a href="#"><img src="<?php echo base_url() ?>assets/images/m11.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-cate">
                                            <a href="#">Fashion</a> </h4>
                                    </div>
                                </div>
                                <div class="post-item-grid align-items-center row mb-4">
                                    <div class="mag-post-thumb col-3 pl-0">
                                        <a href="#"><img src="<?php echo base_url() ?>assets/images/m10.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details align-items-center col-9">
                                        <h4 class="mag-post-cate">
                                            <a href="#">Culture</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post-item-grid align-items-center row mb-4">
                                    <div class="mag-post-thumb col-3 pl-0">
                                        <a href="#"><img src="<?php echo base_url() ?>assets/images/m12.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-cate">
                                            <a href="#">LifeStyle</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post-item-grid align-items-center row mb-4">
                                    <div class="mag-post-thumb col-3 pl-0">
                                        <a href="#"><img src="<?php echo base_url() ?>assets/images/m9.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-cate">
                                            <a href="#">Food</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post-item-grid align-items-center row mb-4">
                                    <div class="mag-post-thumb col-3 pl-0">
                                        <a href="#"><img src="<?php echo base_url() ?>assets/images/m13.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-cate">
                                            <a href="#">Business</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="side-bar-hny-recent mb-5">
                            <h4 class="mag-side-title">Popular <span>Posts</span></h4>
                            <div class="mag-small-post">
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-3">

                                        <h6 class="num-text">01</h6>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-title">
                                            <a href="#">There are many variations that focuses on presenting</a>
                                        </h4>


                                    </div>
                                </div>
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-3">
                                        <h6 class="num-text">02</h6>

                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-title">
                                            <a href="#">There are many variations that focuses on presenting</a>
                                        </h4>

                                    </div>
                                </div>
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-3">

                                        <h6 class="num-text">03</h6>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-title">
                                            <a href="#">There are many variations that focuses on presenting</a>
                                        </h4>

                                    </div>
                                </div>
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-3">
                                        <h6 class="num-text">04</h6>

                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-title">
                                            <a href="#">There are many variations that focuses on presenting</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-3">
                                        <h6 class="num-text">05</h6>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-title">
                                            <a href="#">There are many variations that focuses on presenting</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-3">
                                        <h6 class="num-text">06</h6>

                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-title">
                                            <a href="#">There are many variations that focuses on presenting</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post-item-grid row mb-4">
                                    <div class="mag-post-thumb col-3">
                                        <h6 class="num-text">07</h6>
                                    </div>
                                    <div class="mag-post-details col-9">
                                        <h4 class="mag-post-title">
                                            <a href="#">There are many variations that focuses on presenting</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//mag-content-->
