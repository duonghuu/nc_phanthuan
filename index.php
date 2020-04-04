<?php
error_reporting(E_ALL & ~E_NOTICE & ~8192);

session_start();
$session=session_id();

@define ( '_source' , './sources/');
@define ( '_lib' , './admin/lib/');

include_once _lib."Mobile_Detect.php";
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

if($deviceType == 'phone') @define ( '_template' , './templates_m/');
else @define ( '_template' , './templates/');

$lang_default = array("","en");
if(!isset($_SESSION['lang']) or !in_array($_SESSION['lang'], $lang_default))
{
    $_SESSION['lang'] = $company['lang_default'];
}
$lang=$_SESSION['lang'];

include_once _lib."AntiSQLInjection.php";
require_once _source."lang$lang.php";	
include_once _lib."config.php";
// if($config['arrayDomainSSL']) include_once _lib."checkSSL.php";
// if (file_exists(_lib."nina_firewall.php")){
//     include_once _lib."nina_firewall.php";
// }
include_once _lib."constant.php";
include_once _lib."functions.php";
include_once _lib."functions_for.php";	
include_once _lib."class.database.php";
include_once _lib."functions_user.php";
include_once _lib."functions_giohang.php";
include_once _lib."functions_layout.php";
include_once _lib."file_requick.php";
include_once _source."counter.php";	
include_once _source."custom.php"; 
if(!isset($_SESSION["dong"])){
    $_SESSION["dong"] = get_photo_static('logo');
}
?>
<!doctype html>
<html lang="vi">
<head itemscope itemtype="<?=$https?>schema.org/WebSite">
    <base href="<?=$https?><?=$config_url?>/" />
    <link rel="canonical" href="<?=getCurrentPageURL_CANO()?>" />  
    <link rel="manifest" href="/manifest.json">
    <?php include "oneSignal.php"; ?>
    <?php if($deviceType =='phone'){?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <?php } else { ?>
        <meta name="viewport" content="width=1349, initial-scale=0">
    <?php } ?>

    <?php include _template."layout/seoweb.php";?>
    <?php include _template."layout/base_css.php";?> 
    <?=$company['codetren']?>       
</head>
<?php include _template."layout/background.php";?>
<body>
    <!-- <div id="pre-loader"><div class="loader"></div></div> -->
    <h1 class="vcard fn" style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h1>
    <h2 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h2>
    <h3 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h3>

    <div class="cover">
        <?php
            include _template."layout/header.php";
            include _template."layout/menu.php";
            if($source == 'index' || $template == 'product') include _template."layout/slider-category.php";
        ?>

        <?php if($source != 'index') { ?> <article class="page-inside pd20-0"> <?php } ?>
            <?php if($com != 'dich-vu') { ?> <div class="container"> <?php } ?>
                <?php include _template.$template."_tpl.php"; ?>
            <?php if($com != 'dich-vu') { ?> </div> <?php } ?>
        <?php if($source != 'index') { ?> </article> <?php } ?>

        <?php include _template."layout/footer.php"; ?>

        <p class="totop"></p>
    </div>
    
    <?php if($deviceType == 'computer') include _template."layout/tool.php";?> 
    <?php include _template."layout/base_js.php";?> 
    <?php include _template."layout/widget-mobile.php";?> 
</body>
</html>