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
                <div class="clearfix m-b-20">
                    <div class="dd">
                        <ol class="dd-list">
                            <?php foreach ($data['ust_menuler'] as $menu) { ?>
                                <li class="dd-item" data-id="<?php echo $menu['menu_ad']; ?>">
                                    <div class="dd-handle"><?php echo $menu['menu_ad']?></div>
                                    <?php $ust_menu = array_search($menu['menu_id'], array_column($data['alt_menuler'], 'menu_ust'));
                                    if (is_int($ust_menu)) { ?>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="345">
                                                <div class="dd-handle"><?php echo $data['alt_menuler'][$ust_menu]['menu_ad'] ?></div>
                                            </li>
                                        </ol>
                                        <?php
                                        //ALT TAKİ Lİ YE DİKKAT ET
                                    } ?>
                                </li>
                            <?php } ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


