<div class="block-header">
    <h2><b>MESAJLAR</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>GELEN MESAJLAR</h2>
             </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>Tarih</th>
                            <th>Ad Soyad</th>
                            <th>Mesaj</th>
                            <th>Detay</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Tarih</th>
                            <th>Ad Soyad</th>
                            <th>Mesaj</th>
                            <th>Detay</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['messages'] as $messages) { ?>
                            <tr>
                                <td><?php echo $messages['messages_date']; ?></td>
                                <td><?php echo $messages['messages_namesurname']; ?></td>
                                <td><?php echo mb_strcut($messages['messages_content'],0,50) ?>...</td>

                                <td align="center">
                                    <a href="/ogpanel/messages/open/<?php echo $messages['messages_id'] ?>">
                                        <button type="button" class="btn btn-success waves-effect">
                                            <i class="material-icons">mail</i>
                                        </button>
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="/ogpanel/messages/delete/<?php echo $messages['messages_id'] ?>">
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