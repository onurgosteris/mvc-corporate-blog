<?php

class blogsController extends mainController
{
    public function index()
    {
        $indexModel = new blogsModel();
        $data['blogs'] = $indexModel->index();
        $data['title_2'] = "Blog Yazılarımız";
        $data['keywords_2'] = "İçeriklerimiz";
        $data['description_2'] = "Sizin için yazdığımız blog yazılarımız";
        $data['blogs_toplam_icerik'] = $indexModel->toplamIcerikSayisi();
        $this->callLayout("frontend", "main", "blogs", "index", $data);
    }

    public function indexSayfa($sayfa)
    {
        $indexSayfaModel = new blogsModel();
        $data['blogs'] = $indexSayfaModel->indexSayfa($sayfa);
        $data['title_2'] = "Blog Yazılarımız";
        $data['keywords_2'] = "İçeriklerimiz";
        $data['description_2'] = "Sizin için yazdığımız blog yazılarımız";
        $data['blogs_toplam_icerik'] = $indexSayfaModel->toplamIcerikSayisi();
        $this->callLayout("frontend", "main", "blogs", "index", $data);
    }

    public function blogDetay($blog_slug)
    {
        $blogDetayModel = new blogsModel();
        $data['blog_detay'] = $blogDetayModel->blogDetay($blog_slug);
        if (empty($data['blog_detay'])) {
            $url = URL."/404";
            header("location:$url");
            exit;
        }
        $data['title_2'] = $data['blog_detay']['blogs_title'];
        $data['keywords_2'] = $data['blog_detay']['blogs_keyword'];
        $data['description_2'] = $data['blog_detay']['blogs_description'];
        $this->callLayout("frontend", "main", "blogs", "blogDetay", $data);
    }

    public function kategori($kategori_slug)
    {
        $kategoriModel = new blogsModel();
        $data = $kategoriModel->kategori($kategori_slug);
        if (empty($data['kategori'])) {
            $url = URL."/404";
            header("location:$url");
            exit;
        }
        $data['title_2'] = $data['kategori']['kategori_title'];
        $data['keywords_2'] = $data['kategori']['kategori_keywords'];
        $data['description_2'] = $data['kategori']['kategori_description'];
        unset($data['kategori']);
        $this->callLayout("frontend", "main", "blogs", "kategori", $data);
    }

    public function kategoriSayfa($kategori_slug, $sayfa)
    {
        $kategoriSayfaModel = new blogsModel();
        $data = $kategoriSayfaModel->kategoriSayfa($kategori_slug, $sayfa);
        if (empty($data['kategori'])) {
            $url = URL."/404";
            header("location:$url");
            exit;
        }
        $data['title_2'] = "Blog Yazılarımız";
        $data['keywords_2'] = "İçeriklerimiz";
        $data['description_2'] = "Sizin için yazdığımız blog yazılarımız";
        $this->callLayout("frontend", "main", "blogs", "kategori", $data);
    }

    public function kurumsal($abouts_slug)
    {
        $kurumsalModel = new blogsModel();
        $data['kurumsal'] = $kurumsalModel->kurumsal($abouts_slug);
        $data['title_2'] = $data['kurumsal']['abouts_title'];
        $data['keywords_2'] = $data['kurumsal']['abouts_keywords'];
        $data['description_2'] = $data['kurumsal']['abouts_description'];
        $this->callLayout("frontend", "main", "blogs", "kurumsal", $data);
    }

}