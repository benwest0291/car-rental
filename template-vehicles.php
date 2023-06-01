<?php
/* Template Name: Vehicles */

get_header();

render_site_banner("vehicles_banner");

?>

<div class="pb-5 mt-5">
    <div class="container">
        <div class="row">
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
                <div class="col-12 col-md-4">
                    <?php get_template_part("inc/partials/vehicle-card"); ?>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_strapline("vehicles_stapline");

get_footer();
