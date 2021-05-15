<?php extract($data['kategoriUpdate']); ?>
<div class="block-header">
    <h2><b>KATEGORİ AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile kategoriyi güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/kategori/update/kategoriUpdateOp" method="POST" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="kategori_title" value="<?php echo $kategori_title ?>" required class="form-control">
                            <label class="form-label">Kategori Title</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="kategori_slug" required value="<?php echo $kategori_slug ?>" class="form-control">
                            <label class="form-label">Kategori Seo Url (Boş bırakırsanız başlığa göre yazılır. <b>Var Olan bir url'yi girmeyin!</b>)</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="kategori_description" value="<?php echo $kategori_description ?>" required class="form-control">
                            <label class="form-label">Kategori Açıklaması</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="kategori_keywords" value="<?php echo $kategori_keywords ?>" required class="form-control">
                            <label class="form-label">Kategori Anahtar Kelimeleri(Virgül ile ayırın.)</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="kategori_name" value="<?php echo $kategori_name ?>" required class="form-control">
                            <label class="form-label">Kategori Adı</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="kategori_must" value="<?php echo $kategori_must ?>" required class="form-control">
                            <label class="form-label">Kategori Sırası</label>
                        </div>
                    </div>


                    <input type="hidden" name="kategori_id" value="<?php echo $kategori_id ?>">
                    <br>
                    <button type="submit" name="kategori_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

