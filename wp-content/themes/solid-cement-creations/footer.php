<?php
/**
 * Theme footer.
 *
 * @package SolidCement
 */
?>
</main>
<footer class="site-footer">
    <div class="container">
        <div class="site-footer__grid">
            <div>
                <h4>Visit Us</h4>
                <p>Solid Cement Creations<br />
                    12 Artisan Way<br />
                    Brisbane, QLD 4000
                </p>
                <p><strong>Hours</strong><br />
                    Mon – Fri: 8am – 5pm<br />
                    Sat: 9am – 2pm
                </p>
            </div>
            <div>
                <h4>Stay Connected</h4>
                <ul>
                    <li><a href="https://instagram.com" target="_blank" rel="noopener">Instagram</a></li>
                    <li><a href="https://facebook.com" target="_blank" rel="noopener">Facebook</a></li>
                    <li><a href="https://pinterest.com" target="_blank" rel="noopener">Pinterest</a></li>
                </ul>
            </div>
            <div>
                <h4>Feedback</h4>
                <form class="feedback-form" method="post" action="#">
                    <div class="form-control">
                        <label for="footer-name">Name</label>
                        <input type="text" id="footer-name" name="footer_name" required />
                    </div>
                    <div class="form-control">
                        <label for="footer-message">Share Your Thoughts</label>
                        <textarea id="footer-message" name="footer_message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Feedback</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( current_time( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
