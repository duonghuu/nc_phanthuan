<div class="chat-face">
	<img src="images/chat-face.png" class="icon-face" alt="Chat Face">
	<?=get_AddonsOnline($company['fanpage'],500,300,"messages")?>
</div>

<a href="//zalo.me/<?=replace_number($company['dienthoai'])?>" class="chat-zalo" target="_blank"><img src="images/chat-zalo.png" alt="Chat Zalo"></a>

<a href="gio-hang.html" class="tool-cart">
	<img src="images/tool-cart.png" alt="Chat Zalo">
	<span class="flex-center"><?=count($_SESSION['cart'])?></span>
</a>

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.icon-face').click(function(){
			if($('.chat-face').hasClass('active'))
			{
				$('.chat-face').removeClass('active');
			}
			else
			{
				$('.chat-face').addClass('active');
			}
		});
    });
</script>