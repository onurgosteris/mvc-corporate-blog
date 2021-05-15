<div class="container-fluid p-0 <?php echo isset($data['anasayfa']) ? 'nav-bar' : 'mb-5' ?>">
    <nav class="navbar navbar-expand-lg bg-<?php echo isset($data['anasayfa']) ? 'none' : 'secondary' ?> navbar-dark py-0">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span
                    class="notranslate text-primary"><?php echo $data['logo_text'] ?></span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav m-auto py-4">
                <?php foreach ($data['ust_menuler'] as $ust_menuler) {

                    $sayac = 0;
                    // alt menü var ise
                    if (isset($data['alt_menuler'])){
                        for ($i = 0; $i < count($data['alt_menuler']); $i++) {
                            if ($data['alt_menuler'][$i]['menu_ust'] == $ust_menuler['menu_id']) {
                                $menunun_ust_degerleri[$sayac] = $data['alt_menuler'][$i]['menu_id'];
                                $sayac++;
                            }
                        }
                    }
                    // Menünün alt menüsü yok ise direkt yazdır
                    // Eğer Alt menüsü var ise dropdown menüyü yazdır ve
                    // alt menülerini ekle
                    if (empty($menunun_ust_degerleri[0])) { ?>
                        <a href="<?php echo $ust_menuler['menu_url'] ?>"
                           class="nav-item nav-link"><?php echo $ust_menuler['menu_ad'] ?></a>
                    <?php } else { ?>
                        <div class="nav-item dropdown">
                            <a href="<?php echo $ust_menuler['menu_url']; ?>" class="nav-link dropdown-toggle"
                               data-toggle="dropdown"><?php echo $ust_menuler['menu_ad'] ?></a>
                            <div style="margin-top: -3px;" class="dropdown-menu text-capitalize">
                                <?php
                                for ($i = 0; $i < count($menunun_ust_degerleri); $i++) {
                                    ?>
                                    <a href="<?php echo $data['alt_menuler'][$i]['menu_url'] ?>"
                                       class="dropdown-item"><?php echo $data['alt_menuler'][$i]['menu_ad'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        // Menüleri yazdırdıktan sonra döngü bitmiş oluyor
                        // Bu yüzden menünün özel üst değerini sıfırla
                        unset($menunun_ust_degerleri);
                    }
                } ?>
            </div>
        </div>
    </nav>
</div>