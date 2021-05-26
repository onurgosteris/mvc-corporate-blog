<!-- Blog Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">İÇERİKLERİMİZ</h5>
        <h1 class="m-0"><?php echo $data['title_2']; ?></h1>
    </div>
    <div class="row pb-3">
        <?php foreach($data['kategori_blogs'] as $blogs){ ?>
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <a href="<?php echo URL; ?>/blogs/<?php echo $blogs['blogs_slug'] ?>">
                    <img style="height: 200px;" class="card-img-top" src="../../../public/images/blogs/<?php echo $blogs['blogs_file'] ?>" alt="<?php echo $blogs['blogs_title'] ?>">
                </a>
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3"><?php echo $blogs['blogs_title'] ?></h6>
                    <a href="<?php echo URL; ?>/blogs/<?php echo $blogs['blogs_slug'] ?>"
                       class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto"
                       style="width: 45px; height: 45px;"></a>
                </div>
                <div class="card-footer py-3 px-4">
                    <p class="m-0"><?php echo strip_tags(mb_strcut($blogs['blogs_content'],0,50)); ?>... <a
                                href="<?php echo URL; ?>/blogs/<?php echo $blogs['blogs_slug'] ?>">Devamını oku</a></p>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="col-lg-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item ">
                        <a class="page-link" href="<?php echo URL; ?>/kategori/<?php echo $data['kategori_slug'] ?>/sayfa/1" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">İlk Sayfa</span>
                        </a>
                    </li>
                    <?php $sayfa_sayisi = ceil($data['blogs_toplam_icerik']/9);
                     for($i=1;$i<=$sayfa_sayisi;$i++){?>
                        <li class="page-item"><a class="page-link" href="<?php echo URL; ?>/kategori/<?php echo $data['kategori_slug'] ?>/sayfa/<?php echo $i; ?>"><?php echo $i ?></a></li>
                    <?php } ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo URL; ?>/kategori/<?php echo $data['kategori_slug'] ?>/sayfa/<?php echo $sayfa_sayisi; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Son Sayfa</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Blog End -->