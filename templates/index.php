<!DOCTYPE html>
<html lang="<?=$config['website']['lang-doc']?>">
<head>
    <?php include TEMPLATE.LAYOUT."head.php"; ?>
    <?php include TEMPLATE.LAYOUT."bundle_css.php"; ?>
</head>
<body>
    <?php
        include TEMPLATE.LAYOUT."seo.php";
        include TEMPLATE.LAYOUT."header.php";
        include TEMPLATE.LAYOUT."menu.php";
        include TEMPLATE.LAYOUT."mmenu.php";
        include TEMPLATE.LAYOUT."slide.php";
        if($source!='index') include TEMPLATE.LAYOUT."breadcrumb.php";
    ?>
    <div class="wrap-main <?=($source=='index')?'wrap-home':''?> w-clear"><?php include TEMPLATE.$template."_tpl.php"; ?></div>
    <?php
        include TEMPLATE.LAYOUT."footer.php";
        include TEMPLATE.LAYOUT."modal.php";
        include TEMPLATE.LAYOUT."bundle_js.php";
        // if($deviceType=='mobile') include TEMPLATE.LAYOUT."phone.php";
    ?>
</body>
</html>