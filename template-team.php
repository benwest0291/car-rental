<?php
/* Template Name: Meet the team */


get_header();

render_site_banner("meet_the_team_banner");

?>

<div class="pb-5">
    <div class="container">
        <div class="row mt-5">
            <?php
            $team = new WP_Query(array(
                "posts_per_page" => 10,
                "post_type" => "team",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($team->have_posts()) {
                $team->the_post();
            ?>
                <div class="col-12 col-md-4">
                    <?php get_template_part("inc/partials/team-member-card"); ?>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_strapline("meet_the_team_strapline");

get_footer();
