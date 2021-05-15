<?php unset($_SESSION['messageManagement']); ?>
<div class="block-header">
    <h2><b>ANA SAYFA</b></h2>
</div>
<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h1>Hoş Geldin, <?php echo $_SESSION['admins']['admins_namesurname'] ?>.</h1>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <p>Genel istatistikler aşağıda verilmiştir. Sitenizi sol menüden yönetebilirsiniz.</p>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-black">timer</i>
                                </div>
                                <div class="content">
                                    <div class="text">SUNUCU SAATİ</div>
                                    <div class="number"><?php echo date('H:i:s',time()); ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-pink">email</i>
                                </div>
                                <div class="content">
                                    <div class="text">GELEN MESAJLAR</div>
                                    <div class="number"><?php echo $data['mesaj_sayisi'] ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-red">contact_mail</i>
                                </div>
                                <div class="content">
                                    <div class="text">MAİL ABONELERİ</div>
                                    <div class="number"><?php echo $data['abone_sayisi']; ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-blue">account_circle</i>
                                </div>
                                <div class="content">
                                    <div class="text">YÖNETİCİLER</div>
                                    <div class="number"><?php echo $data['admin_sayisi'] ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-green">list</i>
                                </div>
                                <div class="content">
                                    <div class="text">KATEGORİLER</div>
                                    <div class="number"><?php echo $data['kategori_sayisi'] ?></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-light-green">content_paste</i>
                                </div>
                                <div class="content">
                                    <div class="text">İÇERİKLER</div>
                                    <div class="number"><?php echo $data['blog_sayisi'];?></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-deep-purple">phone</i>
                                </div>
                                <div class="content">
                                    <div class="text"><?php echo $data['phone'];?></div>
                                    <div class="number">TELEFON</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box-4 hover-zoom-effect">
                                <div class="icon">
                                    <i class="material-icons col-deep-orange">texture</i>
                                </div>
                                <div class="content">
                                    <div class="text">LOGO</div>
                                    <div class="number"><?php echo $data['logo_text'];?></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>