<?php
$d->reset();
$sql      = "select * from #_product_list where hienthi=1 and type='product' order by stt,id desc";
$d->query($sql);
$row_list = $d->result_array();
?>

<nav id="smoothmenu1" class="ddsmoothmenu">
    <ul>
        <li class="icon <?= $_GET['com'] == 'gioi-thieu' ? 'active' : ''; ?>"><a href="gioi-thieu.html"><?= _gioithieu ?></a></li>
        <li class="icon <?= $_GET['com'] == 'san-pham' ? 'active' : ''; ?>"><a href="san-pham.html"><?= _sanpham ?></a></li>
        <li class="icon <?= $_GET['com'] == 'tin-tuc' ? 'active' : ''; ?>"><a href="tin-tuc.html"><?= _tintuc ?></a></li>
        <li class="icon <?= $_GET['com'] == 'lien-he' ? 'active' : ''; ?>"><a href="lien-he.html"><?= _lienhe ?></a></li>
        <div class="clear"></div>
    </ul>
</nav>