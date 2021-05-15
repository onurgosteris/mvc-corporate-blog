<?php extract($data['blogsUpdate']); ?>
<div class="block-header">
    <h2><b>BLOG İÇERİK AYARLARI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Aşağıdaki form ile içeriğinizi güncelleyebilirsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form action="/ogpanel/blogs/update/blogsUpdateOp" method="POST" enctype="multipart/form-data">

                    <div class="form-group form-float">
                        <label class="form-label">Kategori</label><br>
                        <select name="blogs_kategori">
                            <?php foreach ($data['kategoriler'] as $kategoriler){

                                ?>
                                <option <?php echo $blogs_kategori == $kategoriler['kategori_id'] ? "selected" : null;  ?>  value="<?php echo $kategoriler['kategori_id'] ?>"><?php echo $kategoriler['kategori_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="form-group form-float">
                        <label class="form-label">Resim</label>
                        <div class="form-line">
                            <img width="80" src="../../../../public/images/blogs/<?php echo $blogs_file; ?>"
                                 alt="Blog Resimi">
                            <br><br>
                            <input type="file" name="blogs_file">
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="blogs_title"
                                   value="<?php echo $blogs_title ?>" class="form-control">
                            <label class="form-label">Blog Başlığı</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="blogs_description"
                                   value="<?php echo $blogs_description ?>" class="form-control">
                            <label class="form-label">Blog Açıklaması</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="blogs_keyword"
                                   value="<?php echo $blogs_keyword ?>" class="form-control">
                            <label class="form-label">Blog Anahtar Kelimeleri</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="blogs_slug"
                                   value="<?php echo $blogs_slug ?>" class="form-control">
                            <label class="form-label">Blog Seo Url (BOŞ BIRAKIRSANIZ BAŞLIĞA GÖRE OLUŞTURUR.)</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="blogs_must"
                                   value="<?php echo $blogs_must ?>" class="form-control">
                            <label class="form-label">Blog Sıra</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">Blog İçerik</label>
                        <div class="form-line">
                            <textarea name="blogs_content" id="ckeditor"><?php echo $blogs_content; ?></textarea>
                        </div>
                    </div>


                    <input type="hidden" name="blogs_id" value="<?php echo $blogs_id ?>">
                    <input type="hidden" name="delete_file" value="<?php echo $blogs_file; ?>">
                    <br>
                    <button type="submit" name="blogs_update" class="btn btn-success m-t-15 waves-effect">GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

