<!DOCTYPE html>
<HTML>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo strtoupper($_SERVER['SERVER_NAME'])  ?> Admin Paneli</title>
    <!-- Favicon--> 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../public/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../public/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../public/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../../../public/plugins/morrisjs/morris.css" rel="stylesheet" />

    <link href="../../../public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../../public/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../public/css/themes/all-themes.css" rel="stylesheet" />

    <link href="../../../public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <link href="../../../public/plugins/nestable/jquery-nestable.css" rel="stylesheet" />


</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Yükleniyor...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="ARA...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="/ogpanel"><?php echo strtoupper($_SERVER['SERVER_NAME'])  ?> - Yönetim Sistemi</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
             </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="../../../public/images/admins/<?php echo $_SESSION['admins']['admins_file']; ?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['admins']['admins_namesurname'] ?></div>
                <div class="email"><?php echo $_SESSION['admins']['admins_username'] ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="http://mvc/ogpanel/admins/update/<?php echo $_SESSION['admins']['admins_id'] ?>"><i class="material-icons">person</i>Profil</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="http://mvc/ogpanel/logout"><i class="material-icons">input</i>Çıkış yap</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Menüler</li>
                <li class="active">
                    <a href="/ogpanel">
                        <i class="material-icons">home</i>
                        <span>Ana Sayfa</span>
                    </a>
                </li>
                <li>
                    <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">
                        <i class="material-icons">link</i>
                        <span>Siteye Git</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Genel Ayarlar</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/ogpanel/settings">
                                <span>Tüm Site Ayarları</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ogpanel/admins">
                                <span>Yöneticiler</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Sosyal Medya Ayarları</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="/ogpanel/settings/update/11">
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ogpanel/settings/update/28">
                                        <span>İnstagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ogpanel/settings/update/17">
                                        <span>Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ogpanel/settings/update/29">
                                        <span>Youtube</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Whatsapp ve Telefon Butonu</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="/ogpanel/settings/update/26">
                                        <span>Whatsapp Butonu</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ogpanel/settings/update/27">
                                        <span>Telefon Arama Butonu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/ogpanel/settings/update/32">
                                <span>İletişim Sayfası Google Map</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">color_lens</i>
                        <span>Tema Ayarları</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/ogpanel/anasayfa">
                                <span>Anasayfa Ayarları</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ogpanel/menu">
                                <span>Menü Ayarları</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ogpanel/sliders">
                                <span>Sliderler</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Footer Ayarları</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="/ogpanel/footerBaslik">
                                        <span>Footer Üst Başlıkları</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ogpanel/footerAltBaslik">
                                        <span>Footer Alt Başlıkları</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">create</i>
                        <span>Kategori ve Blog Ayarları</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/ogpanel/kategori">
                                <span>Kategori Ekle,Sil ve Düzenle</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ogpanel/blogs">
                                <span>Blog Ekle,Sil ve Düzenle</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ogpanel/abouts">
                                <span>Kurumsal Sayfa Ekle,Sil ve Düzenle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">message</i>
                        <span>Mesajlar ve Aboneler</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/ogpanel/messages">
                                <span>Mesajlar</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ogpanel/subscribers">
                                <span>Mail Aboneleri</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/ogpanel/bilgilendirme">
                        <i class="material-icons">info</i>
                        <span>Bilmeniz Gerekenler</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <!-- CPU Usage -->
        <?php echo $data['view']; ?>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="../../../public/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../../../public/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../../../public/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../../../public/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../../../public/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="../../../public/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="../../../public/plugins/raphael/raphael.min.js"></script>
<script src="../../../public/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="../../../public/plugins/chartjs/Chart.bundle.js"></script>



<!-- Flot Charts Plugin Js -->
<script src="../../../public/plugins/flot-charts/jquery.flot.js"></script>
<script src="../../../public/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="../../../public/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="../../../public/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="../../../public/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="../../../public/plugins/jquery-sparkline/jquery.sparkline.js"></script>





<!-- Jquery DataTable Plugin Js -->
<script src="../../../public/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../../../public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../../../public/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../../../public/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../../../public/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../../../public/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../../../public/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../../../public/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../../../public/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Ckeditor -->
<script src="../../../public/plugins/ckeditor/ckeditor.js"></script>

<!-- Custom Js -->
<!-- Custom Js SIRALAMASINA DİKKAT ET admins üstte olmalı BİRBİRİNİ ETKİLEYEN EKLENTİLER OLABİLİR -->
<script src="../../../public/js/admin.js"></script>
<script src="../../../public/js/pages/tables/jquery-datatable.js"></script>
<script src="../../../public/js/pages/forms/editors.js"></script>

<!-- Demo Js -->
<script src="../../../public/js/demo.js"></script>

</body>

</HTML>

