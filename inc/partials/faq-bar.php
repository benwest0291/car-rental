<div class="faq__bar">
    <div class="faq__bar__question d-flex justify-content-between js-faq__bar__question">
        <p class="mt-2"><?php the_title(); ?></p>
        <img class="faq__bar__icon__chevron js-faq__chevron" src="<?php echo get_template_directory_uri(); ?>/assets/images/black-chev.png" alt="chevron">
    </div>

    <p class="faq__bar__answer">
        <?php echo wp_trim_words(get_the_content(), 100); ?>
    </p>
</div>