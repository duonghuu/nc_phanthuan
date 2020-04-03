<section class="cover-category">
	<div class="container">
		<?php for($j=0; $j < count($hot_category); $j++) { ?>
			<?php $product = get_result("select id, ten$lang as ten, photo, thumb, giacu, gia, tenkhongdau, type FROM #_product WHERE id_danhmuc='".$hot_category[$j]['id']."' and hienthi=1 and noibat=1 order by stt, id desc limit 8");?>

			<div class="box-category <?=($j>0) ? "mt40" : ""?>">
				<p class="title title-right"><span class="line-1"><?=$hot_category[$j]['ten']?></span></p>
				<?=hot_product();?>
			</div>
		<?php } ?>
	</div>
</section>