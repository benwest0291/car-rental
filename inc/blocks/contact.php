<?php
// Customizer 
$email = get_theme_mod('contact_email');
$telephone = get_theme_mod('contact_telephone');

$contactInformationHeading = get_field("contact_information_heading");
$contactInformationParagraph = get_field("contact_information_paragraph");
$contactLocation = get_field("contact_location");
$contactBackgroundImage = get_field("contact_background_image");
$form = get_field("contact_form");

if ($form != null) {
    $formShortcode = '[contact-form-7 id="' . $form->ID . '"]';
}
?>

<section class="contact__block" style="background-image: url(<?php echo ($contactBackgroundImage != null ? $contactBackgroundImage['url'] : ''); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mt-5">
                <div class="contact__block__container">
                    <?php if ($contactInformationHeading != null) { ?>
                        <h2 mb-3"><?php echo $contactInformationHeading; ?></h2>
                    <?php } ?>

                    <?php if ($contactInformationParagraph != null) { ?>
                        <p class="mt-4"><?php echo $contactInformationParagraph; ?></p>
                    <?php } ?>

                    <?php if ($telephone != null) { ?>
                        <div class="d-flex justify-content-between contact__block__info__one">
                            <i class=" fa-solid mt-1 fa-square-phone"></i>
                            <p class="mt-1"><?php echo $telephone; ?></p>
                        </div>
                    <?php } ?>

                    <?php if ($email != null) { ?>
                        <div class="d-flex justify-content-between contact__block__info__two">
                            <i class="fa-solid mt-1 fa-square-envelope"></i>
                            <p class="mt-1"><?php echo $email; ?></p>
                        </div>
                    <?php } ?>

                    <?php if ($contactLocation != null) { ?>
                        <p class="contact__block__location"><?php echo $contactLocation; ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class=" col-12 col-md-6 mt-5">
                <?php if ($formShortcode != null) {
                    echo do_shortcode($formShortcode);
                } ?>
            </div>
        </div>
    </div>
</section>