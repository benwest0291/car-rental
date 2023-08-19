<?php
$menuLocations = get_nav_menu_locations();
$logo = get_theme_mod('company_logo');

if (isset($menuLocations['header'])) {
    $header_links = wp_get_nav_menu_items($menuLocations['header']);
} else {
    $header_links = null;
}

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title();?></title>
    <meta name="theme-color" content="#2D2D2D">
</head>

<body <?php body_class(); ?>>
    <header class="header position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 w-sm-25">
                    <a title="<?php echo get_bloginfo("name"); ?>" href="<?php echo site_url("/") ?>"><img class=" mt-3 mt-sm-5 " src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></img></a>
                </div>
                <div class="navigation__links__container col-12 col-md-8">
                    <?php if (!empty($header_links)) { ?>
                        <nav>
                            <ul class="navigation__links list-unstyled">
                                <?php foreach ($header_links as $item) { ?>
                                    <li class="navigation__link m-1">
                                        <a title="<?php echo $item->title; ?>" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                                    </li>
                                <?php } ?>
                                <li class="navigation__link list-unstyled m-1 d-lg-none d-block">
                                    <a href="<?php echo site_url('/contact')?>">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-end">
                    <ul>
                        <li class="navigation__link mt-5 list-unstyled m-1 d-none d-lg-block">
                            <a class="navigation__contact__btn" href="<?php echo site_url('/contact')?>">Contact</a>
                        </li>
                    </ul>
                    <div class="navigation__burger js-navigation__burger position-absolute">
                        <div class="line__one"></div>
                        <div class="line__two"></div>
                        <div class="line__three"></div>
                    </div>
                </div>
                </nav>
            </div>
    </header>