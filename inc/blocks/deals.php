<?php
$dealsImage = $data["deals_main_image"];
$dealSmallHeading = $data["deals_small_heading"];
$dealsMainHeading = $data["deals_main_heading"];
$dealsParagraph = $data["deals_paragraph"];
$dealsButtonText = $data["deals_button_text"];
$dealsButtonUrl = $data["deals_button_url"];

$dealsImageOne = $data["deals_image_one"];
$dealsHeadingOne = $data["deals_heading_one"];
$dealsParagraphOne = $data["deals_paragraph_one"];

$dealsImageTwo = $data["deals_image_two"];
$dealsHeadingTwo = $data["deals_heading_two"];
$dealsParagraphTwo = $data["deals_paragraph_two"];

$dealsImageThree = $data["deals_image_three"];
$dealsHeadingThree = $data["deals_heading_three"];
$dealsParagraphThree = $data["deals_paragraph_three"];
?>


<section class="deals pb-5">
    <div class="container">

        <?php if ($dealsImage != null) { ?>
            <div class="d-flex justify-content-center">
                <img class="deals__image mt-4 mb-4" src="<?php echo $dealsImage['url']; ?>">
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="deals__text__conatiner">
                    <?php if ($dealSmallHeading != null) { ?>
                        <h5><?php echo $dealSmallHeading; ?></h5>
                    <?php } ?>

                    <?php if ($dealsMainHeading != null) { ?>
                        <h2 class="mb-3"><?php echo $dealsMainHeading; ?></h2>
                    <?php } ?>

                    <?php if ($dealsParagraph != null) { ?>
                        <p><?php echo $dealsParagraph; ?></p>
                    <?php } ?>

                    <?php if ($dealsButtonText != null) { ?>
                        <a class="deals__btn text-decoration-none" href="<?php echo $dealsButtonUrl; ?>"><?php echo $dealsButtonText; ?><img class=" masthead__btn__icon__chevron" src="<?php echo get_template_directory_uri(); ?>/assets/images/cheveron.png"></a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-md-6 deals__right">
                <div class="d-flex">
                    <?php if ($dealsImageOne != null) { ?>
                        <img class="deals__icon__image mt-2" src="<?php echo $dealsImageOne['url']; ?>">
                    <?php } ?>

                    <div>
                        <?php if ($dealsHeadingOne != null) { ?>
                            <h6 class="deals__icon__heading mt-2"><?php echo $dealsHeadingOne; ?></h6>
                        <?php } ?>

                        <?php if ($dealsParagraphOne != null) { ?>
                            <p class="deals__icon__paragraph"><?php echo $dealsParagraphOne; ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="d-flex">
                    <?php if ($dealsImageTwo != null) { ?>
                        <img class="deals__icon__image mt-2" src="<?php echo $dealsImageTwo['url']; ?>">
                    <?php } ?>
                    <div>
                        <?php if ($dealsHeadingTwo != null) { ?>
                            <h6 class="deals__icon__heading mt-2"><?php echo $dealsHeadingTwo; ?></h6>
                        <?php } ?>

                        <?php if ($dealsParagraphTwo != null) { ?>
                            <p class="deals__icon__paragraph"><?php echo $dealsParagraphTwo; ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="d-flex">
                    <?php if ($dealsImageThree != null) { ?>
                        <img class="deals__icon__image mt-2" src="<?php echo $dealsImageThree['url']; ?>">
                    <?php } ?>
                    <div>
                        <?php if ($dealsHeadingThree != null) { ?>
                            <h6 class="deals__icon__heading mt-2"><?php echo $dealsHeadingThree; ?></h6>
                        <?php } ?>

                        <?php if ($dealsParagraphThree != null) { ?>
                            <p class="deals__icon__paragraph"><?php echo $dealsParagraphThree; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</section>