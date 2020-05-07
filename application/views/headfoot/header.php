<!DOCTYPE html>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Korean Corners | Just Another Korean Info </title>
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style-starter.css">
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="<?php echo base_url('assets/') ?>css/font-awesome.min.css" rel="stylesheet">
        <script data-ad-client="ca-pub-5324770724888200" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    </head>

    <body>
        <!-- Headers-4 block -->
        <section class="w3l-header-6-main mobile-header">
            <div class="header-section-hny">
                <div class="header-top">
                    <div class="container">
                        <!-- /header-top-inn-->
                        <div class="header-inn-top row">
                            <div class="logo-brand col-6">
                                <a class="navbar-brand" href="<?php echo base_url() ?>">
                                    <!--<img src="assets/images/logo.png" alt="" title="Webzine" style="max-height:30px;width:100%;" />-->
                                    <h4 class="text-white h3">Korean Corners</h4>
                                </a>
                            </div>
                            <div class="menu-overlay-left col-6 ml-auto">
                                <div class="two-pops d-flex">
                                    <div class="overlay-menuv-hny">
                                        <input type="checkbox" id="op"></input>
                                        <div class="side-menu-hny">
                                            <label for="op" class="menuopen">
                                                <span class="fa fa-bars" aria-hidden="true"></span></label>
                                        </div>
                                        <div class="overlay-menuv overlay-menuv-hugeinc">
                                            <label for="op" class="menuclose"><span class="fa fa-times"
                                                                                    aria-hidden="true"></span></label>
                                            <div class="side-show-content text-left">

                                                <div class="quick-links-side gap-top">
                                                    <h3 class="side-title">About Webzine</h3>
                                                    <p> Lorem ipsum dolor sit amet, adipi scingelit. Vestibulum orci justo,
                                                        vehicula vel sapien sit amet.
                                                    </p>

                                                </div>

                                                <div class="quick-links-side gap-top">
                                                    <h3 class="side-title">Top Authors</h3>
                                                    <ul>
                                                        <li><a href="#">John Smith</a></li>
                                                        <li><a href="#">Jackson</a></li>
                                                        <li><a href="#">Lucas Smith</a></li>
                                                        <li><a href="#">Daniel Doe</a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick-links-side gap-top">
                                                    <h3 class="side-title">Categories</h3>
                                                    <ul>
                                                        <li><a href="index.html">Home</a></li>
                                                        <li><a href="lifestyle.html">Lifestyle</a></li>
                                                        <li><a href="contact.html">Contact Us</a></li>
                                                        <li><a href="#">Author</a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick-links-side follow-us gap-top">
                                                    <h3 class="side-title">Follow Us</h3>
                                                    <ul class="social-icons-top">
                                                        <li><a class="facebook" href="#"><span class="fa fa-facebook"
                                                                                               aria-hidden="true"></span></a>
                                                        </li>
                                                        <li><a class="twitter" href="#"><span class="fa fa-twitter"
                                                                                              aria-hidden="true"></span></a></li>
                                                        <li><a class="google" href="#"><span class="fa fa-google-plus"
                                                                                             aria-hidden="true"></span></a>
                                                        </li>
                                                        <li><a class="instagram" href="#"><span class="fa fa-instagram"
                                                                                                aria-hidden="true"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="search-right">
                                        <a href="#search" title="search">
                                            <span class="fa fa-search" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                                <!-- overlay-menuv-menu -->
                            </div>
                        </div>
                        <!-- //header-top-inn-->
                    </div>
                </div>
                <header class="header-hny-block">
                    <div class="container">
                        <!-- /.nav-collapse -->
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-lg-auto">

                                    <li class="nav-item ">
                                        <a class="nav-link " href="javascript:void(0)" >
                                            Home
                                        </a>
                                    </li>
                                    <?php foreach ($kategori->result() as $r) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url('category/' . $r->slug) ?>"><?php echo $r->nama ?></a>
                                        </li>
                                    <?php } ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                           id="navbarDropdown" role="button" 
                                           data-toggle="dropdown" 
                                           aria-haspopup="true" 
                                           aria-expanded="false"
                                           >
                                            Lainnya
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php foreach ($lainnya->result() as $key => $k) { ?>
                                                <a class="dropdown-item px-3 py-1" href="<?php echo site_url('category/' . $k->slug) ?>"><?php echo $k->nama ?></a>
                                            <?php }
                                            ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        </nav>
                    </div>
                </header>
            </div>
        </section>
