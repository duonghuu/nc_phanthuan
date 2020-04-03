<script src="js/my_script.js" type="text/javascript"></script>
<script src="plugin/slick/slick.js" type="text/javascript"></script>
<?php if($com=='video') { ?>
	<script src="plugin/fancybox/jquery.fancybox.min.js" type="text/javascript"></script>
<?php } ?>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		
		//To top
		$(window).scroll(function(){
			if($(window).scrollTop() != 0) $('.totop').fadeIn();
			else $('.totop').fadeOut();
		});

		$("body").on("click",".totop", function(){
			$('html, body').animate({scrollTop:0},500);
		});

		//Hover menu
		$(".menu ul li").hover(function(){
			$(this).find('ul:first').stop().slideToggle(400);
		});
		
		// Alt Img
		$('img').each(function(index, element){
			if(!$(this).attr('alt') || $(this).attr('alt')=='') {
				$(this).attr('alt','<?=$company['ten']?>');
			}
		});

		// Click search menu
		$(".search-h").click(function(){			
			if ($(".search").hasClass('active')) 
			{
				$(".search").removeClass('active');
			}
			else
			{
				$(".search").addClass('active');
			}
		});

		
		$('.box_sanpham .row').addClass("slick-4");
		$('.slick-4').slick({slidesToShow: 4,});
	});

	// Search
	function doEnter(evt)
	{
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearch(evt);
		}
	}
	function onSearch(evt) 
	{
		var keyword = $('.keyword').val();

		if(keyword=='') alert('<?=_nhaptukhoatimkiem?>');
		else
		{
			location.href = "tim-kiem.html&keyword="+keyword;
			loadPage(document.location);
		}
	}
</script>

<?php if($source=='index') { ?>	
	<script type="text/javascript">
	    $(document).ready(function(){
	    	// Slick
			$('.slick-6').slick({slidesToShow: 6,});
	      	$('.slick-d3').slick({slidesToShow: 3,vertical:true,});

	      	$('body').on("click",".item-video",function(){
				var id = $(this).attr('data-id');
				var width = $(this).attr('data-width');
				var height = $(this).attr('data-height');
				if(id!=0)
					$('.sub-video1').load("ajax/ajax-Video.php?id="+id+"&width="+width+"&height="+height);
				return false;
			});
	    });
	</script>
<?php } ?>

<?php if($template=='product_detail') { ?>

	<script src="plugin/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			// Zoomplus
			var mzOptions = {
				zoomMode:true,
				onExpandClose: function(){MagicZoom.refresh();}
			};

			// Slick ảnh chi tiết sản phẩm
			$('.sub-img').slick({autoplay:false,slidesToShow: 4,arrows:true,});

			// Tab
			$('.content-tabs .tab').hide();
			$('.content-tabs .tab:first').show();
			
			$('.cover-tabs ul li').click(function(){
				var tabs = $(this).data('tabs');
				$('.cover-tabs ul li').removeClass('active');
				$(this).addClass('active');
				
				$('.content-tabs .tab').hide();
				$('.content-tabs .tab:eq('+tabs+')').show();
				return false;
			});

			// Quantity
			$(".quantity span").click(function()
			{
				var val = parseFloat($(this).parent().find("input").val());
				var up = $(this).hasClass('quantity-up');
				var down = $(this).hasClass('quantity-down');
				if(up) var result = val + 1;
				else
				{
					if(val > 1) var result = val - 1;
					else var result = 1;
				}
				$(this).parent().find("input").val(result);
			});
		});

	</script>
<?php } ?>

<?php if($source=='abc') { ?>
	<!--Menu fixed-->
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).bind("scroll", function() {
				var cach_top = $(window).scrollTop();
				var height = $('.cover-head').height();

				if(cach_top >= height)
				{
					if(!$('.cover-menu').hasClass('menu-fix'))
					{
						$('.cover-menu').addClass('menu-fix');
					}
				}
				else
				{
					$('.cover-menu').removeClass('menu-fix');
				}
			});
		});
	</script>
<?php } ?>

<!-- Đặt hàng -->
<script type="text/javascript">
	$(document).ready(function(e) {
		$('.size span').click(function(){
			$('.size span').removeClass('active');
			$(this).addClass('active');
		});
		$('.color span').click(function(){			
			$('.color span').removeClass('active');
			$(this).addClass('active');
		});
	});

	function addCart(id, kind) 
	{
		var qty = 1;
		var size = '';
		var color = '';

		if($('.template').val()=='product_detail') qty = $('.quantity input').val();
		if($('.size').length > 0)
		{
			if($('.size span.active').length > 0) size = $('.size span.active').html();
			else{alert('<?=_chonsize?>');return false;}
		}
		if($('.color').length > 0)
		{
			if($('.color span.active').length > 0) color = $('.color span.active').html();
			else{alert('<?=_chonmau?>');return false;}
		}

		$.ajax({
			type:'post',
			url:'ajax/cart.php',
			dataType:'json',
			data:{id:id, qty:qty, size:size, color:color},
			success:function(rs)
			{
				if(kind == 'add')
				{
					alert('Thêm vào giỏ hàng thành công');
					//document.location.href = "<?=getCurrentPageURL()?>";
				}
				if(kind == 'buy') document.location.href='gio-hang.html';
			}
		});
	}
</script>

<?php if($com=='lien-he') { ?>

    <script src="https://www.google.com/recaptcha/api.js?render=<?=$config_site_key?>"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('<?=$config_site_key?>', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>

<?php } ?>

<?php if($source!='index') { ?>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c789e8673f1c09c"></script>
	<script type="text/javascript">
		$(document).ready(function(e) {
			var addthis_config = addthis_config||{};
			addthis_config.lang = '<?=$lang?>';
			$(".share-toolbox").addClass("addthis_inline_share_toolbox_29t6");
		});
	</script>
<?php } else { ?>
	<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-550a87e8683b580f" async="async"></script>-->
<?php } ?>