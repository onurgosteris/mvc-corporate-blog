<div class="block-header">
    <h2><b>GENEL SİTE AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Sitenizin genel ayarlarını buradan düzenleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>Açıklama</th>
                            <th>İçerik</th>
                            <th>Anahtar</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Açıklama</th>
                            <th>İçerik</th>
                            <th>Anahtar</th>
                            <th>Düzenle</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['adminSettings'] as $adminSetting) { ?>
                            <tr>
                                <td><?php echo $adminSetting['settings_description']; ?></td>
                                <td>
                                    <?php
                                    if ($adminSetting['settings_type'] == "file") {
                                        echo '<img width="150" height="100" src="../../../../public/images/settings/' . $adminSetting['settings_value'] . '" alt="Settings">';
                                    } else {
                                        echo $adminSetting['settings_value'];
                                    }
                                    ?>

                                </td>
                                <td><?php echo $adminSetting['settings_key']; ?></td>
                                <td align="center">
                                    <a href="/ogpanel/settings/update/<?php echo $adminSetting['settings_id']; ?>">
                                        <button type="button" class="btn btn-success waves-effect">
                                            <i class="material-icons">settings</i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

