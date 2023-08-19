<?php
$model = get_field("model");
$cost = get_field("cost");
$stars = get_field("stars");
$transmition = get_field("transmition");
$fuel = get_field("fuel");
$manufacturer = get_field("manufacturer");
$seats = get_field("seats");
?>


<div class="vehicle__card card mb-4">
    <img class="vehicle__card__image" src="<?php the_post_thumbnail_url("post"); ?>" alt="car image" />
    <div class="vehicle__card__content">
        <div class="d-flex justify-content-between">
            <h6 class="vehicle__card__heading"><?php the_title(); ?></h6>
            <?php if ($cost != null) { ?>
                <h6 class="vehicle__card__heading">£<?php echo $cost; ?></h6>
            <?php } ?>
        </div>

        <div class="d-flex justify-content-between">
            <?php if ($stars != null) { ?>
                <div>
                    <?php if ($stars == 1) { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                    <?php } elseif ($stars == 2) { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                    <?php } elseif ($stars == 3) { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                    <?php } elseif ($stars == 4) { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                    <?php } elseif ($stars == 5) { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star">
                    <?php } ?>
                </div>
            <?php } ?>
            <h6>per day</h6>
        </div>

        <div class="vehicle__card__info mt-3">
            <span>
                <img class="vehicle__card__car" src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" alt="car icon">
            </span>
            <span>
                <p><?php echo $model; ?></p>
            </span>
            <span>
                <p><?php echo $seats; ?></p>
            </span>
            <span>
                <img class=" vehicle__card__car" src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" alt="car icon"/>
            </span>
        </div>

        <div class="vehicle__card__info mt-3">
            <span>
                <img class="vehicle__card__car" src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" alt="car icon"/>
            </span>
            <span>
                <p><?php echo $transmition ?></p>
            </span>
            <span class="d-flex">
                <p><?php echo $fuel; ?></p>
            </span>
            <span>
                <img class="vehicle__card__car" src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" alt="car icon"/>
            </span>
        </div>
        <hr class="mb-3">
        <div class="d-flex">
            <a title="book a ride" class="vehicle__card__info__btn text-center" href="<?php echo site_url('/contact') ?>">Book Ride</a>
        </div>
    </div>
</div>