<!-- Detail Start -->
<?php extract($data['blog_detay']); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-column text-left mb-4">
                <h5 class="text-primary mb-3">İÇERİK</h5>
                <h1 class="mb-3"><?php echo $blogs_title ?></h1>
            </div>

            <div class="mb-5">
                <div align="center">
                    <img class="img-thumbnail mb-4 p-3" src="../../../public/images/blogs/<?php echo $blogs_file ?>"
                         alt="<?php echo $blogs_title ?>">
                </div>
                <?php echo $blogs_content; ?>
            </div>

        </div>

    </div>
</div>
<!-- Detail End -->
