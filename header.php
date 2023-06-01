<?php
// Customizer Varibles 
$logo = get_theme_mod('company_logo');
?>

<!DOCTYPE html>
<html lang=<?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Car Rental</title>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 w-sm-25">
                    <a href="<?php echo site_url("/") ?>"><img class=" mt-3 mt-sm-5 " src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></img></a>
                </div>
                <div class="col-12 col-md-8">
                    <ul class="navigation">
                        <?php
                        wp_nav_menu(array(
                            "theme_location" => "headerMenu",
                            "menu__class" => "header__navigation__links"
                        ));
                        ?>
                    </ul>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-end">
                    <a class="navigation__contact__btn mt-5 pt-2" href="/contact">Contact</a>
                    <div class="navigation__burger js-navigation__burger">
                        <div class="line__one"></div>
                        <div class="line__two"></div>
                        <div class="line__three"></div>
                    </div>
                </div>
                </nav>
            </div>
    </header>