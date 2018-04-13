<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
    <li class="dash" id="menu1"><a<?= !isset($_GET['com']) ? ' class="active"' : '' ?> title="" href="index.php"><span>Trang chủ</span></a></li>
    <li class="article_li" id="menu2"><a<?= $_GET['com'] == 'baiviet' ? ' class="active"' : '' ?> href="index.php?com=baiviet&act=man&type=tintuc" title=""><span>Tin tức</span></a></li>
    <li class="categories_li<?= $_GET['com'] == 'product' && $_GET['act'] != 'man' ? 'activemenu' : '' ?>" id="menu3"><a<?= $_GET['com'] == 'product' && $_GET['act'] != 'man' ? ' class="active"' : '' ?> href="" title="" class="exp"><span>Danh mục</span><strong></strong></a>
        <ul class="sub">
            <li<?= $_GET['act'] == 'man_list' ? ' class="this"' : '' ?>><a href="index.php?com=product&act=man_list&type=product">Quản lý danh mục cấp 1</a></li>
            <li<?= $_GET['act'] == 'man_cat' ? ' class="this"' : '' ?>><a href="index.php?com=product&act=man_cat&type=product">Quản lý danh mục cấp 2</a></li>
            <li<?= $_GET['act'] == 'man_item' ? ' class="this"' : '' ?>><a href="index.php?com=product&act=man_item&type=product">Quản lý danh mục cấp 3</a></li>
            <li<?= $_GET['act'] == 'man_sub' ? ' class="this"' : '' ?>><a href="index.php?com=product&act=man_sub&type=product">Quản lý danh mục cấp 4</a></li>
        </ul>
    </li>
    <li class="article_li" id="menu3"><a<?= $_GET['com'] == 'product' && $_GET['act'] == 'man' ? ' class="active"' : '' ?> href="index.php?com=product&act=man&type=product" title=""><span>Sản phẩm</span></a></li>
    <li class="template_li<?= $_GET['com'] == 'info' ? ' activemenu' : '' ?>" id="menu4"><a<?= $_GET['com'] == 'info' ? ' class="active"' : '' ?> href="#" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
        <ul class="sub">
            <li<?php if ($_GET['type'] == 'gioithieu') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioithieu">Giới thiệu</a></li>    
        </ul>
    </li>
    <!--<li class="categories_li" id="menu5"><a<?= $_GET['com'] == 'com' ? ' class="active"' : '' ?> title="" href="index.php?com=com&act=man"><span>Page</span></a></li>-->
    <li class="template_li<?= in_array($_GET['com'], array('setting', 'newsletter', 'bannerqc', 'company')) ? ' activemenu' : '' ?>" id="menu6"><a href="#" title="" class="exp"><span>Company</span><strong></strong></a>
        <ul class="sub">
            <li<?= $_GET['type'] == 'logo' ? ' class="this"' : '' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
            <li<?= $_GET['type'] == 'bannerqc' ? ' class="this"' : '' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bannerqc" title="">banner quảng cáo</a></li>
            <li<?= $_GET['type'] == 'favicon' ? ' class="this"' : '' ?>><a href="index.php?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>
            <li<?= $_GET['type'] == 'lienhe' ? ' class="this"' : '' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Liên hệ</a></li>
            <li<?= $_GET['type'] == 'footer' ? ' class="this"' : '' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Footer</a></li>
            <li<?= $_GET['type'] == 'setting' ? ' class="this"' : '' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
            <li<?= $_GET['type'] == 'newsletter' ? ' class="this"' : '' ?>><a href="index.php?com=newsletter&act=man" title="">Gửi Mail</a></li>
        </ul>
    </li>
    <li class="gallery_li<?= in_array($_GET['com'], array('photo', 'video')) ? ' activemenu' : '' ?>" id="menu7"><a<?= $_GET['com'] == 'photo' ? ' class="active"' : '' ?> href="#" title="" class="exp"><span>Hình Ảnh - Slider</span><strong></strong></a>
        <ul class="sub">
            <li<?= $_GET['type'] == 'slider' ? ' class="this"' : '' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>
            <li<?= $_GET['type'] == 'video' ? ' class="this"' : '' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li>
        </ul>
    </li>
</ul>