<?php
function islem_sonucu(){
    if (isset($_SESSION['messageManagement']['status'])) {
        if ($_SESSION['messageManagement']['status'] == TRUE) {
            echo '<div class="alert alert-success"> 
                                <strong>İşlem Başarılı!</strong> Gerçekleştirdiğiniz işlem başarıyla tamamlandı.
                            </div>';
        } elseif ($_SESSION['messageManagement']['status'] == FALSE) {
            echo '<div class="alert alert-danger">
                                <strong>İşlem Başarısız!</strong> İşlem gerçekleştirilirken hata oluştu.
                                </div>';
        } else {
            echo '<div class="alert alert-warning">
                                <strong>CEVAP ALINAMADI!</strong> İşlem gerçekleştirilirken cevap alınamadı. İşlem tamamlanmış veya tamamlanmamış olabilir.
                                </div>';
        }
        unset($_SESSION['messageManagement']);
    }
}

?>