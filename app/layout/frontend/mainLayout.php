<?php
if (isset($_POST['whatsapp_message'])) {
    header("location:https://wa.me/{$data['whatsapp_buton']}?text={$_POST['whatsapp_message']}");
    exit;
}

// Menüleri ayır
$ust_sayac = 0;
$alt_sayac = 0;
foreach ($data['menuler'] as $menuler) {
    if ($menuler['menu_ust'] == 0) {
        $data['ust_menuler'][$ust_sayac] = $menuler;
        $ust_sayac++;
    } else {
        $data['alt_menuler'][$alt_sayac] = $menuler;
        $alt_sayac++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php if (isset($data['title_2'])) { ?>
        <title><?php echo $data['title_2']; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="<?php echo $data['keywords_2']; ?>" name="keywords">
        <meta content="<?php echo $data['description_2']; ?>" name="description">
    <?php } else { ?>
        <title><?php echo $data['title']; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="<?php echo $data['keywords']; ?>" name="keywords">
        <meta content="<?php echo $data['description']; ?>" name="description">
    <?php } ?>
    <!-- Favicon -->
    <link href="../../../public/images/settings/<?php echo $data['icon'] ?>" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../../../public/frontend/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../public/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/frontend/css/style.css" rel="stylesheet">

    <!-- Panelden gelen header script kodları -->
    <?php echo $data['header_kod']; ?>

</head>

<body class="bg-white">
<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-lg-5">
        <div class="col-lg-4 text-center text-lg-left">
            <div class="d-inline-flex align-items-center">
                <p class="mr-2 mb-2 mb-lg-0 text-white">Çalışma Saatlerimiz:</p>
                <span class="mb-2 mb-lg-0 text-white"><?php echo $data['work_hours']; ?></span>
            </div>
        </div>

        <div class="col-lg-4 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <p class="m-0 mr-1 text-white">Bizi Takip Edin:</p>
                <?php if (!empty($data['facebook'])) { ?>
                    <a class="text-white px-2" href="<?php echo $data['facebook']; ?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                <?php } ?>

                <?php if (!empty($data['twitter'])) { ?>
                    <a class="text-white px-2" href="<?php echo $data['twitter']; ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                <?php } ?>

                <?php if (!empty($data['instagram'])) { ?>
                    <a class="text-white px-2" href="<?php echo $data['instagram']; ?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                <?php } ?>

                <?php if (!empty($data['youtube'])) { ?>
                    <a class="text-white px-2" href="<?php echo $data['youtube']; ?>">
                        <i class="fab fa-youtube"></i>
                    </a>
                <?php } ?>
            </div>
        </div>

        <div class="col-lg-4 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="nav-item dropdown">
                    <a style="margin-right: 30px;" rel="nofollow" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img
                                id="secilenUlke" src="https://www.countryflags.io/tr/shiny/32.png"></a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="#" rel="nofollow" class="notranslate dropdown-item"
                           onclick="chaneCountry('us');doGTranslate('auto|en');return false;"
                           title="English"><img src="https://www.countryflags.io/us/shiny/48.png"> English</a>
                        <a href="#" rel="nofollow" class="notranslate dropdown-item"
                           onclick="chaneCountry('fr');doGTranslate('auto|fr');return false;"
                           title="French"><img src="https://www.countryflags.io/fr/shiny/48.png"> Français</a>
                        <a href="#" rel="nofollow" class="notranslate dropdown-item"
                           onclick="chaneCountry('cn');doGTranslate('auto|zh-TW');return false;"
                           title="Chinese"><img src="https://www.countryflags.io/cn/shiny/48.png"> 中文</a>
                        <a href="#" rel="nofollow" class="notranslate dropdown-item"
                           onclick="chaneCountry('de');doGTranslate('auto|de');return false;"
                           title="German"><img src="https://www.countryflags.io/de/shiny/48.png"> Deutsche</a>
                        <a href="#" rel="nofollow" class="notranslate dropdown-item"
                           onclick="chaneCountry('tr');doGTranslate('auto|tr');return false;"
                           title="Turkish"><img src="https://www.countryflags.io/tr/shiny/48.png"> Türkçe</a>
                        <a href="#" rel="nofollow" class="notranslate dropdown-item"
                           onclick="chaneCountry('ar');doGTranslate('auto|ar');return false;"
                           title="Turkish"><img src="https://www.countryflags.io/ar/shiny/48.png"> عربى</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="http://<?php echo URL; ?>" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-capitalize font-italic"><span
                            class="notranslate text-primary"><?php echo $data['logo_text'] ?></span></h1>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="d-inline-flex flex-column text-center pr-3 border-right">
                    <h6>ADRESİMİZ</h6>
                    <p class="m-0"><?php echo $data['adres'] ?></p>
                </div>
                <div class="d-inline-flex flex-column text-center pl-3">
                    <h6>BİZİ ARAYIN</h6>
                    <p class="m-0"><?php echo $data['phone']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Start -->
<?php mainController::callView("inc", "menu", $data); ?>
<!-- Navbar End -->

<?php echo $data['view']; ?>

<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-5">
            <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span
                        class="notranslate text-primary"><?php echo $data['logo_text'] ?></span>
            </h1>
            <p class="m-0"><?php echo $data['footer_content'] ?></p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <?php foreach ($data['footerBasliklar'] as $footerBasliklar) { ?>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4"><?php echo $footerBasliklar['footer_baslik'] ?></h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php foreach ($data['footerAltBasliklar'] as $footerAltBasliklar) {
                                if ($footerBasliklar['footer_baslik_id'] == $footerAltBasliklar['footer_baslik']) {
                                    ?>
                                    <a class="text-white mb-2" href="<?php echo $footerAltBasliklar['footer_url'] ?>"><i
                                                class="fa fa-angle-right mr-2"></i><?php echo $footerAltBasliklar['footer_ad'] ?>
                                    </a>
                                <?php }
                            } ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">BİZE ULAŞIN</h5>
                    <p><i class="fa fa-map-marker mr-2"></i><?php echo $data['adres'] ?></p>
                    <p><i class="fa fa-phone mr-2"></i><?php echo $data['phone'] ?></p>
                    <p><i class="fa fa-envelope mr-2"></i><?php echo $data['email'] ?></p>
                    <div class="d-flex justify-content-start mt-4">
                        <?php if (!empty($data['facebook'])) { ?>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                               style="width: 40px; height: 40px;" href="<?php echo $data['facebook']; ?>"><i
                                        class="fab fa-facebook-f"></i></a>
                        <?php } ?>
                        <?php if (!empty($data['twitter'])) { ?>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                               style="width: 40px; height: 40px;" href="<?php echo $data['twitter']; ?>"><i
                                        class="fab fa-twitter"></i></a>
                        <?php } ?>
                        <?php if (!empty($data['instagram'])) { ?>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                               style="width: 40px; height: 40px;" href="<?php echo $data['instagram']; ?>"><i
                                        class="fab fa-instagram"></i></a>
                        <?php } ?>
                        <?php if (!empty($data['youtube'])) { ?>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                               style="width: 40px; height: 40px;" href="<?php echo $data['youtube']; ?>"><i
                                        class="fab fa-youtube"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">
                <?php echo $data['copyright'] ?>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- Panelden gelen footer script kodları -->
<?php echo $data['footer_kod']; ?>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php
if (!empty($data['whatsapp_buton'])) {
    mainController::callView("inc", "whatsapp");
}
?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="../../../public/frontend/lib/easing/easing.min.js"></script>
<script src="../../../public/frontend/lib/waypoints/waypoints.min.js"></script>
<script src="../../../public/frontend/lib/counterup/counterup.min.js"></script>
<script src="../../../public/frontend/lib/owlcarousel/owl.carousel.min.js"></script>

<script>
    function chaneCountry(country) {
        resim = "https://www.countryflags.io/"+country+
        "/shiny/32.png";
        document.getElementById('secilenUlke').removeAttribute('src');
        document.getElementById('secilenUlke').setAttribute('src', resim);
    }


</script>
<!-- Contact Javascript File -->
<script src="../../../public/frontend/mail/jqBootstrapValidation.min.js"></script>
<script src="../../../public/frontend/mail/contact.js"></script>
<script src="../../../public/js/translate.js"></script>
<!-- Template Javascript -->
<script src="../../../public/frontend/js/main.js"></script>
</body>

</html>