<?php extract($data['menu_detay']); ?>
<div class="block-header">
    <h2><b>MENÜ AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile menüyü güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/menu/update/menuUpdateOp" method="POST" enctype="multipart/form-data">

                    <div class="form-group form-float">
                        <label class="form-label">Üst Menü</label><br>
                        <select name="menu_ust">
                            <option selected value="0">Yok</option>
                            <?php foreach ($data['ust_menuler'] as $ust_menuler){
                                if($ust_menuler['menu_id']==$menu_id){
                                    continue;
                                }
                                ?>
                            <option <?php echo $menu_ust == $ust_menuler['menu_id'] ? "selected" : null;  ?>  value="<?php echo $ust_menuler['menu_id'] ?>"><?php echo $ust_menuler['menu_ad']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="menu_ad"
                                   value="<?php echo $menu_ad ?>" class="form-control">
                            <label class="form-label">Menü Adı</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="menu_url"
                                   value="<?php echo $menu_url ?>" class="form-control">
                            <label class="form-label">Menünün gideceği url</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="menu_sira"
                                   value="<?php echo $menu_sira ?>" class="form-control">
                            <label class="form-label">Menü Sıra</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">Menü Durum</label><br>
                        <select name="menu_durum" id="">
                            <option <?php echo $menu_durum == 1 ? "selected" : null; ?> value="1">Aktif</option>
                            <option <?php echo $menu_durum == 0 ? "selected" : null;; ?> value="0">Pasif</option>
                        </select>
                    </div>


                    <input type="hidden" name="menu_id" value="<?php echo $menu_id ?>">
                    <br>
                    <button type="submit" name="menu_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

