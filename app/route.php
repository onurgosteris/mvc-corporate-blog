<?php

/*
 * BAZI MODÜLLERDE AREA GİRMEYİ UNUTMA
 * */


/* FRONTEND */

// GETS
App::getAction('/', '/', false);
App::postAction('/', '/', false);

App::postAction('/mailabone', 'default/insertSubscribers', false);

//App::getAction('/index','default/index',false);
App::getAction('/iletisim', 'default/iletisim', false);
App::postAction('/iletisim/messageSend', 'default/messageSend', false);

// BLOGS

App::getAction("/blogs","blogs/index",false);
App::getAction("/blogs/sayfa/([0-9a-zA-Z-_]+)","blogs/indexSayfa",false);
App::getAction("/blogs/([0-9a-zA-Z-_]+)","blogs/blogDetay",false);

// KATEGORİ
App::getAction("/kategori/([0-9a-zA-Z-_]+)","blogs/kategori",false);
App::getAction("/kategori/([0-9a-zA-Z-_]+)/sayfa/([0-9a-zA-Z-_]+)","blogs/kategoriSayfa",false);

// KURUMSAL
App::getAction("/kurumsal/([0-9a-zA-Z-_]+)","blogs/kurumsal",false);

// SİTEMAP
App::getAction('/sitemap.xml', 'default/sitemap', false);


// 404
App::getAction('/404', 'default/e404', false);
App::postAction('/404', 'default/e404', false);





















/* OGPANEL START*/

// OGPANEL - LOGİN - LOGOUT
App::getAction("/ogpanel/login", "ogpanel/login", false);
App::getAction("/ogpanel/logout","ogpanel/logout",false);
App::postAction("/ogpanel/login", "ogpanel/loginControl");

// OGPANEL - MAİN
App::getAction("/ogpanel", "ogpanel/index", true,"backend");

// OGPANEL - SETTİNGS
App::getAction("/ogpanel/settings", "ogpanel/settings", true, "backend");
// Büyük Z var.
App::getAction("/ogpanel/settings/update/([0-9a-zA-Z-_]+)", "ogpanel/settingsUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/settings/update/settingsUpdateOp","ogpanel/settingsUpdateOp",true,"backend");

// OGPANEL - ADMİNS
App::getAction("/ogpanel/admins", "ogpanel/admins", true, "backend");
App::getAction("/ogpanel/admins/update/([0-9a-zA-Z-_]+)", "ogpanel/adminsUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/admins/delete/([0-9a-zA-Z-_]+)", "ogpanel/adminsDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/admins/update/adminsUpdateOp","ogpanel/adminsUpdateOp",true,"backend");
App::postAction("/ogpanel/admins/insert/adminsInsert","ogpanel/adminsInsert",true,"backend");


// OGPANEL - KATEGORİ
App::getAction("/ogpanel/kategori", "ogpanel/kategori", true, "backend");
App::getAction("/ogpanel/kategori/update/([0-9a-zA-Z-_]+)", "ogpanel/kategoriUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/kategori/delete/([0-9a-zA-Z-_]+)", "ogpanel/kategoriDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/kategori/update/kategoriUpdateOp","ogpanel/kategoriUpdateOp",true,"backend");
App::postAction("/ogpanel/kategori/insert/kategoriInsert","ogpanel/kategoriInsert",true,"backend");


// OGPANEL - BLOG
App::getAction("/ogpanel/blogs", "ogpanel/blogs", true, "backend");
App::getAction("/ogpanel/blogs/update/([0-9a-zA-Z-_]+)", "ogpanel/blogsUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/blogs/delete/([0-9a-zA-Z-_]+)", "ogpanel/blogsDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/blogs/update/blogsUpdateOp","ogpanel/blogsUpdateOp",true,"backend");
App::postAction("/ogpanel/blogs/insert/blogsInsert","ogpanel/blogsInsert",true,"backend");


