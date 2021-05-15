<div class="block-header">
    <h2><b>ANA SAYFA AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <b>İkon kodlarını <a href="https://fontawesome.com/icons?d=gallery&p=2">Bu siteden</a> alabilirsiniz. Kodun sınıfını almanız yeterlidir. Örnek : fas fa-user</b>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/anasayfa/update/anasayfaUpdateOp" method="POST" enctype="multipart/form-data">

                    <h3 align="center">ÖZELLİKLER KARTI AYARLARI</h3>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_1_kart_baslik']; ?>"
                                       name="ozellikler_1_kart_baslik" required class="form-control">
                                <label class="form-label">1. Özellik Kart Başlığı</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_1_kart_icon']; ?>"
                                       name="ozellikler_1_kart_icon" required class="form-control">
                                <label class="form-label">1. Özellik Kart İkon Kodu</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_1_kart_icerik']; ?>"
                                       name="ozellikler_1_kart_icerik" required class="form-control">
                                <label class="form-label">1. Özellik Kart İçeriği</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_2_kart_baslik']; ?>"
                                       name="ozellikler_2_kart_baslik" required class="form-control">
                                <label class="form-label">2. Özellik Kart Başlığı</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_2_kart_icon']; ?>"
                                       name="ozellikler_2_kart_icon" required class="form-control">
                                <label class="form-label">2. Özellik Kart İkon Kodu</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_2_kart_icerik']; ?>"
                                       name="ozellikler_2_kart_icerik" required class="form-control">
                                <label class="form-label">2. Özellik Kart İçeriği</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_3_kart_baslik']; ?>"
                                       name="ozellikler_3_kart_baslik" required class="form-control">
                                <label class="form-label">3. Özellik Kart Başlığı</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_3_kart_icon']; ?>"
                                       name="ozellikler_3_kart_icon" required class="form-control">
                                <label class="form-label">3. Özellik Kart İkon Kodu</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['ozellikler_3_kart_icerik']; ?>"
                                       name="ozellikler_3_kart_icerik" required class="form-control">
                                <label class="form-label">3. Özellik Kart İçeriği</label>
                            </div>
                        </div>
                    </div>
                    <h3 align="center">ANASAYFA HAKKIMIZDA BÖLÜMÜ</h3>
                    <div class="form-group form-float">

                        <div align="center" class="form">
                            <img width="400"
                                 src="../../../../public/images/hakkimizda/<?php echo $data['hakkimizda_file'] ?>"
                                 alt="Hakkımızda içeriği">
                            <br><br>
                            <label class="form-label">Değiştirmek için resim yükleyin.</label>
                            <input type="file" name="hakkimizda_file">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['hakkimizda_1_baslik']; ?>"
                                       name="hakkimizda_1_baslik" required class="form-control">
                                <label class="form-label">1. Başlık</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['hakkimizda_2_baslik']; ?>"
                                       name="hakkimizda_2_baslik" required class="form-control">
                                <label class="form-label">2. Başlık</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['hakkimizda_buton']; ?>"
                                       name="hakkimizda_buton" required class="form-control">
                                <label class="form-label">Buton Adı</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['hakkimizda_url']; ?>" name="hakkimizda_url"
                                       required class="form-control">
                                <label class="form-label">Buton URL</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">Hakkımızda İçeriği</label>
                        <div class="form-line">
                            <textarea name="hakkimizda_icerik" id="ckeditor" cols="30"
                                      rows="10"><?php echo $data['hakkimizda_icerik']; ?></textarea>
                        </div>
                    </div>

                    <h3 align="center">BAŞARDIKLARIMIZ</h3>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_1_basari_adi']; ?>"
                                       name="basardiklarimiz_1_basari_adi" required class="form-control">
                                <label class="form-label">1. BAŞARI ADI</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_1_basari_icon']; ?>"
                                       name="basardiklarimiz_1_basari_icon" required class="form-control">
                                <label class="form-label">1. BAŞARI İKON KODU</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" value="<?php echo $data['basardiklarimiz_1_basari_sayisi']; ?>"
                                       name="basardiklarimiz_1_basari_sayisi" required class="form-control">
                                <label class="form-label">1. BAŞARI SAYISI</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_2_basari_adi']; ?>"
                                       name="basardiklarimiz_2_basari_adi" required class="form-control">
                                <label class="form-label">2. BAŞARI ADI</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_2_basari_icon']; ?>"
                                       name="basardiklarimiz_2_basari_icon" required class="form-control">
                                <label class="form-label">2. BAŞARI İKON KODU</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" value="<?php echo $data['basardiklarimiz_2_basari_sayisi']; ?>"
                                       name="basardiklarimiz_2_basari_sayisi" required class="form-control">
                                <label class="form-label">2. BAŞARI SAYISI</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_3_basari_adi']; ?>"
                                       name="basardiklarimiz_3_basari_adi" required class="form-control">
                                <label class="form-label">3. BAŞARI ADI</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_3_basari_icon']; ?>"
                                       name="basardiklarimiz_3_basari_icon" required class="form-control">
                                <label class="form-label">3. BAŞARI İKON KODU</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" value="<?php echo $data['basardiklarimiz_3_basari_sayisi']; ?>"
                                       name="basardiklarimiz_3_basari_sayisi" required class="form-control">
                                <label class="form-label">3. BAŞARI SAYISI</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_4_basari_adi']; ?>"
                                       name="basardiklarimiz_4_basari_adi" required class="form-control">
                                <label class="form-label">4. BAŞARI ADI</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['basardiklarimiz_4_basari_icon']; ?>"
                                       name="basardiklarimiz_4_basari_icon" required class="form-control">
                                <label class="form-label">4. BAŞARI İKON KODU</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" value="<?php echo $data['basardiklarimiz_4_basari_sayisi']; ?>"
                                       name="basardiklarimiz_4_basari_sayisi" required class="form-control">
                                <label class="form-label">4. BAŞARI SAYISI</label>
                            </div>
                        </div>
                    </div>

                    <h3 align="center">ÖNE ÇIKAN BLOGLAR</h3>
                    <h5 align="center"><b>ÖNE ÇIKARMAK İSTEDİĞİNİZ BLOĞUN İD DEĞERİNİ GİRİN.</b></h5>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" value="<?php echo $data['blog_1']; ?>" name="blog_1" required
                                       class="form-control">
                                <label class="form-label">1. ÖNE ÇIKAN BLOG</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" value="<?php echo $data['blog_2']; ?>" name="blog_2" required
                                       class="form-control">
                                <label class="form-label">2. ÖNE ÇIKAN BLOG</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" value="<?php echo $data['blog_3']; ?>" name="blog_3" required
                                       class="form-control">
                                <label class="form-label">3. ÖNE ÇIKAN BLOG</label>
                            </div>
                        </div>
                    </div>

                    <h3 align="center">ABONE BÜLTENİ</h3>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['bulten_baslik']; ?>" name="bulten_baslik"
                                       required class="form-control">
                                <label class="form-label">BAŞLIK</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="<?php echo $data['bulten_icerik']; ?>" name="bulten_icerik"
                                       required class="form-control">
                                <label class="form-label">İÇERİK</label>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="delete_file" value="<?php echo $data['hakkimizda_file']; ?>">
                    <br>
                    <button type="submit" name="anasayfa_update" class="btn btn-block btn-lg btn-success waves-effect">
                        ANASAYFAYI GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

