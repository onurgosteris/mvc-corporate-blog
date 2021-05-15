<div class="block-header">
    <h2><b>BLOG YAZILARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button class="btn btn-success waves-effect m-b-15" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        BLOG EKLE
                    </button>
                </h2>

                <div class="collapse" id="collapseExample">
                        <form action="/ogpanel/blogs/insert/blogsInsert" method="POST"
                              enctype="multipart/form-data">

                            <div class="form-group form-float">
                                <label class="form-label">Kategori</label><br>
                                <select name="blogs_kategori">
                                     <?php foreach ($data['kategoriler'] as $kategoriler) { ?>
                                        <option value="<?php echo $kategoriler['kategori_id'] ?>"><?php echo $kategoriler['kategori_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group form-float">
                                <label class="form-label">Resim</label>
                                <div class="form-line">
                                    <input required type="file" name="blogs_file">
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="blogs_title" required class="form-control">
                                    <label class="form-label">Blog Başlığı</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="blogs_description" required class="form-control">
                                    <label class="form-label">Blog Açıklaması</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="blogs_keyword" required class="form-control">
                                    <label class="form-label">Blog Anahtar Kelimeleri</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="blogs_slug" class="form-control">
                                    <label class="form-label">Blog Seo Url (Boş bırakırsanız başlığa göre yazılır. <b>Var Olan bir url'yi girmeyin!</b>)</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="blogs_must" required class="form-control">
                                    <label class="form-label">Blog Sırası</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label class="form-label">İçerik</label>
                                <div class="form-line">
                                    <textarea name="blogs_content" id="ckeditor"></textarea>
                                </div>
                            </div>

                            <button type="submit" name="blogs_insert" class="btn btn-success m-t-15 waves-effect">
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
                            <th>İD</th>
                            <th>Başlık</th>
                            <th>Tarih</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sıra</th>
                            <th>İD</th>
                            <th>Başlık</th>
                            <th>Tarih</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['blogs'] as $blogs) { ?>
                            <tr>
                                <td><?php echo $blogs['blogs_must']; ?></td>
                                <td><?php echo $blogs['blogs_id']; ?></td>
                                <td><?php echo $blogs['blogs_title']; ?></td>
                                <td><?php echo $blogs['blogs_time']; ?></td>
                                <td align="center">
                                    <a href="/ogpanel/blogs/update/<?php echo $blogs['blogs_id'] ?>">
                                        <button type="button" class="btn btn-success waves-effect">
                                            <i class="material-icons">settings</i>
                                        </button>
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="/ogpanel/blogs/delete/<?php echo $blogs['blogs_id'] ?>">
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