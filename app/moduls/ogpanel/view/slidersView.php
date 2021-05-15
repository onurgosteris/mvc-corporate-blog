<div class="block-header">
    <h2><b>SAYFALAR</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button class="btn btn-success waves-effect m-b-15" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        SLİDER EKLE
                    </button>
                </h2>

                <div class="collapse" id="collapseExample">
                        <form action="/ogpanel/sliders/insert/slidersInsert" method="POST"
                              enctype="multipart/form-data">

                            <div class="form-group form-float">
                                <label class="form-label">Slider Resimi</label>
                                <div class="form-line">
                                    <input type="file" name="sliders_file">

                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="sliders_title" class="form-control">
                                    <label class="form-label">Slider Başlığı</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="sliders_content" class="form-control">
                                    <label class="form-label">Slider Yazısı</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="sliders_buton" class="form-control">
                                    <label class="form-label">Slider Butonu</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="sliders_url" class="form-control">
                                    <label class="form-label">Slider Buton Url</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" name="sliders_must" required class="form-control">
                                    <label class="form-label">Slider Sıra</label>
                                </div>
                            </div>

                            <button type="submit" name="sliders_insert" class="btn btn-success m-t-15 waves-effect">
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
                            <th>Sıra</th>
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sıra</th>
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['sliders'] as $sliders) { ?>
                            <tr>
                                <td><?php echo $sliders['sliders_must']; ?></td>
                                <td><img width="250" src="../../../../public/images/sliders/<?php echo $sliders['sliders_file'] ?>" alt=""></td>
                                <td><?php echo $sliders['sliders_title']; ?></td>
                                <td align="center">
                                    <a href="/ogpanel/sliders/update/<?php echo $sliders['sliders_id'] ?>">
                                        <button type="button" class="btn btn-success waves-effect">
                                            <i class="material-icons">settings</i>
                                        </button>
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="/ogpanel/sliders/delete/<?php echo $sliders['sliders_id'] ?>">
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