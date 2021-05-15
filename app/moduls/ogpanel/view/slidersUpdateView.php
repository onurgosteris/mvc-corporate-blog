<?php extract($data['slidersUpdate']); ?>
<div class="block-header">
    <h2><b>SLİDER AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile slider ayarlarınızı güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/sliders/update/slidersUpdateOp" method="POST" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <label class="form-label">Resim</label>
                        <div class="form-line">
                            <img width="800" src="../../../../public/images/sliders/<?php echo $sliders_file; ?>"
                                 alt="Admin">
                            <br><br>
                            <input type="file" name="sliders_file">
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="sliders_title"
                                   value="<?php echo $sliders_title ?>" class="form-control">
                            <label class="form-label">Slider Başlık</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="sliders_content" value="<?php echo $sliders_content ?>" class="form-control">
                            <label class="form-label">Slider Yazısı</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="sliders_buton" value="<?php echo $sliders_buton ?>" class="form-control">
                            <label class="form-label">Slider Butonu</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="sliders_url" value="<?php echo $sliders_url ?>" class="form-control">
                            <label class="form-label">Slider Buton Url</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="sliders_must" value="<?php echo $sliders_must ?>" required class="form-control">
                            <label class="form-label">Slider Sıra</label>
                        </div>
                    </div>


                    <input type="hidden" name="sliders_id" value="<?php echo $sliders_id ?>">
                    <input type="hidden" name="delete_file" value="<?php echo $sliders_file; ?>">
                    <br>
                    <button type="submit" name="sliders_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

