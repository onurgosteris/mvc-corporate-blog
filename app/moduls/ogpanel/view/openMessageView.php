<?php extract($data['messages_detail']) ?>
<div class="block-header">
    <h2><b>MESAJ DETAYI</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <small>Mesajın içeriğini değiştiremezsiniz.</small>
                </h2>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <form>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" disabled value="<?php echo $messages_id ?>" class="form-control">
                            <label class="form-label">Mesaj İD</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" disabled value="<?php echo $messages_namesurname ?>" class="form-control">
                            <label class="form-label">Mesaj AD SOYAD</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" disabled value="<?php echo $messages_phone ?>" class="form-control">
                            <label class="form-label">Mesaj Telefon Numarası</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" disabled value="<?php echo $messages_email ?>" class="form-control">
                            <label class="form-label">Mesaj Email</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" disabled value="<?php echo $messages_ip ?>" class="form-control">
                            <label class="form-label">Mesaj İP Adresi</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">Mesaj İçeriği</label>
                        <div class="form-line">
                            <textarea disabled id="ckeditor" class="form-control" ><?php echo $messages_content; ?></textarea>
                        </div>
                    </div>

                    <a href="/ogpanel/messages/delete/<?php echo $messages_id; ?>" class="btn btn-danger m-t-15 waves-effect">MESAJI SİL</a>
                </form>
            </div>
        </div>
    </div>
</div>

