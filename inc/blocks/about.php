<?php
$aboutImage = $data["about_image"];
$aboutSmallHeading = $data["about_small_heading"];
$aboutMainHeading = $data["about_main_heading"];
$aboutParagraph = $data["about_paragraph"];
$aboutIconOne = $data["about_icon_one"];
$aboutServiceNumberOne = $data["about_service_number_one"];
$aboutServiceOne = $data["about_service_one"];
$aboutIconTwo = $data["about_icon_two"];
$aboutServiceNumberTwo = $data["about_service_number_two"];
$aboutServiceTwo = $data["about_service_two"];
$aboutIconThree = $data["about_icon_three"];
$aboutServiceNumberThree = $data["about_service_number_three"];
$aboutServiceThree = $data["about_service_three"];
?>

<section class="about__block">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mt-5">
                <?php if ($aboutImage != null) { ?>
                    <img class="about__block__image" src="<?php echo $aboutImage['url']; ?>" />
                <?php } ?>
            </div>

            <div class="col-12 col-md-6 mt-5">
                <div class="about__block__right__container">
                    <?php if ($aboutSmallHeading != null) { ?>
                        <h5 class="about__block__small__heading"><?php echo $aboutSmallHeading; ?></h5>
                    <? } ?>

                    <?php if ($aboutMainHeading != null) { ?>
                        <h2 class="about__block__main__heading mt-2 mb-4"><?php echo $aboutMainHeading; ?></h2>
                    <?php } ?>

                    <?php if ($aboutParagraph != null) { ?>
                        <p class="about__block__paragraph mt-2 mb-4"><?php echo $aboutParagraph; ?></p>
                    <?php } ?>

                    <div class="d-flex justify-content-between about__block__service__section">
                        <div class="about__block__lower">
                            <?php if ($aboutIconOne != null) { ?>
                                <img class="about__block__icon" src="<?php echo $aboutIconOne['url']; ?>" />
                            <?php } ?>

                            <?php if ($aboutServiceNumberOne != null) { ?>
                                <h2 class="about__block__service__number mr-5"><?php echo $aboutServiceNumberOne; ?></h2>
                            <?php } ?>

                            <?php if ($aboutServiceOne != null) { ?>
                                <p class="about__block__service mt-2"><?php echo $aboutServiceOne; ?></p>
                            <?php } ?>
                        </div>
                        <div class="about__block__lower">
                            <?php if ($aboutServiceOne != null) { ?>
                                <img class="about__block__icon" src="<?php echo $aboutIconTwo['url']; ?>" />
                            <?php } ?>

                            <?php if ($aboutServiceNumberTwo != null) { ?>
                                <h2 class="about__block__service__number"><?php echo $aboutServiceNumberTwo; ?></h2>
                            <?php } ?>

                            <?php if ($aboutServiceTwo != null) { ?>
                                <p class="about__block__service mt-2"><?php echo $aboutServiceTwo; ?></p>
                            <?php } ?>
                        </div>
                        <div class="about__block__lower">
                            <?php if ($aboutIconThree != null) { ?>
                                <img class="about__block__icon" src="<?php echo $aboutIconThree['url']; ?>" />
                            <?php } ?>

                            <?php if ($aboutServiceNumberThree != null) { ?>
                                <h2 class="about__block__service__number"><?php echo $aboutServiceNumberThree; ?></h2>
                            <?php } ?>

                            <?php if ($aboutServiceThree != null) { ?>
                                <p class="about__block__service mt-2"><?php echo $aboutServiceThree; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>