<style>
    header .intro-text .name, .header .intro-text .name {
    font-size: 60px;
    letter-spacing: 4px;
    margin-bottom: -5px;
}
.name .pastille{
    letter-spacing: 0px;
}

header .intro-text .skills{
    font-size: 15px !important;
}
</style>

<!-- <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logocagou-<?php echo $subdomainName; ?>.png" class="nc_map"><br> -->
<span class="name font-blackoutM">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/KGOUGLE-logo.png" 
    height="60" class="inline margin-bottom-15 margin-top-25"><br>

    <?php if(false){ ?>
        <small class="letter letter-red pastille font-blackoutT"><?php echo $subdomainName; ?></small>
    <?php } ?>
</span>

<div class="inline-block hidden-xs margin-top-15" id="subtitle">
    <span class="skills font-montserrat "><?php echo $mainTitle; ?></span>
</div>      
