<?php  if(!defined('_source')) die("Error");

	// Seo Page
	$contact = get_fetch("select id, noidung$lang as noidung, photo, thumb from #_about where type='lienhe'");

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

		$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
		$recaptcha_secret = $config_secret_key;
		$recaptcha_response = $_POST['recaptcha_response'];

		$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
		$recaptcha = json_decode($recaptcha);

		if ($recaptcha->score >= 0.5)
		{
			$data = $_POST['data_contact'];
			$data['ngaytao'] = time();
			$data['hienthi'] = 1;
			$data['stt'] = 1;
			$d->setTable('newsletter');
			if($d->insert($data))
			{
				$messages .= '
					<table>
						<tr>
							<th>Thư liên hệ từ website <a href="'.$_SERVER["SERVER_NAME"].'">'.$_SERVER["SERVER_NAME"].'</a></th>
						</tr>
						<tr>
							<td>Họ tên :</td><td>'.$data['ten'].'</td>
						</tr>
						<tr>
							<td>Địa chỉ :</td><td>'.$data['diachi'].'</td>
						</tr>
						<tr>
							<td>Điện thoại :</td><td>'.$data['dienthoai'].'</td>
						</tr>
						<tr>
							<td>Email :</td><td>'.$data['email'].'</td>
						</tr>
						<tr>
							<td>Chủ đề :</td><td>'.$data['tieude'].'</td>
						</tr>
						<tr>
							<td>Nội dung :</td><td>'.$data['noidung'].'</td>
						</tr>
					</table>';

				sent_mail($data['email'], $data['ten'], $messages, "Gửi liên hệ thành công", "Gửi liên hệ thất bại");
			}
			else
				transfer("Gửi liên hệ thất bại", "lien-he");
		}
		else
		{
			transfer("Gửi liên hệ thất bại", "lien-he");
		}
	}
?>