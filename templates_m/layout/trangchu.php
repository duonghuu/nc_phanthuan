<div class="box_gioithieu">
	<div class="container">
		<div class="img_gioithieu">
			<a href="gioi-thieu.html"><img src="521x514/2/<?=_upload_hinhanh_l.$row_img_gt['photo']?>" /></a>
		</div>
		<div class="cont_gt">
			<div class="tit_gt">Lời giới thiệu</div>
			<div class="gt_slick">
				<?php for ($i=0; $i <count($gioithieu) ; $i++) { ?>
					<div>
						<div class="item_gt">
							<h4><a href="gioi-thieu/<?=$gioithieu[$i]['tenkhongdau']?>-<?=$gioithieu[$i]['id']?>.html"><?=$gioithieu[$i]['ten']?></a></h4>
							<p><?=catchuoi($gioithieu[$i]['mota'],150)?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="box_dichvu">
	<div class="container center">
		<div class="tit_dv">
			<p>Dịch vụ của chúng tôi</p>
			<span><?=$company['slogan']?></span>
		</div>
		<div class="cont_bv">
			<div class="slick-4">
				<?php for ($i=0; $i <count($dichvu) ; $i++) { ?>
					<div>
						<div class="padding_dv">
							<div class="item_dv">
								<div class="img_dv hv-zoom hv-glass">
									<a href="dich-vu/<?=$dichvu[$i]['tenkhongdau']?>-<?=$dichvu[$i]['id']?>.html"><img src="600x520/1/<?=_upload_tintuc_l.$dichvu[$i]['photo']?>" alt="<?=$dichvu[$i]['ten']?>" /></a>
								</div>
								<h4><a href="dich-vu/<?=$dichvu[$i]['tenkhongdau']?>-<?=$dichvu[$i]['id']?>.html"><?=$dichvu[$i]['ten']?></a></h4>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="box_sanpham" style="background: #f0f0f0;">
	<div class="container center">
		<div class="tit_dv1">
			<p>Vật liệu xây dựng</p>
			<span><?=$company['slogan']?></span>
		</div>
		<?php $product = get_result("select id,ten$lang as ten,tenkhongdau,photo,masp,gia,giakm from #_product where type='vat-lieu-xay-dung' and hienthi=1 and noibat=1 order by stt,id desc"); ?>
		<?=hot_product();?>
	</div>
</div>

<div class="box_sanpham">
	<div class="container center">
		<div class="tit_dv1">
			<p>Sản phẩm nổi bật</p>
			<span><?=$company['slogan']?></span>
		</div>
		<?php $product = get_result("select id,ten$lang as ten,tenkhongdau,photo,masp,gia,giakm from #_product where type='trang-tri-noi-that' and hienthi=1 and noibat=1 order by stt,id desc"); ?>
		<?=hot_product();?>
	</div>
</div>

<div class="box_congtrinh">
	<div class="center">
		<div class="tit_dv1">
			<p>Công trình tiêu biểu</p>
			<span><?=$company['slogan']?></span>
		</div>
		<div class="cont_ct">
			<ul>
				<?php for ($i=0; $i <count($congtrinh) ; $i++) { ?>
					<li style="background: url(<?=_upload_tintuc_l.$congtrinh[$i]['photo']?>) no-repeat top center;background-size: cover;">
						<h4><a href="cong-trinh/<?=$congtrinh[$i]['tenkhongdau']?>-<?=$congtrinh[$i]['id']?>.html"><?=$congtrinh[$i]['ten']?></a></h4>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<div class="box_lydo" style="background: url(<?=get_photo_static('bg_lydo')?>) center/cover no-repeat;">
	<div class="info_vs">
		<div class="tit_dv">
			<p>Lý do chọn chúng tôi</p>
			<span><?=$company['slogan']?></span>
		</div>
		<div class="cont_vs">
			<?php for ($i=0; $i <count($lydo) ; $i++) { ?>
				<div class="item_vs">
					<div class="img_vs">
						<a href="ly-do-chon-chung-toi/<?=$lydo[$i]['tenkhongdau']?>-<?=$lydo[$i]['id']?>.html"><img src="<?=_upload_tintuc_l.$lydo[$i]['photo']?>" alt="<?=$lydo[$i]['ten']?>" /></a>
					</div>
					<div class="mota_vs">
						<h4><a href="ly-do-chon-chung-toi/<?=$lydo[$i]['tenkhongdau']?>-<?=$lydo[$i]['id']?>.html"><?=$lydo[$i]['ten']?></a></h4>
						<p><?=catchuoi($lydo[$i]['mota'],70)?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="box_tinvideo">
	<div class="center flex flex-wrap">
		<div class="box_tintuc">
			<div class="tit_tin"><span>Video Clip</span></div>
			<?=get_AddonsOnline("",'100%',435,"video-select")?>
		</div>
		<div class="box_videoclip">
			<div class="tit_tin"><span>Tin tức nổi bật</span></div>
			<div class="slick-d3">
				<?php for ($i=0; $i <count($tintuc) ; $i++) { ?>
					<div>
						<div class="item_tin clearfix">
							<div class="img_tin">
								<a href="tin-tuc/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><img src="320x280/1/<?=_upload_tintuc_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten']?>" /></a>
							</div>
							<div class="mota_tin">
								<h4><a href="tin-tuc/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><?=$tintuc[$i]['ten']?></a></h4>
								<p><?=catchuoi($tintuc[$i]['mota'],150)?></p>
								<div class="xem_tin">
									<a href="tin-tuc/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>