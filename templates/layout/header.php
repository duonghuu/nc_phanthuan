<header class="cover-head" style="background: url(<?=get_photo_static('bg-header')?>) center/cover no-repeat;">
	<section class="box-head">
		<div class="container flex">
			<a href="" class="logo"><img src="<?=get_photo_static('logo')?>"/></a>
			<img class="banner" src="<?=get_photo_static('banner')?>"/>
			<div class="info flex flex-wrap">
				<div class="box flex">
					<i class="far fa-envelope"></i>
					<div>
						<p>Email liên hệ</p>
						<span><?=$company['email']?></span>
					</div>
				</div>
				<div class="box hotline ml10 flex">
					<i class="fas fa-phone-alt"></i>
					<div>
						<p>Holine tư vấn</p>
						<span><?=$company['dienthoai']?></span>
					</div>
				</div>
			</div>
		</div>
	</section>
</header>