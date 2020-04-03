<div class="logo"><a href="index.php"><img src="images/logo.png" /></a></div>
<div class="sidebarSep mt0"></div>

<!-- Left navigation -->
<ul id="menu" class="nav">
<li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>

<li class="categories_li <?php if($_GET['type']=='trang-tri-noi-that') echo ' activemenu' ?>" id="menu_ntt"><a href="" title="" class="exp"><span>Trang trí nội thất</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Quản lý danh mục 1','product','man_danhmuc','trang-tri-noi-that'); ?>
        <?php phanquyen_menu('Quản lý danh mục 2','product','man_list','trang-tri-noi-that'); ?>
        <?php phanquyen_menu('Quản lý danh mục 3','product','man_cat','trang-tri-noi-that'); ?>
        <?php phanquyen_menu('Quản lý danh mục 4','product','man_item','trang-tri-noi-that'); ?>
        <?php phanquyen_menu('Quản lý trang trí nội thất','product','man','trang-tri-noi-that'); ?>
    </ul>
</li>

<li class="categories_li <?php if($_GET['type']=='vat-lieu-xay-dung') echo ' activemenu' ?>" id="menu_vl"><a href="" title="" class="exp"><span>Vật liệu xây dựng</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Quản lý danh mục 1','product','man_danhmuc','vat-lieu-xay-dung'); ?>
        <?php phanquyen_menu('Quản lý danh mục 2','product','man_list','vat-lieu-xay-dung'); ?>
        <?php phanquyen_menu('Quản lý danh mục 3','product','man_cat','vat-lieu-xay-dung'); ?>
        <?php phanquyen_menu('Quản lý danh mục 4','product','man_item','vat-lieu-xay-dung'); ?>
        <?php phanquyen_menu('Quản lý vật liệu xây dựng','product','man','vat-lieu-xay-dung'); ?>
    </ul>
</li>

<li class="categories_li <?php if($_GET['com']=='order') echo ' activemenu' ?>" id="menu_cart"><a href="" title="" class="exp"><span>Đơn hàng</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Quản lý đơn hàng','order','man',''); ?>
    </ul>
</li>
  
<li class="categories_li <?php if($_GET['com']=='news' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Quản lý giới thiệu','news','man','gioithieu'); ?>        
        <?php phanquyen_menu('Quản lý dịch vụ','news','man','dichvu'); ?>        
        <?php phanquyen_menu('Quản lý công trình','news','man','congtrinh'); ?>        
        <?php phanquyen_menu('Quản lý dự án','news','man','duan'); ?>        
        <?php phanquyen_menu('Quản lý tin tức','news','man','tintuc'); ?>        
        <?php phanquyen_menu('Quản lý lý do chọn chúng tôi','news','man','lydo'); ?>        
        <?php phanquyen_menu('Quản lý chính sách','news','man','chinhsach'); ?>        
    </ul>
</li>
  
<li class="categories_li <?php if($_GET['com']=='about' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Quản lý Video','video','man','video'); ?>
        <?php phanquyen_menu('Cập nhật giới thiệu','about','capnhat','about'); ?>
        <?php phanquyen_menu('Cập nhật liên hệ','about','capnhat','lienhe'); ?>
        <?php phanquyen_menu('Cập nhật footer','about','capnhat','footer'); ?>
    </ul>
</li>
      
<li class="categories_li <?php if($_GET['com']=='newsletter' || $_GET['com']=='lkweb' || $_GET['com']=='yahoo') echo ' activemenu' ?>" id="menu_nt"><a href="" title="" class="exp"><span>Marketing Online</span><strong></strong></a>
      	<ul class="sub">
        	<?php //phanquyen_menu('Quản lý mạng xã hội','lkweb','man','mxh'); ?>
            <?php //phanquyen_menu('Quản lý hỗ trợ trực tuyến','yahoo','man','yahoo'); ?> 	
        </ul>
</li>
   
<li class="categories_li gallery_li <?php if($_GET['com']=='anhnen' || $_GET['com']=='background' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner - Quảng cáo</span><strong></strong></a>
     <ul class="sub">
        <?php phanquyen_menu('Cập nhật share facebook index','background','capnhat','share'); ?>
        <?php phanquyen_menu('Cập nhật logo','background','capnhat','logo'); ?>
        <?php phanquyen_menu('Cập nhật banner','background','capnhat','banner'); ?>
        <?php phanquyen_menu('Cập nhật background header','background','capnhat','bg-header'); ?>
        <?php phanquyen_menu('Cập nhật background footer','background','capnhat','bg-footer'); ?>
        <?php phanquyen_menu('Cập nhật logo CT','background','capnhat','logo_ct'); ?>
        <?php phanquyen_menu('Quản lý đối tác','slider','man_photo','partner'); ?>
        <?php phanquyen_menu('Quản lý mạng xã hội','slider','man_photo','social'); ?>
        <?php //phanquyen_menu('Quản lý slider index','slider','man_photo','slider'); ?>
        <?php //phanquyen_menu('Quản lý slider nội thất','slider','man_photo','slider_nt'); ?>
        <?php //phanquyen_menu('Quản lý slider vật liệu','slider','man_photo','slider_vl'); ?>
     </ul>
</li>
  
<li class="categories_li setting_li <?php if($_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='about' || $_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Cấu hình thông tin Website','company','capnhat',''); ?>
         <li<?php if($_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
    </ul>
</li>
</ul>