// OGPANEL - ABOUT
App::getAction("/ogpanel/abouts", "ogpanel/abouts", true, "backend");
App::getAction("/ogpanel/abouts/update/([0-9a-zA-Z-_]+)", "ogpanel/aboutsUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/abouts/delete/([0-9a-zA-Z-_]+)", "ogpanel/aboutsDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/abouts/update/aboutsUpdateOp","ogpanel/aboutsUpdateOp",true,"backend");
App::postAction("/ogpanel/abouts/insert/aboutsInsert","ogpanel/aboutsInsert",true,"backend");


// OGPANEL - MENÜ
App::getAction("/ogpanel/menu", "ogpanel/menu", true, "backend");
App::getAction("/ogpanel/menu/update/([0-9a-zA-Z-_]+)", "ogpanel/menuUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/menu/delete/([0-9a-zA-Z-_]+)", "ogpanel/menuDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/menu/update/menuUpdateOp","ogpanel/menuUpdateOp",true,"backend");
App::postAction("/ogpanel/menu/insert/menuInsert","ogpanel/menuInsert",true,"backend");


// OGPANEL - SLİDER
App::getAction("/ogpanel/sliders", "ogpanel/sliders", true, "backend");
App::getAction("/ogpanel/sliders/update/([0-9a-zA-Z-_]+)", "ogpanel/slidersUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/sliders/delete/([0-9a-zA-Z-_]+)", "ogpanel/slidersDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/sliders/update/slidersUpdateOp","ogpanel/slidersUpdateOp",true,"backend");
App::postAction("/ogpanel/sliders/insert/slidersInsert","ogpanel/slidersInsert",true,"backend");


// OGPANEL - FOOTER ÜST BAŞLIK
App::getAction("/ogpanel/footerBaslik", "ogpanel/footerBaslik", true, "backend");
App::getAction("/ogpanel/footerBaslik/update/([0-9a-zA-Z-_]+)", "ogpanel/footerBaslikUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/footerBaslik/delete/([0-9a-zA-Z-_]+)", "ogpanel/footerBaslikDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/footerBaslik/update/footerBaslikUpdateOp","ogpanel/footerBaslikUpdateOp",true,"backend");
App::postAction("/ogpanel/footerBaslik/insert/footerBaslikInsert","ogpanel/footerBaslikInsert",true,"backend");


// OGPANEL - FOOTER ALT BAŞLIK
App::getAction("/ogpanel/footerAltBaslik", "ogpanel/footerAltBaslik", true, "backend");
App::getAction("/ogpanel/footerAltBaslik/update/([0-9a-zA-Z-_]+)", "ogpanel/footerAltBaslikUpdate/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/footerAltBaslik/delete/([0-9a-zA-Z-_]+)", "ogpanel/footerAltBaslikDelete/([0-9a-zA-Z-_]+)", true, "backend");
App::postAction("/ogpanel/footerAltBaslik/update/footerAltBaslikUpdateOp","ogpanel/footerAltBaslikUpdateOp",true,"backend");
App::postAction("/ogpanel/footerAltBaslik/insert/footerAltBaslikInsert","ogpanel/footerAltBaslikInsert",true,"backend");


// OGPANEL - GELEN MESAJLAR
App::getAction("/ogpanel/messages", "ogpanel/messages", true, "backend");
App::getAction("/ogpanel/messages/open/([0-9a-zA-Z-_]+)", "ogpanel/openMessage/([0-9a-zA-Z-_]+)", true, "backend");
App::getAction("/ogpanel/messages/delete/([0-9a-zA-Z-_]+)", "ogpanel/messagesDelete/([0-9a-zA-Z-_]+)", true, "backend");


// OGPANEL - MAİL ABONELERİ
App::getAction("/ogpanel/subscribers", "ogpanel/subscribers", true, "backend");
App::getAction("/ogpanel/subscribers/delete/([0-9a-zA-Z-_]+)", "ogpanel/subscribersDelete/([0-9a-zA-Z-_]+)", true, "backend");



// OGPANEL - ANASAYFA

App::getAction("/ogpanel/anasayfa", "ogpanel/anasayfa", true, "backend");
App::postAction("/ogpanel/anasayfa/update/anasayfaUpdateOp","ogpanel/anasayfaUpdateOp",true,"backend");


App::getAction("/ogpanel/bilgilendirme", "ogpanel/bilgilendirme", true, "backend");

