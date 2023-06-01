<div class="testimonial__card mb-4">
    <p class="testimonial__card__comment mt-2">
        <?php echo wp_trim_words(get_the_content(), 25); ?>
    </p>
    <div class="testimonial__card__lower mt-5">
        <div class="d-flex justify-content-between">
            <img src="<?php the_post_thumbnail_url("post"); ?>" />
            <div class="w-100">
                <p class="testimonial__card__name"><?php the_title(); ?></p>
                <p class="testimonial__card__location"><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end pt-4">
        <img class="testimonial__card__speech" src="<?php echo get_template_directory_uri(); ?>/assets/images/speech.png" />
    </div>
</div>