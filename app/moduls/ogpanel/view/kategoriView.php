<div class="block-header">
    <h2><b>KATEGORİLER</b></h2>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button class="btn btn-success waves-effect m-b-15" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        KATEGORİ EKLE
                    </button>
                </h2>

                <div class="collapse" id="collapseExample">
                        <form action="/ogpanel/kategori/insert/kategoriInsert" method="POST"
                              enctype="multipart/form-data">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="kategori_title" required class="form-control">
                                    <label class="form-label">Kategori Title</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="kategori_slug" class="form-control">
                                    <label class="form-label">Kategori Seo Url (Boş bırakırsanız başlığa göre yazılır. <b>Var Olan bir url'yi girmeyin!</b>)</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="kategori_description" required class="form-control">
                                    <label class="form-label">Kategori Açıklaması</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="kategori_keywords" required class="form-control">
                                    <label class="form-label">Kategori Anahtar Kelimeleri(Virgül ile ayırın)</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="kategori_name" required class="form-control">
                                    <label class="form-label">Kategori Adı</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" name="kategori_must" required class="form-control">
                                    <label class="form-label">Kategori Sırası</label>
                                </div>
                            </div>
                            <button type="submit" name="kategori_insert" class="btn btn-success m-t-15 waves-effect">
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
                            <th>Başlık</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sıra</th>
                            <th>Başlık</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['kategori'] as $kategori) { ?>
                            <tr>
                                <td><?php echo $kategori['kategori_must']; ?></td>
                                <td><?php echo $kategori['kategori_name']; ?></td>
                                <td align="center">
                                    <a href="/ogpanel/kategori/update/<?php echo $kategori['kategori_id'] ?>">
                                        <button type="button" class="btn btn-success waves-effect">
                                            <i class="material-icons">settings</i>
                                        </button>
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="/ogpanel/kategori/delete/<?php echo $kategori['kategori_id'] ?>">
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