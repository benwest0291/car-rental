<?php
$straplineBackground = $data["strapline_background_image"];
$straplineHeading = $data["strapline_text"];
?>

<section class="strapline" style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(<?php echo ($straplineBackground != null ? $straplineBackground['url'] : ''); ?>);">
    <div class="container">
        <div class="strapline__text">
            <?php if ($straplineHeading != null) { ?>
                <h2 class="text-center"><?php echo $straplineHeading; ?></h2>
            <?php } ?>
        </div>
</section>