<?php
/* Template Name: Reviews */

get_header();

render_site_banner("reviews_banner");

render_testimonials_block("testimonials_page");

?>

<div class="pb-5">
    <div class="container">
        <div class="row">
            <?php
            $testimonials = new WP_Query(array(
                "posts_per_page" => 10,
                "post_type" => "testimonial",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($testimonials->have_posts()) {
                $testimonials->the_post();
            ?>
                <div class="col-12 col-md-6">
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

render_strapline("reviews_strapline");

get_footer();
