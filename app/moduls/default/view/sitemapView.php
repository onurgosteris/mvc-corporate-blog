<?php header("Content-type: text/xml"); ?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:example="http://www.example.com/schemas/example_schema" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <url>
        <loc><?php echo URL ?></loc>
        <lastmod>20<?php echo date("y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>

    <url>
        <loc><?php echo URL ?>blogs</loc>
        <lastmod>20<?php echo date("y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>


    <?php foreach ($data['bloglar'] as $key => $value){  ?>
        <url>
            <loc><?php echo URL ?>blogs/<?php echo $value['blogs_slug']; ?></loc>
            <lastmod>20<?php echo date("y-m-d") ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    <?php } ?>


    <?php foreach ($data['kategoriler'] as $key => $value){  ?>
        <url>
            <loc><?php echo URL ?>kategori/<?php echo $value['kategori_slug']; ?></loc>
            <lastmod>20<?php echo date("y-m-d") ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    <?php } ?>


    <?php foreach ($data['kurumsallar'] as $key => $value){  ?>
        <url>
            <loc><?php echo URL ?>kurumsal/<?php echo $value['abouts_slug']; ?></loc>
            <lastmod>20<?php echo date("y-m-d") ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    <?php } ?>


    <url>
        <loc><?php echo URL ?>iletisim</loc>
        <lastmod>20<?php echo date("y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.10</priority>
    </url>

</urlset>