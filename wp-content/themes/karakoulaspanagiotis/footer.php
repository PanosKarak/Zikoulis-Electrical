<footer>

            <div class="col-12 p-4 d-flex flex-column align-items-center phone-banner">
                <h1>Χρειάζεστε Ηλεκτρολόγο?</h1>
                <h5>Περιγράψτε μας κάθε σας ανάγκη!</h5>
                <button type="button" class="btn btn-lg px-4 fw-bold info-button"><a href="tel:+306948206828" style="color: white; text-decoration: none;">Καλέστε μας στο 6948206828</a></button>
            </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5" id="container-footer">
            <div class="footer-logo d-flex flex-column align-items-center">
                <a href="<?php echo site_url('/'); ?>" class="text-decoration-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zikoulis-electrical.jpg" alt="Zikoulis Electrical logo" width="200" height="100" class="logo img-fluid">
                    <hr><span class="footer-logo-text mt-2"><?php echo get_bloginfo( 'name' );?></span>
                </a>
            </div>
            <div class="footer-column">
                <ul class="footer-contact">
                    <h4>Στοιχεία Επικοινωνίας</h4>
                    <li class="nav-item mb-2"><a href="mailto:info@zikoulis.com" class="footer-link"><span class="icon-icon-mail" id="footer-icons"></span> E-mail: info@zikoulis.com</a></li>
                    <li class="nav-item mb-2"><a href="tel:+306948206828" class="footer-link"><span class="icon-icon-phone" id="footer-icons"></span> Τηλέφωνο: 6948206828</a></li>
                    <li class="nav-item mb-2"><a href="#" class="footer-link"><span class="icon-icon-location" id="footer-icons"></span> Έδρα: Αιανή Κοζάνης</a></li>
                    <li class="nav-item mb-2"><a href="https://www.facebook.com/george.zikoulis.7" class="footer-link"><span class="icon-icon-facebook" id="footer-icons"></span> Βρείτε μας στο Facebook!</a></li>
                    <li class="nav-item mb-2"><a href="https://www.instagram.com/zikoulis_electrical/" class="footer-link"><span class="icon-icon-instagram" id="footer-icons"></span> Αλλά και στο Instagram!</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <?php
                    wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'footer-column',
                    'fallback_cb' => false
                    ));
                ?>
            </div>
        </div>
    <hr>
    <div class="copyright">
        <p>© Zikoulis Electrical <?php echo date('Y'); ?> - All rights reserved.</p>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>