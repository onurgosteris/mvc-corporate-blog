<div class="block-header">
    <h2><b>YÖNETİCİLER</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button class="btn btn-success waves-effect m-b-15" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        YÖNETİCİ EKLE
                    </button>
                </h2>

                <div class="collapse" id="collapseExample">
                        <form action="/ogpanel/admins/insert/adminsInsert" method="POST"
                              enctype="multipart/form-data">
                            <div class="form-group form-float">
                                <label class="form-label">Resim</label>
                                <div class="form-line">
                                    <input required type="file" name="admins_file">
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="admins_namesurname" required class="form-control">
                                    <label class="form-label">Ad Soyad</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="admins_username" required class="form-control">
                                    <label class="form-label">Yönetici Adı</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" name="admins_pass" required class="form-control">
                                    <label class="form-label">Şifre</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Yönetici Durumu</label>
                                    <br><br>
                                    <select required name="admins_status">
                                        <option selected value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" name="admins_insert" class="btn btn-success m-t-15 waves-effect">
                                KAYDET
                            </button>
                        </form>
                </div>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Kullanıcı Adı</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Kullanıcı Adı</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['admins'] as $admins) { ?>
                            <tr>
                                <td><?php echo $admins['admins_namesurname']; ?></td>
                                <td><?php echo $admins['admins_username']; ?></td>
                                <td align="center">
                                    <a href="/ogpanel/admins/update/<?php echo $admins['admins_id'] ?>">
                                        <button type="button" class="btn btn-success waves-effect">
                                            <i class="material-icons">settings</i>
                                        </button>
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="/ogpanel/admins/delete/<?php echo $admins['admins_id'] ?>">
                                        <button type="button" class="btn bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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

