<?php extract($data['adminsUpdate']); ?>
<div class="block-header">
    <h2><b>YÖNETİCİ AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile yönetici ayarlarınızı güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/admins/update/adminsUpdateOp" method="POST" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <label class="form-label">Resim</label>
                        <div class="form-line">
                            <img width="80" src="../../../../public/images/admins/<?php echo $admins_file; ?>"
                                 alt="Admin">
                            <br><br>
                            <input type="file" name="admins_file">
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="admins_namesurname"
                                   value="<?php echo $admins_namesurname ?>" class="form-control">
                            <label class="form-label">Ad Soyad</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="admins_username"
                                   value="<?php echo $admins_username ?>" class="form-control">
                            <label class="form-label">Yönetici Adı</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" name="admins_pass" class="form-control">
                            <label class="form-label">Şifre (Güncellemek istemiyorsanız boş bırakın)</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Yönetici Durumu</label>
                            <br><br>
                            <select name="admins_status">
                                <option <?php echo $admins_status == 1 ? "selected" : null; ?> value="1">Aktif</option>
                                <option <?php echo $admins_status == 0 ? "selected" : null; ?> value="0">Pasif</option>
                            </select>
                        </div>
                    </div>


                    <input type="hidden" name="admins_id" value="<?php echo $admins_id ?>">
                    <input type="hidden" name="delete_file" value="<?php echo $admins_file; ?>">
                    <br>
                    <button type="submit" name="admins_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

