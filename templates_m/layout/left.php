<?php
    $left_categoryLv1 = get_result("select id, ten$lang as ten, tenkhongdau from #_product_danhmuc where hienthi=1 order by stt,id desc");
?>

<section class="cover-leftCategory">
    <h3 class="title-category">Danh mục sản phẩm</h3>
    <div class="box-leftCategory">
        <?=for4capleft('product_danhmuc','product_list','product_cat','product_item','trang-tri-noi-that','trang-tri-noi-that','')?>
    </div>
</section>

<script language="javascript" type="text/javascript">
    $(document).ready(function(){
        $(".box-leftCategory ul li ul li").hover(function(){
            $(this).find('ul:first').stop().slideToggle(400);
        });
    });
</script>