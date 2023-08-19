<?php get_header();

render_masthead("homepage_masthead");

include('inc/partials/vehicle-booking-form.php');

render_trip_planner("homepage_trip_plan");

render_rental_fleet_block("homepage_rental");

render_large_strapline("homepage_large_strapline");

render_deals("homepage_deals");

render_testimonials_block("homepage_testimonials");

?>
<div class="query testimonials__block">
    <div class="container">
        <div class="row">
            <?php
            $testimonials = new WP_Query(array(
                "posts_per_page" => 2,
                "post_type" => "testimonial",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($testimonials->have_posts()) {
                $testimonials->the_post();
            ?>
                <div class="col-12 col-lg-6">
                    <div class="testimonials__block__cards">
                        <?php get_template_part("inc/partials/testimonial-card"); ?>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_faq_block("homepage_faq");

?>
<div class="query">
    <div class="container">
        <div class="row">
            <?php
            $faq = new WP_Query(array(
                "posts_per_page" => 6,
                "post_type" => "faq",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($faq->have_posts()) {
                $faq->the_post();
            ?>
                <div class="faq__bar__container">
                    <?php get_template_part("inc/partials/faq-bar"); ?>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_banner("homepage_download_banner");

get_footer();
