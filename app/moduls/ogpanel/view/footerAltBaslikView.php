<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button class="btn btn-success waves-effect m-b-15" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        FOOTER'A BUTON EKLE
                    </button>
                </h2>
                <div class="collapse" id="collapseExample">
                    <form action="/ogpanel/footerAltBaslik/insert/footerAltBaslikInsert" method="POST"
                          enctype="multipart/form-data">
                        <br>

                        <div class="form-group form-float">
                            <label class="form-label">FOOTER BAŞLIĞI</label><br>
                            <select name="footer_baslik">
                                <?php foreach ($data['footerBasliklar'] as $footer_basliklar) { ?>
                                    <option value="<?php echo $footer_basliklar['footer_baslik_id'] ?>"><?php echo $footer_basliklar['footer_baslik']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="footer_ad" required class="form-control">
                                <label class="form-label">Buton Adı</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="footer_url" required class="form-control">
                                <label class="form-label">Buton URL</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="footer_sira" required class="form-control">
                                <label class="form-label">Buton Sırası</label>
                            </div>
                        </div>

                        <button type="submit" name="footer_baslik_insert" class="btn btn-success m-t-15 waves-effect">
                            FOOTER'A BUTONU EKLE
                        </button>
                    </form>
                </div>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <div class="table-responsive">
                    <h2 align="center">FOOTER BAŞLIKLARI</h2>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>BAŞLIK SIRASI</th>
                            <th>FOOTER BAŞLIĞI</th>
                            <th>FOOTER ALT BAŞLIĞI</th>
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>BAŞLIK SIRASI</th>
                            <th>FOOTER BAŞLIĞI</th>
                            <th>FOOTER ALT BAŞLIĞI</th>
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['footer_baslik'] as $footer_baslik) { ?>
                        <tr>
                            <td><?php echo $footer_baslik['footer_sira'] ?></td>
                            <td>
                                <?php
                                foreach ($data['footerBasliklar'] as $key => $value) {
                                    if ($value['footer_baslik_id'] == $footer_baslik['footer_baslik']) {
                                        echo $value['footer_baslik'];
                                    }
                                }
                                ?>
                            </td>
                            <td><?php echo $footer_baslik['footer_ad']; ?></td>
                            <td align="center">
                                <a href="/ogpanel/footerAltBaslik/update/<?php echo $footer_baslik['footer_id']; ?> ">
                                    <button type="button" class="btn btn-success waves-effect">
                                        <i class="material-icons">settings</i>
                                    </button>
                                </a>
                            </td>
                            <td align="center">
                                <a href="/ogpanel/footerAltBaslik/delete/<?php echo $footer_baslik['footer_id']; ?> ">
                                    <button type="button" class="btn bg-red waves-effect">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </a>
                            </td>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


