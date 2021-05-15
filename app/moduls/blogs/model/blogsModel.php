<?php

class blogsModel extends mainModel
{
    public function index()
    {
        $sql = $this->db->read("blogs", [
            "columns_name" => "blogs_time",
            "columns_sort" => "DESC",
            "limit" => 9
        ]);

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function indexSayfa($sayfa)
    {
        $icerik_sayisi = 9;
        $limit = ($sayfa - 1) * $icerik_sayisi;
        $sql = $this->db->read("blogs", [
            "columns_name" => "blogs_time",
            "columns_sort" => "DESC",
            "limit" => $limit . ',' . $icerik_sayisi
        ]);

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function toplamIcerikSayisi()
    {
        $sql = $this->db->read("blogs");
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        return count($sql);
    }

    public function blogDetay($blogs_slug)
    {
        $sql = $this->db->wread("blogs", "blogs_slug", $blogs_slug);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function kategori($kategori_slug)
    {
        // kategorinin id değerini bulup
        // o değere eşit olan TÜM blogları getir
        $kategori = $this->db->wread("kategori", "kategori_slug", $kategori_slug);
        $kategori = $kategori->fetch(PDO::FETCH_ASSOC);
        $sql = $this->db->wread("blogs", "blogs_kategori", $kategori['kategori_id'],[
            "columns_name" => "blogs_time",
            "columns_sort" => "DESC",
            "limit" => 9
        ]);
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);

        $kategori_icerik_sayisi = $this->db->wread("blogs", "blogs_kategori", $kategori['kategori_id'],[
            "columns_name" => "blogs_time",
            "columns_sort" => "DESC"
        ]);
        $kategori_icerik_sayisi = $kategori_icerik_sayisi->fetchAll(PDO::FETCH_ASSOC);

        $data['kategori_blogs'] = $sql;
        $data['kategori'] = $kategori;
        $data['kategori_slug'] = $kategori_slug;
        $data['blogs_toplam_icerik'] = count($kategori_icerik_sayisi);
        return $data;
    }

    public function kategoriSayfa($kategori_slug, $sayfa)
    {
        $kategori = $this->db->wread("kategori", "kategori_slug", $kategori_slug);
        $kategori = $kategori->fetch(PDO::FETCH_ASSOC);
        $toplam_icerik = $this->db->wread("blogs", "blogs_kategori", $kategori['kategori_id']);
        $toplam_icerik = $toplam_icerik->fetchAll(PDO::FETCH_ASSOC);
        $icerik_sayisi = 9;
        $limit = ($sayfa - 1) * $icerik_sayisi;
        $sql = $this->db->wread("blogs", "blogs_kategori", $kategori['kategori_id'], [
            "columns_name" => "blogs_time",
            "columns_sort" => "DESC",
            "limit" => $limit . ',' . $icerik_sayisi
        ]);

        $data['kategori_blogs'] = $sql->fetchAll(PDO::FETCH_ASSOC);
        $data['kategori'] = $kategori;
        $data['kategori_slug'] = $kategori_slug;
        $data['blogs_toplam_icerik'] = count($toplam_icerik);

        return $data;
    }

    public function kurumsal($abouts_slug)
    {
        $sql = $this->db->wread("abouts", "abouts_slug", $abouts_slug);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

}