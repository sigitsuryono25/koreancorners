<section class="w3l-mag-main">
    <div class="mag-content-inf py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <header class="d-flex justify-content-between">
                        <div class="post-title">
                            <h2><?php echo $article->title?></h2>
                            <small class="badge badge-primary h6"><?php echo $article->nama?></small>
                        </div>
                        <div class="post-date">
                            <small><?php echo date_format(date_create($article->date_post), "M, d Y")?></small>
                        </div>
                    </header>
                    <div class="post-content mt-3">
                        <img class="img-fluid w-100 mb-3" src="<?php echo $article->thumbnail?>" /><br>
                        <?php echo $article->content?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-right hny-title" style="font-size: 1.5rem">Must <span>Read</span></h3>
                    <hr/>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="hny-title" style="font-size: 1.5rem">Related <span>Article</span></h3>
                            <hr/>
                        </div>
                        <div class="col-md-6">
                            <h3 class="hny-title" style="font-size: 1.5rem">Latest <span>Article</span></h3>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
