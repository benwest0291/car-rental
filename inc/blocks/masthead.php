<?php
$mastheadBgImage = $data["masthead_bg_image"];
$mastheadSmallImage = $data["masthead_small_heading"];
$mastheadMainHeading = $data["masthead_main_heading"];
$mastheadParagrph = $data["masthead_paragraph"];
$mastheadImage = $data["masthead_image"];
$mastheadLeftBtnHeading = $data["masthead_left_button_heading"];
$mastheadLeftBtnUrl = $data["masthead_left_button_url"];
$mastheadRightBtnHeading = $data["masthead_right_button_heading"];
$mastheadRightBtnUrl = $data["masthead_right_button_url"];
?>
<section class="masthead">
    <?php if ($mastheadBgImage != null) { ?>
        <div class="masthead__bg" style="background-image: url(<?php echo ($mastheadBgImage != null ? $mastheadBgImage['url'] : ''); ?>);">
        <?php } ?>
        <div class="container">
            <div class="row masthead__container">
                <div class="col-12 col-md-6">
                    <div class="w-100">
                        <?php if ($mastheadSmallImage != null) { ?>
                            <h5><?php echo $mastheadSmallImage; ?></h5>
                        <?php } ?>

                        <?php if ($mastheadMainHeading != null) { ?>
                            <?php echo $mastheadMainHeading; ?>
                        <?php } ?>

                        <?php if ($mastheadParagrph != null) { ?>
                            <?php echo $mastheadParagrph; ?>
                        <?php } ?>

                        <div class="masthead__btn__container mt-4">
                            <?php if ($mastheadLeftBtnHeading != null) { ?>
                                <a class="masthead__orange__btn" href="<?php echo $mastheadLeftBtnUrl; ?>"><?php echo $mastheadLeftBtnHeading; ?><img class="masthead__btn__icon__tick" src=" <?php echo get_template_directory_uri(); ?>/assets/images/tick.png"></a>
                            <?php } ?>

                            <?php if ($mastheadRightBtnHeading != null) { ?>
                                <a class="masthead__black__btn" href="<?php echo $mastheadRightBtnUrl; ?>"><?php echo $mastheadRightBtnHeading; ?><img class="masthead__btn__icon__chevron" src="<?php echo get_template_directory_uri(); ?>/assets/images/cheveron.png"></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <?php if ($mastheadImage != null) { ?>
                        <img class="masthead__image" src="<?php echo $mastheadImage['url']; ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
</section>