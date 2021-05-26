<!-- Carousel Start -->
<?php mainController::callView("inc", "slider", $data); ?>
<!-- Carousel End -->


<?php
foreach ($data['anasayfa'] as $key) {
    $data[$key['input_key']] = $key['input_value'];
}
?>

<?php if ($data['ozellikler_karti_durum'] == 1) { ?>
    <!-- Features Start -->
    <h1 style="margin-top: 50px;" align="center">HİZMETLERİMİZ</h1>
    <div class="container-fluid py-5 py-lg-0 feature">
        <div class="row py-5 py-lg-0">
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="<?php echo $data['ozellikler_1_kart_icon']; ?> display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3"><?php echo $data['ozellikler_1_kart_baslik']; ?></h5>
                        <p class="m-0"><?php echo $data['ozellikler_1_kart_icerik']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="<?php echo $data['ozellikler_2_kart_icon']; ?> display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3"><?php echo $data['ozellikler_2_kart_baslik']; ?></h5>
                        <p class="m-0"><?php echo $data['ozellikler_2_kart_icerik']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center px-5">
                    <i class="<?php echo $data['ozellikler_3_kart_icon']; ?> display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3"><?php echo $data['ozellikler_3_kart_baslik']; ?></h5>
                        <p class="m-0"><?php echo $data['ozellikler_3_kart_icerik']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
<?php } ?>

<?php if ($data['hakkimizda_durum'] == 1) { ?>
    <!-- About Start -->
    <div class="container-fluid mb-5" style="background: #f6f6f6;">
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid"
                     src="../../../public/images/hakkimizda/<?php echo $data['hakkimizda_file']; ?>" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3"><?php echo $data['hakkimizda_2_baslik']; ?></h5>
                <h1 class="mb-4"><?php echo $data['hakkimizda_1_baslik']; ?></h1>
                <?php echo $data['hakkimizda_icerik']; ?>
                <a href="<?php echo $data['hakkimizda_url']; ?>"
                   class="btn btn-lg px-4 btn-primary"><?php echo $data['hakkimizda_buton']; ?></a>
            </div>
        </div>
    </div>
    <!-- About End -->
<?php } ?>

<?php if ($data['basardiklarimiz_durum'] == 1) { ?>
    <!-- Facts Start -->
    <h1 align="center" class="m-0">BAŞARDIKLARIMIZ</h1>
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <div class="row pt-5">
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="<?php echo $data['basardiklarimiz_1_basari_icon']; ?> mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white"
                    style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3"
                    data-toggle="counter-up"><?php echo $data['basardiklarimiz_1_basari_sayisi']; ?></h4>
                <h6 class="text-white m-0"><?php echo $data['basardiklarimiz_1_basari_adi']; ?></h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="<?php echo $data['basardiklarimiz_2_basari_icon']; ?> mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white"
                    style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3"
                    data-toggle="counter-up"><?php echo $data['basardiklarimiz_2_basari_sayisi']; ?></h4>
                <h6 class="text-white m-0"><?php echo $data['basardiklarimiz_2_basari_adi']; ?></h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="<?php echo $data['basardiklarimiz_3_basari_icon']; ?> mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white"
                    style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3"
                    data-toggle="counter-up"><?php echo $data['basardiklarimiz_3_basari_sayisi']; ?></h4>
                <h6 class="text-white m-0"><?php echo $data['basardiklarimiz_3_basari_adi']; ?></h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="<?php echo $data['basardiklarimiz_4_basari_icon']; ?> mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white"
                    style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3"
                    data-toggle="counter-up"><?php echo $data['basardiklarimiz_4_basari_sayisi']; ?></h4>
                <h6 class="text-white m-0"><?php echo $data['basardiklarimiz_4_basari_adi']; ?></h6>
            </div>
        </div>
    </div>
    <!-- Facts End -->
<?php } ?>



<?php if ($data['blog_durum'] == 1) { ?>
    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">BLOG</h5>
            <h1 class="m-0">ÖNE ÇIKAN İÇERİKLER</h1>
        </div>
        <div class="row pb-3">

            <?php foreach ($data['one_cikan_bloglar'] as $bloglar) { ?>
                <div class="col-lg-4 mb-4">
                    <div class="card mb-2 p-3">
                        <a href="blogs/<?php echo $bloglar['blogs_slug'] ?>" >
                            <img class="card-img-top"
                                 src="../../../public/images/blogs/<?php echo $bloglar['blogs_file'] ?>"
                                 alt="<?php echo $bloglar['blogs_title'] ?>">
                        </a>

                        <div class="card-body bg-secondary d-flex align-items-center p-0">
                            <h6 class="card-title text-white text-truncate m-0 ml-3"><?php echo $bloglar['blogs_title'] ?></h6>
                            <a href="blogs/<?php echo $bloglar['blogs_slug'] ?>"
                               class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto"
                               style="width: 45px; height: 45px;"></a>
                        </div>
                        <div class="card-footer py-3 px-4">
                            <p class="m-0"><?php echo strip_tags(mb_strcut($bloglar['blogs_content'], 0, 60)); ?>... <a
                                        href="blogs/<?php echo $bloglar['blogs_slug'] ?>">Devamını oku</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Blog End -->
<?php } ?>


<?php if ($data['bulten_durum'] == 1) { ?>
    <!-- Subscribe Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <h1 class="text-white font-weight-bold mt-5 mb-3"><?php echo $data['bulten_baslik']; ?></h1>
        <p class="text-white mb-4"><?php echo $data['bulten_icerik']; ?></p>
        <p id="subscribers_form"><?php if (isset($_SESSION['messageManagement'])) {
                islem_sonucu();
            } ?></p>
        <form class="form-inline justify-content-center mb-5" action="/mailabone" method="POST">
            <div class="input-group">
                <input type="text" name="subscribers_mail" class="form-control-lg" placeholder="Email Adresiniz">
                <input type="hidden" name="subscribers_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                <div class="input-group-append">
                    <button name="abone_ol" class="btn btn-secondary" type="submit">ABONE OL</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->
<?php } ?>