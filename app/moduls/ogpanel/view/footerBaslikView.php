 <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button class="btn btn-success waves-effect m-b-15" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        FOOTER'A BAŞLIK EKLE
                    </button>
                </h2>
                <div class="collapse" id="collapseExample">
                    <form action="/ogpanel/footerBaslik/insert/footerBaslikInsert" method="POST"
                          enctype="multipart/form-data">
                        <br>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="footer_baslik" required class="form-control">
                                <label class="form-label">Başlık Adı</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="footer_sira" required class="form-control">
                                <label class="form-label">Başlık Sırası</label>
                            </div>
                        </div>

                        <button type="submit" name="footer_baslik_insert" class="btn btn-success m-t-15 waves-effect">
                            MENÜ EKLE
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
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>BAŞLIK SIRASI</th>
                            <th>FOOTER BAŞLIĞI</th>
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['footer_baslik'] as $footer_baslik) { ?>
                        <tr>
                            <td><?php echo $footer_baslik['footer_sira'] ?></td>
                            <td><?php echo $footer_baslik['footer_baslik']; ?></td>
                            <td align="center">
                                <a href="/ogpanel/footerBaslik/update/<?php echo $footer_baslik['footer_baslik_id']; ?> ">
                                    <button type="button" class="btn btn-success waves-effect">
                                        <i class="material-icons">settings</i>
                                    </button>
                                </a>
                            </td>
                            <td align="center">
                                <a href="/ogpanel/footerBaslik/delete/<?php echo $footer_baslik['footer_baslik_id']; ?> ">
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


