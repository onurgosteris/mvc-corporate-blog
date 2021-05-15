<?php

class defaultController extends mainController
{
    public function index()
    {
        $data = [];
        $indexModel = new defaultModel();
        $data['sliders'] = $indexModel->sliders();
        $data['anasayfa'] = $indexModel->indexIcerikModel();
        foreach ($data['anasayfa'] as $key) {
            $one_cikan_bloglar[$key['input_key']] = $key['input_value'];
        }
        $data['one_cikan_bloglar'] = $indexModel->indexBlogModel($one_cikan_bloglar['blog_1'], $one_cikan_bloglar['blog_2'], $one_cikan_bloglar['blog_3']);
        $this->callLayout("frontend", "main", "default", "index", $data);
    }

    public function iletisim()
    {
        $data = [];
        $this->callLayout("frontend", "main", "default", "iletisim", $data);
    }

    public function messageSend()
    {
        $messageSendModel = new defaultModel();
        $_SESSION['messageManagement'] = $messageSendModel->messageSend();
        header("location:{$_SERVER['HTTP_REFERER']}#success");
        exit;
    }

    public function insertSubscribers()
    {
        $_SESSION['POST'] = $_POST;
        $subscribersModel = new defaultModel();
        $_SESSION['messageManagement'] = $subscribersModel->insertSubscribers();
        header("location:{$_SERVER['HTTP_REFERER']}#subscribers_form");
        exit;
    }

    public function e404()
    {
        $data = [];
        $this->callLayout("frontend", "main", "default", "e404", $data);

    }

    public function sitemap()
    {
        $sitemapModel = new defaultModel();
        $data['bloglar'] = $sitemapModel->bloglar();
        $data['kategoriler'] = $sitemapModel->kategoriler();
        $data['kurumsallar'] = $sitemapModel->kurumsallar();
        $this->callView("default","sitemap",$data);
    }


}

?>