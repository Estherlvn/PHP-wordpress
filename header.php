<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class('body') ?>>
    
<?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-principal', // Emplacement du menu défini dans register_nav_menus
        'container'      => 'nav',           // Balise conteneur du menu (dans ce cas, <nav>)
        'container_class'=> 'nav',           // Classe CSS du conteneur du menu
        'menu_class'     => 'nav'            // Classe CSS de la liste du menu
    )
);
?>