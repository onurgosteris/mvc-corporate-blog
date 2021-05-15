<div class="block-header">
    <h2><b>ABONELER</b></h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>MAİL BÜLTEN ABONELERİ</h2>
             </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>İD</th>
                            <th>Abonelik Tarihi</th>
                            <th>Mail Adresi</th>
                            <th>İP Adresi</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>İD</th>
                            <th>Abonelik Tarihi</th>
                            <th>Mail Adresi</th>
                            <th>İP Adresi</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['subscribers'] as $subscribers) { ?>
                            <tr>
                                <td><?php echo $subscribers['subscribers_id']; ?></td>
                                <td><?php echo $subscribers['subscribers_date']; ?></td>
                                <td><?php echo $subscribers['subscribers_mail']; ?></td>
                                <td><?php echo $subscribers['subscribers_ip']; ?></td>
                                <td align="center">
                                    <a href="/ogpanel/subscribers/delete/<?php echo $subscribers['subscribers_id'] ?>">
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