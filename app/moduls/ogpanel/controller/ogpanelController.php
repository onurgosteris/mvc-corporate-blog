<?php


class ogpanelController extends mainController
{
    public function index()
    {
        $indexModel = new ogpanelModel();
        $data = $indexModel->indexModel();
        $this->callLayout("backend", "main", "ogpanel", "index", $data);
    }

    public function login()
    {
        $data = [];
        if (isset($_SESSION['admins'])) {
            header("location:/ogpanel");
        } else {
            $this->callView("ogpanel", "login", $data);
        }
    }

    public function loginControl()
    {
        $data = [];
        $loginControlModel = new ogpanelModel();
        $data = $loginControlModel->loginControl();
        $_SESSION['messageManagement'] = $data;
        if ($data['status']) {
            header("location:/ogpanel");
            //$this->callLayout("backend", "main", "ogpanel", "index", $data);
        } else {
            $this->callView("ogpanel", "login", $data);
        }
    }

    public function logout()
    {
        $data = [];
        $logout = new ogpanelModel();
        $logout->logout();
        $this->callView("ogpanel", "login", $data);
    }

    public function settings()
    {
        $data = [];
        $settingsModel = new ogpanelModel();
        $data['adminSettings'] = $settingsModel->settings();
        $this->callLayout("backend", "main", "ogpanel", "settings", $data);
    }

    public function settingsUpdate($settings_id)
    {
        $data = [];
        $settingsUpdateModel = new ogpanelModel();
        $data['settingsUpdate'] = $settingsUpdateModel->settingsUpdate($settings_id);
        $this->callLayout("backend", "main", "ogpanel", "settingsUpdate", $data);

    }

