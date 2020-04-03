<section class="cover-menu">
    <div class="menu-mobile">
        <div class="flex">
            <a class="bar" href="#"><i class="fa fa-bars"></i></a>
            <a href="gio-hang">
                <i class="fas fa-shopping-cart"></i>
                <span>(<?=count($_SESSION['cart'])?>)</span>
            </a>
        </div>
    </div>

    <div class="menu nav-menu container">
        <ul class="flex-start">
            <li class="search flex">
                <input class="keyword" onKeyPress="doEnter(event);" placeholder="<?=_nhaptukhoatimkiem?>">
                <i class="fa fa-search" onclick="onSearch(event);"></i>
            </li>

            <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href=""><?=_trangchu?></a></li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'dich-vu') echo 'active'; ?>" href="dich-vu.html">Dịch vụ</a></li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'trang-tri-noi-that') echo 'active'; ?>" href="trang-tri-noi-that.html">Trang trí nội thất</a>
                <?=for4cap('product_danhmuc','product_list','product_cat','product_item','trang-tri-noi-that','trang-tri-noi-that','')?>
            </li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'vat-lieu-xay-dung') echo 'active'; ?>" href="vat-lieu-xay-dung.html">Vật liệu xây dựng</a>
                <?=for4cap('product_danhmuc','product_list','product_cat','product_item','vat-lieu-xay-dung','vat-lieu-xay-dung','')?>
            </li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'du-an') echo 'active'; ?>" href="du-an.html">Dự án tiêu biểu</a></li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintuc?></a></li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'video') echo 'active'; ?>" href="video.html">Video</a></li>

            <li class="line"></li>

            <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
            
            <li class="line"></li>

            <li class="search-h"><i class="fa fa-search"></i></li>
        </ul>
    </div>
</section>