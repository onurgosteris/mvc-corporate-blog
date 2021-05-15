<?php extract($data['aboutsUpdate']); ?>
<div class="block-header">
    <h2><b>SAYFA İÇERİK AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile içeriğinizi güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/abouts/update/aboutsUpdateOp" method="POST" enctype="multipart/form-data">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="abouts_title"
                                   value="<?php echo $abouts_title ?>" class="form-control">
                            <label class="form-label">Sayfa Başlığı</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="abouts_description"
                                   value="<?php echo $abouts_description ?>" class="form-control">
                            <label class="form-label">Sayfa Açıklaması</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="abouts_keywords"
                                   value="<?php echo $abouts_keywords ?>" class="form-control">
                            <label class="form-label">Sayfa Anahtar Kelimeleri</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="abouts_slug"
                                   value="<?php echo $abouts_slug ?>" class="form-control">
                            <label class="form-label">Sayfa Seo Url (BOŞ BIRAKIRSANIZ BAŞLIĞA GÖRE OLUŞTURUR.)</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">Sayfa İçerik</label>
                        <div class="form-line">
                            <textarea name="abouts_content" id="ckeditor"><?php echo $abouts_content; ?></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="abouts_id" value="<?php echo $abouts_id ?>">
                    <br>
                    <button type="submit" name="abouts_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

