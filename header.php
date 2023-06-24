<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        
        <?php wp_head();?>
        <title>Bosker-Webdevelopment Thema ontwikkel omgeving</title>
    </head>

<body <?php body_class();?>>
<header class="sticky-top">
    <div class="container">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation' 
            )
        );?>
    </div>
</header>