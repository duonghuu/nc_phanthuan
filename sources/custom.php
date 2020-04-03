<?php  if(!defined('_source')) die("Error");
	if($source == 'index')
	{
		$hot_category = get_result("select id, ten$lang as ten, photo, thumb, tenkhongdau FROM #_product_danhmuc WHERE hienthi=1 and noibat=1 order by stt, id desc");
		$partner = get_result("select id, ten$lang as ten, link, photo, thumb from #_slider where hienthi=1 and type='partner' order by stt,id desc");
	}
	if($com == 'dich-vu')
	{
		$row_img_gt = get_fetch("select photo$lang as photo from #_background where type='img_gt' limit 0,1");
		$gioithieu = get_result("select id,ten$lang as ten,tenkhongdau,mota$lang as mota from #_news where type='gioithieu' and hienthi=1 order by stt,id desc");
		$dichvu = get_result("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,photo from #_news where type='dichvu' and hienthi=1 order by stt,id desc");
		$congtrinh = get_result("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,photo from #_news where type='congtrinh' and noibat=1 and hienthi=1 order by stt,id desc limit 0,5");
		$lydo = get_result("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,photo from #_news where type='lydo' and hienthi=1 order by stt,id desc limit 0,4");
		$tintuc = get_result("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,photo from #_news where type='tintuc' and noibat=1 and hienthi=1 order by stt,id desc");
	}
	$slider_category = get_result("select id, ten$lang as ten, photo, thumb, tenkhongdau, type FROM #_product_danhmuc WHERE hienthi=1 and slider=1 order by stt, id desc");

    $footer = get_fetch("select ten$lang as ten, noidung$lang as noidung from #_about where type='footer'");
    $social = get_result("select photo, link from #_slider where type='social' and hienthi=1");
    $chinhsach = get_result("select id, ten$lang as ten, tenkhongdau FROM #_news WHERE type='chinhsach' and hienthi=1 order by stt, id desc");
?>