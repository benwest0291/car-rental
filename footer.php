<?php

// Customizer Varibles 
$logo = get_theme_mod('company_logo');
$email = get_theme_mod('contact_email');
$telephone = get_theme_mod('contact_telephone');

$monday = get_theme_mod('monday');
$tuesday = get_theme_mod('tuesday');
$wednesday = get_theme_mod('wednesday');
$thursday = get_theme_mod('thursday');
$friday = get_theme_mod('friday');
$saturday = get_theme_mod('saturday');
$sunday = get_theme_mod('sunday');
$footerText = get_theme_mod("text");
$form = get_field("footer_form", 'option');

if ($form != null) {
    $formShortcode = '[contact-form-7 id="' . $form->ID . '"]';
}
?>

<footer class="footer pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <?php if ($logo != null) { ?>
                    <img class="mt-5 footer__logo" src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></img>
                <?php } ?>

                <?php if ($footerText != null) { ?>
                    <p class="footer__text"><?php echo $footerText; ?></p>
                <?php } ?>

                <?php if ($telephone != null) { ?>
                    <div class="d-flex footer__contact__phone w-100">
                        <i class="footer__phone fa-solid mt-1 fa-square-phone"></i>
                        <p class="mt-2"><?php echo $telephone; ?></p>
                    </div>
                <?php } ?>

                <?php if ($email != null) { ?>
                    <div class=" d-flex footer__contact__email">
                        <i class="footer__email fa-solid mt-1 fa-square-envelope"></i>
                        <p class="mt-2 w-100"><?php echo $email; ?></p>
                    </div>
                <?php } ?>
            </div>

            <div class="col-12 col-md-3 mt-md-5">
                <h5 class="footer__heading mb-4">NAVIGATION</h5>
                <ul class="footer__nav">
                    <?php
                    wp_nav_menu(array(
                        "theme_location" => "footerMenuNews",
                        "menu__class" => "footer__navigation__links"
                    ));
                    ?>
                </ul>
            </div>

            <div class="col-12 col-md-3 mt-md-5">
                <h5 class="footer__heading mb-4">WORKING HOURS</h5>
                <ul class="footer__opening__hours">
                    <?php if ($monday != null) { ?>
                        <li class="mb-1">Mon: <?php echo $monday; ?></li>
                    <?php } ?>

                    <?php if ($tuesday != null) { ?>
                        <li class="mb-1">Tues: <?php echo $tuesday; ?></li>
                    <?php } ?>

                    <?php if ($wednesday != null) { ?>
                        <li class="mb-1">Wed: <?php echo $wednesday; ?></li>
                    <?php } ?>

                    <?php if ($thursday != null) { ?>
                        <li class="mb-1">Thurs: <?php echo $thursday; ?></li>
                    <?php } ?>

                    <?php if ($friday != null) { ?>
                        <li class="mb-1">Fri: <?php echo $friday; ?></li>
                    <?php } ?>

                    <?php if ($saturday != null) { ?>
                        <li class="mb-1">Sat: <?php echo $saturday; ?></li>
                    <?php } ?>

                    <?php if ($sunday != null) { ?>
                        <li class="mb-1">Sun: <?php echo $sunday; ?></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-12 col-md-3 mt-md-5">
                <h5 class="footer__heading mb-4">SUBSCRIPTION</h5>
                <p class="footer__subscription__text">Subscribe your email address for latest news & updates.</p>
                <?php if ($formShortcode != null) {
                    echo do_shortcode($formShortcode);
                } ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</div><!--Wrapper -->
</body>

</html>