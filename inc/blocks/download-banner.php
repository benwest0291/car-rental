<?php
$bannerHeading = $data["banner_heading"];
$bannerParagraph = $data["banner_paragraph"];
$bannerImage = $data["banner_image"];
?>

<section class="mobile__download__banner pt-3 pb-1 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mt-2">
                <div class="mobile__download__banner__container">
                    <?php if ($bannerHeading != null) { ?>
                        <h2 class="mobile__download__banner__heading mb-4"><?php echo $bannerHeading; ?></h2>
                    <?php } ?>

                    <?php if ($bannerParagraph != null) { ?>
                        <p class=" mb-2"><?php echo $bannerParagraph; ?></p>
                    <?php } ?>
                </div>

                <div class="mt-4 mb-5">
                    <img class="mobile__download__banner__btn" src=" <?php echo get_template_directory_uri(); ?>/assets/images/google-btn.svg" alt="google button" />
                    <img class="mobile__download__banner__btn" src=" <?php echo get_template_directory_uri(); ?>/assets/images/apple-btn.svg" alt="apple button"/>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-2">
                <?php if ($bannerImage != null) { ?>
                    <img class="mobile__download__banner__image" src="<?php echo $bannerImage['url']; ?>" alt=""<?php echo $bannerImage['alt']; ?>"">
                <?php } ?>
            </div>
        </div>
    </div>
</section>