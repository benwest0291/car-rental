<?php
$bookingBackgroundImage = get_field("booking_background_image");
$form = get_field("vehicle_booking_form");

if ($form != null) {
    $formShortcode = '[contact-form-7 id="' . $form->ID . '"]';
}
?>
<section class="vehicle__booking__form pb-4 container" style="background-image: url(<?php echo ($bookingBackgroundImage  != null ? $bookingBackgroundImage['url'] : ''); ?>);">
    <div class="p-3 vehicle__booking__form__bg">
        <h4 class="vehicle__booking__form__main__heading mb-4">Book a vehicle</h4>
        <?php if ($formShortcode != null) {
            echo do_shortcode($formShortcode);
        } ?>
    </div>
</section>