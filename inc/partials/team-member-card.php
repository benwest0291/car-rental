<div class="teammember__card mb-5">
    <img src="<?php the_post_thumbnail_url("post"); ?>" alt="tem member"/>
    <div class="teammember__card__info">
        <h5 class="teammember__card__name text-center pt-4"><?php the_title(); ?></h5>
        <p class="teammember__card__role text-center pb-4"><?php echo get_the_excerpt(); ?></p>
    </div>
</div>