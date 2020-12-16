
</main>

<footer class="footer">
    <div class="container footer-content">
        <div class="copyright">
            <span> <a class="logo-footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">hotcoffee</a> 2020 copyright all rights reserved</span>
        </div>
        <div class="social-networks">
            <ul>
                <li>
                    <a href="https://instagram.com/">
                        <img src="<?php echo get_template_directory_uri() .  '/assets/images/instagram.svg'?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/">
                        <img src="<?php echo get_template_directory_uri() .  '/assets/images/twitter.svg'?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/">
                        <img src="<?php echo get_template_directory_uri() .  '/assets/images/linkedin.svg'?>" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <?php  get_theme_file_uri( 'js/scroll.js'); ?>

    <?php wp_footer(); ?>
</footer>
</body>
</html>