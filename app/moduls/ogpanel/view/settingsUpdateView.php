<?php extract($data['settingsUpdate']); ?>
<div class="block-header">
    <h2><b>SİTE AYARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile site ayarlarınızı güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/settings/update/settingsUpdateOp" method="POST" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" disabled name="settings_description"
                                   value="<?php echo $settings_description ?>" class="form-control">
                            <label class="form-label">Açıklama</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <?php

                            if ($settings_type == "text") {
                                echo '<input type="text" name="settings_value" value="'.$settings_value.'" class="form-control">';
                                echo '<label class="form-label">İçerik</label>';
                            } elseif ($settings_type == "code") {
                                echo '<textarea name="settings_value" style="width:100%;" rows="15">'.$settings_value.'</textarea>';
                            } elseif ($settings_type == "ckeditor") {
                                echo '<textarea name="settings_value" id="ckeditor" cols="5" rows="5" >'.$settings_value.'</textarea>';
                            } elseif ($settings_type == "file") {
                                echo '<img src="../../../../public/images/settings/' . $settings_value . '" alt="Settings"><br><br>';
                                echo '<input type="file" required name="settings_value">';
                                echo '<input type="hidden" name="delete_file" value="'.$settings_value.'">';
                            }
                            ?>
                        </div>
                    </div>
                    <input type="hidden" name="settings_id" value="<?php echo $settings_id ?>">
                    <br>
                    <button type="submit" name="settings_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE</button>
                </form>
            </div>
        </div>
    </div>
</div>

