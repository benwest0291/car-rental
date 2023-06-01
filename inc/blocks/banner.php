<?php
$bannerHeading = $data["banner_heading"];
$backgroundImage = $data["background_image"];
?>

<section class="banner mb-3">
    <div class="banner__bg" style="background-image: linear-gradient(rgba(255,255,255,0.62),rgba(255,255,255,0.92)), url(<?php echo ($backgroundImage != null ? $backgroundImage['url'] : ''); ?>);">
        <div class="container">
            <?php if ($bannerHeading == null) { ?>
                <h2><?php the_title(); ?></h2>
            <?php } else { ?>
                <h2><?php echo $bannerHeading ?></h2>
            <?php } ?>

            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('</p><p id=“breadcrumbs">', '</p><p>');
            }
            ?>
        </div>
    </div>
</section>