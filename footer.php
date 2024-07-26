<?php wp_footer(); ?>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-nav">
            <nav class="nav">
                <?php
                // Afficher le menu "footerlegal" enregistré via register_nav_menus
                wp_nav_menu(
                    array(
                        'theme_location' => 'footerlegal',
                        'container'      => false,
                        'menu_class'     => 'nav',
                        'depth'          => 1
                    )
                );
                ?>
            </nav>
        </div>
        <div class="footer-contact">
            <h3>Nous contacter</h3>
            <p>Adresse: 123 Rue de la Fontaine, Rennes</p>
            <p>Téléphone: +33 123 456 789</p>
            <p>Email: contact@example.com</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> MusicalEvent. Tous droits réservés.</p>
    </div>
</footer>
