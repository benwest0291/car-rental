<?php
$testimonialsSmallHeading = $data["testimonials_small_heading"];
$testimonialsHeading = $data["testimonials_main_heading"];
$testimonialsParagraph = $data["testimonials_paragraph"]
?>

<section class="testimonials__block mb-5">
    <div class="container">
        <div class="testimonials__block__top">
            <?php if ($testimonialsSmallHeading != null) { ?>
                <h5><?php echo $testimonialsSmallHeading ?></h5>
            <?php } ?>

            <?php if ($testimonialsHeading  != null) { ?>
                <h2 class="text-center"><?php echo $testimonialsHeading; ?></h2>
            <?php } ?>

            <?php if ($testimonialsParagraph != null) { ?>
                <p><?php echo $testimonialsParagraph; ?></p>
            <?php } ?>
        </div>
    </div>
</section>