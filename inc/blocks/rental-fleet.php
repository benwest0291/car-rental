<?php
$rentalFleetSmallHeading = $data["rental_fleet_small_heading"];
$rentalFleetHeading = $data["rental_fleet_main_heading"];
$rentalFleetParagraph = $data["rental_fleet_paragraph"];

?>


<section class="rental__fleet">
    <div class="container">
        <div class="rental__fleet__top">
            <?php if ($rentalFleetSmallHeading != null) { ?>
                <h5><?php echo $rentalFleetSmallHeading  ?></h5>
            <?php } ?>

            <?php if ($rentalFleetHeading  != null) { ?>
                <h2 class="text-center"><?php echo $rentalFleetHeading; ?></h2>
            <?php } ?>

            <?php if ($rentalFleetParagraph != null) { ?>
                <p><?php echo $rentalFleetParagraph; ?></p>
            <?php } ?>
        </div>
    </div>

    <div class="rental__fleet__block mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <?php
                    $vehicles = new WP_Query(array(
                        "posts_per_page" => 10,
                        "post_type" => "vehicle",
                        "orderby" => "meta_value_num",
                        "order" => "ASC"
                    ));

                    while ($vehicles->have_posts()) {
                        $vehicles->the_post();
                    ?>
                        <ul class="rental__fleet__block">
                            <li class="js-vehicle-selected mb-md-1"><?php the_title(); ?></li>
                        </ul>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>

                </div>

                <div class="col-12 col-lg-6">
                    <div class="js-rental__fleet__block__image d-flex justify-content-center mt-5 mb-5">
                        <!-- JS INJECTED -->
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="js-rental__fleet__block__chart">
                        <!-- JS INJECTED -->
                    </div>
                    <button class="contact__btn mt-1">RESERVE NOW</button>
                </div>
            </div>
        </div>
    </div>
</section>