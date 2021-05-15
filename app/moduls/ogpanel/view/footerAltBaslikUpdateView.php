<?php extract($data['footerAltBaslik']); ?>
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
                <form action="/ogpanel/footerAltBaslik/update/footerAltBaslikUpdateOp" method="POST"
                      enctype="multipart/form-data">

                    <div class="form-group form-float">
                        <label class="form-label">FOOTER BAŞLIĞI</label><br>
                        <select name="footer_baslik">
                            <?php foreach ($data['footerBasliklar'] as $footer_basliklar) { ?>
                                <option <?php echo $footer_baslik == $footer_basliklar['footer_baslik_id'] ? "selected" : null; ?>
                                        value="<?php echo $footer_basliklar['footer_baslik_id'] ?>"><?php echo $footer_basliklar['footer_baslik']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="footer_ad"
                                   value="<?php echo $footer_ad ?>" class="form-control">
                            <label class="form-label">Başlık</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="footer_url"
                                   value="<?php echo $footer_url ?>" class="form-control">
                            <label class="form-label">Başlık URL</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="footer_sira"
                                   value="<?php echo $footer_sira ?>" class="form-control">
                            <label class="form-label">Sıra</label>
                        </div>
                    </div>

                    <input type="hidden" name="footer_id" value="<?php echo $footer_id ?>">
                    <br>
                    <button type="submit" name="footer_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