    public function settingsUpdateOp()
    {
        $settingsUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $settingsUpdateOpModel->settingsUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function admins()
    {
        $data = [];
        $adminsModel = new ogpanelModel();
        $data['admins'] = $adminsModel->admins();
        $this->callLayout("backend", "main", "ogpanel", "admins", $data);
    }

    public function adminsUpdate($admins_id)
    {
        $data = [];
        $adminsUpdateModel = new ogpanelModel();
        $data['adminsUpdate'] = $adminsUpdateModel->adminsUpdate($admins_id);
        $this->callLayout("backend", "main", "ogpanel", "adminsUpdate", $data);
    }

    public function adminsUpdateOp()
    {
        $adminsUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $adminsUpdateOpModel->adminsUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function adminsDelete($admins_id)
    {
        $adminsDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $adminsDeleteModel->adminsDelete($admins_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function adminsInsert()
    {
        $adminsInsertModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $adminsInsertModel->adminsInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    // KATEGORİLER

    public function kategori()
    {
        $data = [];
        $kategoriModel = new ogpanelModel();
        $data['kategori'] = $kategoriModel->kategori();
        $this->callLayout("backend", "main", "ogpanel", "kategori", $data);
    }

    public function kategoriInsert()
    {
        $kategoriInsertModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $kategoriInsertModel->kategoriInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function kategoriUpdate($kategori_id)
    {
        $data = [];
        $kategoriUpdateModel = new ogpanelModel();
        $data['kategoriUpdate'] = $kategoriUpdateModel->kategoriUpdate($kategori_id);
        $this->callLayout("backend", "main", "ogpanel", "kategoriUpdate", $data);
    }

    public function kategoriUpdateOp()
    {
        $data = [];
        $kategoriUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $kategoriUpdateOpModel->kategoriUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function kategoriDelete($kategori_id)
    {
        $data = [];
        $kategoriDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $kategoriDeleteModel->kategoriDelete($kategori_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }


    // BLOGLAR

    public function blogs()
    {
        $data = [];
        $blogsModel = new ogpanelModel();
        $data['blogs'] = $blogsModel->blogs();
        $data['kategoriler'] = $blogsModel->kategori();
        $this->callLayout("backend", "main", "ogpanel", "blogs", $data);
    }

    public function blogsInsert()
    {
        $blogsInsertModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $blogsInsertModel->blogsInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsUpdate($blogs_id)
    {
        $data = [];
        $blogsUpdateModel = new ogpanelModel();
        $data['blogsUpdate'] = $blogsUpdateModel->blogsUpdate($blogs_id);
        $data['kategoriler'] = $blogsUpdateModel->kategori();
        $this->callLayout("backend", "main", "ogpanel", "blogsUpdate", $data);
    }

    public function blogsUpdateOp()
    {
        $data = [];
        $blogsUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $blogsUpdateOpModel->blogsUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsDelete($blogs_id)
    {
        $data = [];
        $blogsDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $blogsDeleteModel->blogsDelete($blogs_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    // ABOUTS

    public function abouts()
    {
        $data = [];
        $aboutsModel = new ogpanelModel();
        $data['abouts'] = $aboutsModel->abouts();
        $this->callLayout("backend", "main", "ogpanel", "abouts", $data);
    }

    public function aboutsInsert()
    {
        $aboutsInsertModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $aboutsInsertModel->aboutsInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsUpdate($abouts_id)
    {
        $data = [];
        $aboutsUpdateModel = new ogpanelModel();
        $data['aboutsUpdate'] = $aboutsUpdateModel->aboutsUpdate($abouts_id);
        $this->callLayout("backend", "main", "ogpanel", "aboutsUpdate", $data);
    }

    public function aboutsUpdateOp()
    {
        $data = [];
        $aboutsUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $aboutsUpdateOpModel->aboutsUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsDelete($abouts_id)
    {
        $data = [];
        $aboutsDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $aboutsDeleteModel->aboutsDelete($abouts_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function menu()
    {
        $data = [];
        $menuModel = new ogpanelModel();
        $data['menu'] = $menuModel->menu();
        $ust_sayac = 0;
        $alt_sayac = 0;
        foreach ($data['menu'] as $menuler) {
            if ($menuler['menu_ust'] == 0) {
                $data['ust_menuler'][$ust_sayac] = $menuler;
                $ust_sayac++;
            } else {
                $data['alt_menuler'][$alt_sayac] = $menuler;
                $alt_sayac++;
            }
        }
        $this->callLayout("backend", "main", "ogpanel", "menu", $data);
    }

    public function menuInsert()
    {
        $menuInsert = new ogpanelModel();
        $_SESSION['messageManagement'] = $menuInsert->menuInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function menuUpdate($menu_id)
    {
        $data = [];
        $menuUpdate = new ogpanelModel();
        $data = $menuUpdate->menuUpdate($menu_id);
        $this->callLayout("backend", "main", "ogpanel", "menuUpdate", $data);
    }

    public function menuUpdateOp()
    {
        $data = [];
        $menuUpdateOp = new ogpanelModel();
        $_SESSION['messageManagement'] = $menuUpdateOp->menuUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function menuDelete($menu_id)
    {
        $menuDelete = new ogpanelModel();
        $_SESSION['messageManagement'] = $menuDelete->menuDelete($menu_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function sliders()
    {
        $slidersModel = new ogpanelModel();
        $data['sliders'] = $slidersModel->sliders();
        $this->callLayout("backend", "main", "ogpanel", "sliders", $data);
    }

    public function slidersInsert()
    {
        $slidersInsertModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $slidersInsertModel->slidersInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function slidersUpdate($sliders_id)
    {
        $slidersUpdateModel = new ogpanelModel();
        $data['slidersUpdate'] = $slidersUpdateModel->slidersUpdate($sliders_id);
        $this->callLayout("backend", "main", "ogpanel", "slidersUpdate", $data);
    }

    public function slidersUpdateOp()
    {
        $slidersUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $slidersUpdateOpModel->slidersUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function slidersDelete($sliders_id)
    {
        $slidersDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $slidersDeleteModel->slidersDelete($sliders_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function anasayfa()
    {
        $anasayfaModel = new ogpanelModel();
        $data['anasayfa'] = $anasayfaModel->anasayfa();
        foreach ($data['anasayfa'] as $key) {
            $data[$key['input_key']] = $key['input_value'];
        }
        $this->callLayout("backend", "main", "ogpanel", "anasayfa", $data);
    }

    public function anasayfaUpdateOp()
    {
        $anasayfaUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $anasayfaUpdateOpModel->anasayfaUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function footerBaslik()
    {
        $data = [];
        $footerBaslikModel = new ogpanelModel();
        $data['footer_baslik'] = $footerBaslikModel->footerBaslik();
        $this->callLayout("backend", "main", "ogpanel", "footerBaslik", $data);
    }

    public function footerBaslikUpdate($footer_baslik_id)
    {
        $footerBaslikUpdateModel = new ogpanelModel();
        $data['footerBaslik'] = $footerBaslikUpdateModel->footerBaslikUpdate($footer_baslik_id);
        $this->callLayout("backend", "main", "ogpanel", "footerBaslikUpdate", $data);
    }

    public function footerBaslikUpdateOp()
    {
        $footerBaslikUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $footerBaslikUpdateOpModel->footerBaslikUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function footerBaslikInsert()
    {
        $footerBaslikInsertModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $footerBaslikInsertModel->footerBaslikInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function footerBaslikDelete($footer_baslik_id)
    {
        $footerBaslikDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $footerBaslikDeleteModel->footerBaslikDelete($footer_baslik_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }


    // FOOTER ALT BAŞLIKLAR


    public function footerAltBaslik()
    {
        $data = [];
        $footerAltBaslikModel = new ogpanelModel();
        $data['footer_baslik'] = $footerAltBaslikModel->footerAltBaslik();
        $data['footerBasliklar'] = $footerAltBaslikModel->footerBaslik();
        $this->callLayout("backend", "main", "ogpanel", "footerAltBaslik", $data);
    }

    public function footerAltBaslikUpdate($footer_baslik_id)
    {
        $footerAltBaslikUpdateModel = new ogpanelModel();
        $data['footerAltBaslik'] = $footerAltBaslikUpdateModel->footerAltBaslikUpdate($footer_baslik_id);
        $data['footerBasliklar'] = $footerAltBaslikUpdateModel->footerBaslik();
        $this->callLayout("backend", "main", "ogpanel", "footerAltBaslikUpdate", $data);
    }

    public function footerAltBaslikUpdateOp()
    {
        $footerAltBaslikUpdateOpModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $footerAltBaslikUpdateOpModel->footerAltBaslikUpdateOp();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function footerAltBaslikInsert()
    {
        $footerAltBaslikInsertModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $footerAltBaslikInsertModel->footerAltBaslikInsert();
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function footerAltBaslikDelete($footer_baslik_id)
    {
        $footerAltBaslikDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $footerAltBaslikDeleteModel->footerAltBaslikDelete($footer_baslik_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function messages()
    {
        $messagesModel = new ogpanelModel();
        $data['messages'] = $messagesModel->messages();
        $this->callLayout("backend", "main", "ogpanel", "messages", $data);
    }

    public function openMessage($messages_id)
    {
        $messageOpenModel = new ogpanelModel();
        $data['messages_detail'] = $messageOpenModel->openMessage($messages_id);
        $this->callLayout("backend", "main", "ogpanel", "openMessage", $data);
    }

    public function messagesDelete($messages_id)
    {
        $messagesDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $messagesDeleteModel->deleteMessage($messages_id);
        header("location:/ogpanel/messages");
        exit;
    }

    public function subscribers()
    {
        $subscribersModel = new ogpanelModel();
        $data['subscribers'] = $subscribersModel->subscribers();
        $this->callLayout("backend", "main", "ogpanel", "subscribers", $data);
    }

    public function subscribersDelete($subscribers_id)
    {
        $subscribersDeleteModel = new ogpanelModel();
        $_SESSION['messageManagement'] = $subscribersDeleteModel->subscribersDelete($subscribers_id);
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function bilgilendirme()
    {
        $data=[];
        $this->callLayout("backend", "main", "ogpanel", "bilgilendirme", $data);
    }


}