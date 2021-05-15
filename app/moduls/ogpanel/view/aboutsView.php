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
                        SAYFA EKLE
                    </button>
                </h2>

                <div class="collapse" id="collapseExample">
                        <form action="/ogpanel/abouts/insert/aboutsInsert" method="POST"
                              enctype="multipart/form-data">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="abouts_title" required class="form-control">
                                    <label class="form-label">Sayfa Başlığı</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="abouts_description" required class="form-control">
                                    <label class="form-label">Sayfa Açıklaması</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="abouts_keywords" required class="form-control">
                                    <label class="form-label">Sayfa Anahtar kelimeleri</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="abouts_slug" class="form-control">
                                    <label class="form-label">Sayfa Seo Url (Boş bırakırsanız başlığa göre yazılır. <b>Var Olan bir url'yi girmeyin!</b>)</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label class="form-label">İçerik</label>
                                <div class="form-line">
                                    <textarea name="abouts_content" id="ckeditor"></textarea>
                                </div>
                            </div>

                            <button type="submit" name="abouts_insert" class="btn btn-success m-t-15 waves-effect">
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
                            <th>Başlık</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Başlık</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['abouts'] as $abouts) { ?>
                            <tr>
                                <td><?php echo $abouts['abouts_title']; ?></td>
                                <td align="center">
                                    <a href="/ogpanel/abouts/update/<?php echo $abouts['abouts_id'] ?>">
                                        <button type="button" class="btn btn-success waves-effect">
                                            <i class="material-icons">settings</i>
                                        </button>
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="/ogpanel/abouts/delete/<?php echo $abouts['abouts_id'] ?>">
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