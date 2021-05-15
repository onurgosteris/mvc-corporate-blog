<!-- Contact Start -->
<div class="container-fluid pt-0">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">BİZE ULAŞIN</h5>
        <h1 class="m-0">AŞAĞIDAKİ FORMU DOLDURARAK BİZE MESAJINIZI BIRAKIN</h1>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <iframe style="width: 100%; height: 500px;"
                    src="https://maps.google.com/maps?q=<?php echo $data['google_map'] ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-12">
            <div class="contact-form bg-white">
                <div id="success">
                    <?php
                    if (isset($_SESSION['messageManagement'])) {
                        islem_sonucu();
                    }
                    ?>
                </div>
                <form action="<?php echo URL; ?>iletisim/messageSend" method="POST" novalidate="novalidate">

                    <div class="control-group">
                        <input type="text" class="form-control" name="messages_namesurname" id="name"
                               placeholder="Ad ve Soyadınız" required="required"
                               data-validation-required-message="Lütfen ad ve soyadınızı girin."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" name="messages_email" id="email"
                               placeholder="Email adresiniz" required="required"
                               data-validation-required-message="Lütfen eposta adresinizi girin."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="messages_phone" id="phone"
                               placeholder="Telefon numaranız" required="required"
                               data-validation-required-message="Lütfen telefon numaranızı girin."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="6" name="messages_content" id="message"
                                  placeholder="Mesajınız" required="required"
                                  data-validation-required-message="Lütfen mesajını yazın."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <input type="hidden" name="messages_ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
                    <div>
                        <button class="btn btn-primary" type="submit" name="messages_send" id="sendMessageButton">
                            Gönder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->