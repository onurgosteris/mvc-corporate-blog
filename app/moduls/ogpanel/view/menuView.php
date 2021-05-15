<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button class="btn btn-success waves-effect m-b-15" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        YENİ MENÜ EKLE
                    </button>
                </h2>
                <div class="collapse" id="collapseExample">
                    <form action="/ogpanel/menu/insert/menuInsert" method="POST"
                          enctype="multipart/form-data">
                        <br>
                        <div class="form-group form-float">
                            <label class="form-label">Üst Menü</label><br>
                            <select name="menu_ust">
                                <option selected value="0">Yok</option>
                                <?php foreach ($data['ust_menuler'] as $menuler) { ?>
                                    <option value="<?php echo $menuler['menu_id'] ?>"><?php echo $menuler['menu_ad'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="menu_ad" required class="form-control">
                                <label class="form-label">Menü Adı</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="menu_url" required class="form-control">
                                <label class="form-label">Menü URL</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="menu_sira" required class="form-control">
                                <label class="form-label">Menü Sıra</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <label class="form-label">Menü Durum</label>
                            <select name="menu_durum" id="">
                                <option selected value="1">Aktif</option>
                                <option value="0">Pasif</option>
                            </select>
                        </div>

                        <button type="submit" name="menu_insert" class="btn btn-success m-t-15 waves-effect">
                            MENÜ EKLE
                        </button>
                    </form>
                </div>
            </div>
            <?php islem_sonucu(); ?>
            <div class="body">
                <div class="table-responsive">
                    <h2 align="center">ANA MENÜLER</h2>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>MENÜ SIRA</th>
                            <th>MENÜ AD</th>
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>MENÜ SIRA</th>
                            <th>MENÜ AD</th>
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['ust_menuler'] as $menuler) { ?>
                        <tr>
                            <td><?php echo $menuler['menu_sira'] ?></td>
                            <td><?php echo $menuler['menu_ad']; ?></td>
                            <td align="center">
                                <a href="/ogpanel/menu/update/<?php echo $menuler['menu_id']; ?> ">
                                    <button type="button" class="btn btn-success waves-effect">
                                        <i class="material-icons">settings</i>
                                    </button>
                                </a>
                            </td>
                            <td align="center">
                                <a href="/ogpanel/menu/delete/<?php echo $menuler['menu_id']; ?> ">
                                    <button type="button" class="btn bg-red waves-effect">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </a>
                            </td>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <h2 align="center">ALT MENÜLER</h2>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>MENÜ SIRA</th>
                            <th>MENÜ AD</th>
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>MENÜ SIRA</th>
                            <th>MENÜ AD</th>
                            <th>DÜZENLE</th>
                            <th>SİL</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        if(isset($data['alt_menuler'])){
                        foreach ($data['alt_menuler'] as $menuler) { ?>
                        <tr>
                            <td><?php echo $menuler['menu_sira'] ?></td>
                            <td><?php echo $menuler['menu_ad']; ?></td>
                            <td align="center">
                                <a href="/ogpanel/menu/update/<?php echo $menuler['menu_id']; ?> ">
                                    <button type="button" class="btn btn-success waves-effect">
                                        <i class="material-icons">settings</i>
                                    </button>
                                </a>
                            </td>
                            <td align="center">
                                <a href="/ogpanel/menu/delete/<?php echo $menuler['menu_id']; ?> ">
                                    <button type="button" class="btn bg-red waves-effect">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </a>
                            </td>
                            <?php } }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


