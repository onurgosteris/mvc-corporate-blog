<?php


class ogpanelModel extends mainModel
{
    public function indexModel()
    {
        $sql = $this->db->read("blogs");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        $data['blog_sayisi'] = count($sql);

        $sql = $this->db->read("kategori");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        $data['kategori_sayisi'] = count($sql);

        $sql = $this->db->read("messages");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        $data['mesaj_sayisi'] = count($sql);

        $sql = $this->db->read("admins");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        $data['admin_sayisi'] = count($sql);

        $sql = $this->db->read("mail_subscribers");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        $data['abone_sayisi'] = count($sql);

        return $data;
    }

    public function loginControl()
    {
        $sonuc = $this->db->adminsLogin(htmlspecialchars($_POST['admins_username']),
            htmlspecialchars($_POST['admins_pass']));
        return $sonuc;
    }

    public function logout()
    {
        $this->db->adminLogout();
    }

    public function settings()
    {
        $data = $this->db->read("settings", [
            "columns_name" => "settings_must",
            "columns_sort" => "ASC"
        ]);

        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function settingsUpdate($settings_id)
    {
        $sql = $this->db->wread("settings", "settings_id", $settings_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function settingsUpdateOp()
    {
        $sql = $this->db->update("settings", $_POST, [
            "form_name" => "settings_update",
            "columns" => "settings_id",
            "dir" => "settings",
            "file_name" => "settings_value",
            "file_delete" => "delete_file"
        ]);

        return $sql;
    }

    public function admins()
    {
        $sql = $this->db->read("admins");
        return $sql;
    }

    public function adminsUpdate($admins_id)
    {
        $sql = $this->db->wread("admins", "admins_id", $admins_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function adminsUpdateOp()
    {
        $sql = $this->db->update("admins", $_POST, [
            "form_name" => "admins_update",
            "columns" => "admins_id",
            "dir" => "admins",
            "file_name" => "admins_file",
            "file_delete" => "delete_file",
            "pass" => "admins_pass"
        ]);
        return $sql;
    }

    public function adminsDelete($admins_id)
    {
        $sql = $this->db->delete("admins", "admins_id", $admins_id);
        return $sql;
    }

    public function adminsInsert()
    {
        $sql = $this->db->insert("admins", $_POST, [
            "form_name" => "admins_insert",
            "dir" => "admins",
            "file_name" => "admins_file",
            "pass" => "admins_pass"
        ]);
        return $sql;
    }

    // KATEGORİLER
    public function kategori()
    {
        $sql = $this->db->read("kategori");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function kategoriInsert()
    {
        $sql = $this->db->insert("kategori", $_POST, [
            "form_name" => "kategori_insert",
            "slug" => "kategori_slug",
            "title" => "kategori_title"
        ]);
        return $sql;
    }

    public function kategoriUpdate($kategori_id)
    {
        $sql = $this->db->wread("kategori", "kategori_id", $kategori_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function kategoriUpdateOp()
    {
        $sql = $this->db->update("kategori", $_POST, [
            "form_name" => "kategori_update",
            "slug" => "kategori_slug",
            "title" => "kategori_title",
            "file_name" => "kategori_file",
            "file_delete" => "delete_file",
            "dir" => "kategori",
            "columns" => "kategori_id"
        ]);
        return $sql;
    }

    public function kategoriDelete($kategori_id)
    {
        $sql = $this->db->delete("kategori", "kategori_id", $kategori_id);
        return $sql;
    }


    // BLOGLAR

    public function blogs()
    {
        $sql = $this->db->read("blogs", [
            "columns_name" => "blogs_must",
            "columns_sort" => "ASC"
        ]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function blogsInsert()
    {
        $sql = $this->db->insert("blogs", $_POST, [
            "form_name" => "blogs_insert",
            "dir" => "blogs",
            "slug" => "blogs_slug",
            "title" => "blogs_title",
            "file_name" => "blogs_file"
        ]);
        return $sql;
    }

    public function blogsUpdate($blogs_id)
    {
        $sql = $this->db->wread("blogs", "blogs_id", $blogs_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function blogsUpdateOp()
    {
        $sql = $this->db->update("blogs", $_POST, [
            "form_name" => "blogs_update",
            "slug" => "blogs_slug",
            "title" => "blogs_title",
            "file_name" => "blogs_file",
            "file_delete" => "delete_file",
            "dir" => "blogs",
            "columns" => "blogs_id"
        ]);
        return $sql;
    }

    public function blogsDelete($blogs_id)
    {
        $sql = $this->db->delete("blogs", "blogs_id", $blogs_id);
        return $sql;
    }

    // ABOUT

    public function abouts()
    {
        $sql = $this->db->read("abouts", [
            "columns_name" => "abouts_must",
            "columns_sort" => "ASC"
        ]);
        return $sql;
    }

    public function aboutsInsert()
    {
        $sql = $this->db->insert("abouts", $_POST, [
            "form_name" => "abouts_insert",
            "dir" => "abouts",
            "slug" => "abouts_slug",
            "title" => "abouts_title",
            "file_name" => "abouts_file"
        ]);
        return $sql;
    }

    public function aboutsUpdate($abouts_id)
    {
        $sql = $this->db->wread("abouts", "abouts_id", $abouts_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function aboutsUpdateOp()
    {
        $sql = $this->db->update("abouts", $_POST, [
            "form_name" => "abouts_update",
            "slug" => "abouts_slug",
            "title" => "abouts_title",
            "file_name" => "abouts_file",
            "file_delete" => "delete_file",
            "dir" => "abouts",
            "columns" => "abouts_id"
        ]);
        return $sql;
    }

    public function aboutsDelete($abouts_id)
    {
        $sql = $this->db->delete("abouts", "abouts_id", $abouts_id);
        return $sql;
    }

    public function menu()
    {
        $sql = $this->db->read("menu", [
            "columns_name" => "menu_sira",
            "columns_sort" => "ASC"
        ]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

//    public function menuSortable()
//    {
//        $data = json_decode($_POST['serializedData'], true);
//        for ($i = 0; $i < count($data); $i++) {
//            // Jsonu doğru diziye çevir
//            $dizi[$i] = $data[$i]["id"];
//        }
//        $sql = $this->db->orderUpdate("menu", $dizi, "menu_sira", "menu_ad");
//
//        return $sql;
//    }

    public function menuInsert()
    {
        $sql = $this->db->insert("menu", $_POST, [
            "form_name" => "menu_insert"
        ]);
        return $sql;
    }

    public function menuUpdate($menu_id)
    {
        $sql = $this->db->wread("menu", "menu_id", $menu_id);
        $data['menu_detay'] = $sql->fetch(PDO::FETCH_ASSOC);

        $sql = $this->db->wread("menu", "menu_ust", 0);
        $data['ust_menuler'] = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }

    public function menuUpdateOp()
    {
        $sql = $this->db->update("menu", $_POST, [
            "form_name" => "menu_update",
            "columns" => "menu_id"
        ]);
        return $sql;
    }

    public function menuDelete($menu_id)
    {
        $sql = $this->db->delete("menu", "menu_id", $menu_id);
        return $sql;
    }

    public function sliders()
    {
        $sql = $this->db->read("sliders", [
            "columns_name" => "sliders_must",
            "columns_sort" => "DESC"
        ]);
        return $sql;
    }

    public function slidersInsert()
    {
        $sql = $this->db->insert("sliders", $_POST, [
            "form_name" => "sliders_insert",
            "dir" => "sliders",
            "file_name" => "sliders_file"
        ]);
        return $sql;
    }

    public function slidersUpdate($sliders_id)
    {
        $sql = $this->db->wread("sliders", "sliders_id", $sliders_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function slidersUpdateOp()
    {
        $sql = $this->db->update("sliders", $_POST, [
            "form_name" => "sliders_update",
            "file_name" => "sliders_file",
            "file_delete" => "delete_file",
            "dir" => "sliders",
            "columns" => "sliders_id"
        ]);
        return $sql;
    }

    public function slidersDelete($sliders_id)
    {
        $sql = $this->db->delete("sliders", "sliders_id", "$sliders_id");
        return $sql;
    }

    public function anasayfa()
    {
        $sql = $this->db->read("anasayfa");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function anasayfaUpdateOp()
    {
        if (isset($_POST['anasayfa_update'])) {
            unset($_POST['anasayfa_update']);
            if (!empty($_FILES['hakkimizda_file']['name'])) {
                $name_y = $this->imageUpload(
                    $_FILES['hakkimizda_file']['name'],
                    $_FILES['hakkimizda_file']['size'],
                    $_FILES['hakkimizda_file']['tmp_name'],
                    "hakkimizda",
                    $_POST['delete_file']
                );
                if (isset($name_y['status'])) {
                    // YUKARIDAKİ İF İÇERİSİ PHP 8.0 A GÖRE YENİDEN YAZILDI
                    return ['status' => FALSE, 'error' => $name_y['error']];
                    exit;
                }
                $_POST['hakkimizda_file'] = $name_y;
                unset($_POST['delete_file']);
            } else {
                unset($_POST['delete_file']);

            }
        }
        $sql = $this->db->orderUpdate("anasayfa", $_POST, 'input_value', 'input_key');
        return $sql;
    }

    public function footerBaslik()
    {
        $sql = $this->db->read("footer_baslik");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    public function footerBaslikUpdate($footer_baslik_id)
    {
        $sql = $this->db->wread("footer_baslik", "footer_baslik_id", $footer_baslik_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function footerBaslikUpdateOp()
    {
        $sql = $this->db->update("footer_baslik", $_POST, [
            'form_name' => 'footer_update',
            'columns' => 'footer_baslik_id'
        ]);
        return $sql;
    }

    public function footerBaslikInsert()
    {
        $sql = $this->db->insert("footer_baslik", $_POST, [
            'form_name' => 'footer_baslik_insert'
        ]);
        return $sql;
    }

    public function footerBaslikDelete($footer_baslik_id)
    {
        $sql = $this->db->delete("footer_baslik", "footer_baslik_id", $footer_baslik_id);
        return $sql;
    }


    // FOOTER ALT BAŞLIK

    public function footerAltBaslik()
    {
        $sql = $this->db->read("footer_buton");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    public function footerAltBaslikUpdate($footer_baslik_id)
    {
        $sql = $this->db->wread("footer_buton", "footer_id", $footer_baslik_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function footerAltBaslikUpdateOp()
    {
        $sql = $this->db->update("footer_buton", $_POST, [
            'form_name' => 'footer_update',
            'columns' => 'footer_id'
        ]);
        return $sql;
    }

    public function footerAltBaslikInsert()
    {
        $sql = $this->db->insert("footer_buton", $_POST, [
            'form_name' => 'footer_baslik_insert'
        ]);
        return $sql;
    }

    public function footerAltBaslikDelete($footer_baslik_id)
    {
        $sql = $this->db->delete("footer_buton", "footer_id", $footer_baslik_id);
        return $sql;
    }

    public function messages()
    {
        $sql = $this->db->read("messages");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function openMessage($messages_id)
    {
        $sql = $this->db->wread("messages", "messages_id", $messages_id);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteMessage($messages_id)
    {
        $sql = $this->db->delete("messages", "messages_id", $messages_id);
        return $sql;
    }

    public function subscribers()
    {
        $sql = $this->db->read("mail_subscribers");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function subscribersDelete($subscribers_id)
    {
        $sql = $this->db->delete("mail_subscribers", "subscribers_id", $subscribers_id);
        return $sql;
    }

}