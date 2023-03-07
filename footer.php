<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Megla
 */

?>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright text-center">
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'megla-blog' ) ); ?>">
                        <?php
                        /* translators: %s: CMS name, i.e. WordPress. */
                        printf( esc_html__( 'Proudly powered by %s', 'megla-blog' ), 'WordPress' );
                        ?>
                    </a>
                    <span class="sep"> | </span>
                    <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'megla-blog' ), 'Megla Blog', 'ashathemes' );
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
