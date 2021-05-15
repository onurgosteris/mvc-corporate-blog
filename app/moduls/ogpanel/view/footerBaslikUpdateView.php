<?php extract($data['footerBaslik']); ?>
<div class="block-header">
    <h2><b>FOOTER BAŞLIK AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile footer başlığını güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/footerBaslik/update/footerBaslikUpdateOp" method="POST" enctype="multipart/form-data">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="footer_baslik"
                                   value="<?php echo $footer_baslik ?>" class="form-control">
                            <label class="form-label">Başlık</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="footer_sira"
                                   value="<?php echo $footer_sira ?>" class="form-control">
                            <label class="form-label">Sıra</label>
                        </div>
                    </div>

                    <input type="hidden" name="footer_baslik_id" value="<?php echo $footer_baslik_id ?>">
                    <br>
                    <button type="submit" name="footer_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

