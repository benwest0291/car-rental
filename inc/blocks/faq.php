<?php
$faqSmallHeading = $data["faq_small_heading"];
$faqHeading = $data["faq_main_heading"];
$faqParagraph = $data["faq_paragraph"];
$faqSideImage = $data["faq_side_image"];
?>

<section class="faq__block mt-5 mb-5">
    <img class="faq__block__image d-none d-lg-block" src="<?php echo $faqSideImage["url"]; ?>" alt="<?php echo $faqSideImage["alt"]; ?>"">
    <div class="container">
        <div class="faq__block__top">
            <?php if ($faqSmallHeading != null) { ?>
                <h5><?php echo $faqSmallHeading ?></h5>
            <?php } ?>

            <?php if ($faqHeading  != null) { ?>
                <h2 class="text-center"><?php echo $faqHeading; ?></h2>
            <?php } ?>

            <?php if ($faqParagraph != null) { ?>
                <p><?php echo $faqParagraph; ?></p>
            <?php } ?>
        </div>
    </div>
</section>