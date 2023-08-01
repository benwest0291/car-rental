<?php
$tripPlanSmallHeading = $data["trip_plan_small_heading"];
$tripPlanHeading = $data["trip_plan_main_heading"];
$tripPlanImageOne = $data["trip_plan_image_one"];
$tripPlanTitleOne = $data["trip_plan_title_one"];
$tripPlanParagraphOne = $data["trip_plan_paragraph_one"];
$tripPlanImageTwo = $data["trip_plan_image_two"];
$tripPlanTitleTwo = $data["trip_plan_title_two"];
$tripPlanParagraphTwo = $data["trip_plan_paragraph_two"];
$tripPlanImageThree = $data["trip_plan_image_three"];
$tripPlanTitleThree = $data["trip_plan_title_three"];
$tripPlanParagraphThree = $data["trip_plan_paragraph_three"];
?>

<section class="trip__plan">
    <div class="container">
        <?php if ($tripPlanSmallHeading != null) { ?>
            <h5 class="text-center"><?php echo $tripPlanSmallHeading; ?></h5>
        <?php } ?>

        <?php if ($tripPlanHeading != null) { ?>
            <h2 class="text-center"><?php echo $tripPlanHeading; ?></h2>
        <?php } ?>
        <div class="row mt-5">
            <div class="col-12 col-md-4 mt-2">
                <div class="trip__plan__card">
                    <?php if ($tripPlanImageOne != null) { ?>
                        <img class="" src="<?php echo $tripPlanImageOne['url']; ?>" />
                    <?php } ?>

                    <?php if ($tripPlanTitleOne != null) { ?>
                        <h5><?php echo $tripPlanTitleOne; ?></h5>
                    <?php } ?>

                    <?php if ($tripPlanParagraphOne != null) { ?>
                        <p class="text-center w-75 mt-2"><?php echo $tripPlanParagraphOne; ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="trip__plan__card">
                    <?php if ($tripPlanImageTwo != null) { ?>
                        <img class="" src="<?php echo $tripPlanImageTwo['url']; ?>">
                    <?php } ?>

                    <?php if ($tripPlanTitleTwo != null) { ?>
                        <h5><?php echo $tripPlanTitleTwo; ?></h5>
                    <?php } ?>

                    <?php if ($tripPlanParagraphTwo != null) { ?>
                        <p class="text-center w-75 mt-2"><?php echo $tripPlanParagraphTwo; ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="trip__plan__card">
                    <?php if ($tripPlanImageThree != null) { ?>
                        <img class="" src="<?php echo $tripPlanImageThree['url']; ?>">
                    <?php } ?>

                    <?php if ($tripPlanTitleThree != null) { ?>
                        <h5><?php echo $tripPlanTitleThree; ?></h5>
                    <?php } ?>

                    <?php if ($tripPlanParagraphThree != null) { ?>
                        <p class="text-center w-75 mt-2"><?php echo $tripPlanParagraphThree; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>