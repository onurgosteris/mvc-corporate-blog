<div class="container-fluid p-0">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $sayac=0; foreach ($data['sliders'] as $sliders) { ?>
            <div class="carousel-item <?php echo $sayac==0 ? 'active' : null; ?>">
                <img class="w-100" src="../../../public/images/sliders/<?php echo $sliders['sliders_file']; ?>" alt="<?php echo $sliders['sliders_title']; ?>>">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h4 class="text-primary m-0"><?php echo $sliders['sliders_content'] ?></h4>
                    <h4 class="display-4 m-0 mt-2 mt-md-3 text-white"><?php echo $sliders['sliders_title'] ?></h4>
                    <?php if (!empty($sliders['sliders_buton'])){ ?>
                    <a href="<?php echo $sliders['sliders_url'] ?>" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4"><?php echo $sliders['sliders_buton'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <?php $sayac++; } ?>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>