<h2 class="title"><?=$title?></h2>
<div class="cover-contact flex flex-wrap">
	<aside class="content lh2"><?=$contact['noidung']?></aside>
	<form class="form" name="contact_form" method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Họ tên</label>
			<input type="text" class="form-control" name="data_contact[ten]" required>
		</div>
		<div class="form-group">
			<label><?=_diachi?></label>
			<input type="text" class="form-control" name="data_contact[diachi]" required>
		</div>
		<div class="form-group">
			<label><?=_dienthoai?></label>
			<input type="text" class="form-control" name="data_contact[dienthoai]" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="data_contact[email]" required>
		</div>
		<div class="form-group">
			<label><?=_chude?></label>
			<input type="text" class="form-control" name="data_contact[chude]" required>
		</div>
		<div class="form-group">
			<label><?=_noidung?></label>
			<textarea class="form-control" name="data_contact[noidung]" rows="5" required></textarea>
		</div>

		<input type="hidden" name="data_contact[type]" value="contact">
		<input type="hidden" name="recaptcha_response" id="recaptchaResponse">			
		<button type="submit" class="btn"><?=_gui?></button>
		<button type="button" class="btn" onclick="document.contact_form.reset();"><?=_nhaplai?></button>
	</form>		
	<?=get_AddonsOnline("bando",'100%',500,"map")?>
</div>