<?php

class defaultModel extends mainModel
{
    public function indexSettingsModel()
    {
        // Site geneline ayarları çek
        $data = $this->db->read("settings");
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function indexMenuModel()
    {
        // Site geneline menüleri çek
        $data = $this->db->read("menu", [
            "columns_name" => "menu_sira",
            "columns_sort" => "ASC"
        ]);
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function footerBaslikModel()
    {
        $sql = $this->db->read("footer_baslik", [
            "columns_name" => "footer_sira",
            "columns_sort" => "ASC"
        ]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    // Site geneline footeri çek

    public function footerAltBaslikModel()
    {
        $sql = $this->db->read("footer_buton", [
            "columns_name" => "footer_sira",
            "columns_sort" => "ASC"
        ]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sliders()
    {
        $sql = $this->db->read("sliders", [
            "columns_name" => "sliders_must",
            "columns_sort" => "ASC"
        ]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function indexIcerikModel()
    {
        $sql = $this->db->read("anasayfa");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function indexBlogModel($blog_1, $blog_2, $blog_3)
    {
        $sql = $this->db->wread("blogs", "blogs_id", $blog_1);
        $data['blog_1'] = $sql->fetch(PDO::FETCH_ASSOC);
        $sql = $this->db->wread("blogs", "blogs_id", $blog_2);
        $data['blog_2'] = $sql->fetch(PDO::FETCH_ASSOC);
        $sql = $this->db->wread("blogs", "blogs_id", $blog_3);
        $data['blog_3'] = $sql->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function messageSend()
    {
        $sql = $this->db->insert("messages", $_POST, [
            "form_name" => "messages_send"
        ]);
        return $sql;
    }

    public function insertSubscribers()
    {
        $sql = $this->db->insert("mail_subscribers", $_POST, [
            "form_name" => "abone_ol"
        ]);
        return $sql;
    }

    public function bloglar()
    {
        $sql = $this->db->read("blogs");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql;
    }

    public function kategoriler()
    {
        $sql = $this->db->read("kategori");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql;
    }

    public function kurumsallar()
    {
        $sql = $this->db->read("abouts");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $sql;
    }

}