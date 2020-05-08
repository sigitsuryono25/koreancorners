<section class="w3l-mag-main">
    <div class="mag-content-inf py-5">
        <div class="container">
            <h4 class="read-more mx-3">
                <?php
                $namaKategori = $this->front->getKategoriBySlug($this->uri->segment(2))->row()->nama;
                echo $namaKategori;
                ?>

                <hr/>
            </h4>
            <div class="row mng-front-cont mt-5 ">
                <div class="col-md-9">
                    <?php foreach ($content as $c) { ?>
                        <div class="mag-small-post col-md-12">
                            <div class="post-item-grid row mb-4">
                                <div class="mag-post-thumb col-3">
                                    <a href="#"><img src="<?php echo $c->thumbnail ?>" class="img-fluid" alt=""></a>

                                </div>
                                <div class="mag-post-details col-9">
                                    <p class="mag-post-title font-weight-bold">
                                        <a href="<?php echo site_url($this->etc->yeardate($c->date_post). $c->slug_title) ?>">
                                            <?php echo $c->title ?>
                                    </p>
                                    <div class="mag-post-meta"> 
                                        <span class="author-date"><?php echo date_format(date_create($c->date_post), "M, d Y") ?></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section>
