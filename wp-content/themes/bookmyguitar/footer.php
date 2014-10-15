<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Book My Guitar 1.0
 */
?>

</div><!-- #main -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="top-footer mainWrapper center">
        <?php get_sidebar('main'); ?>
    </div>
    <div class="bottom-footer">
        <div class="mainWrapper center">
            <div class="left wid50">
                &copy; Book My Guitar. All Rights Reserved.
            </div>
            <div class="right wid50">
                <ul class="footer-short-menu right">
                    <li>
                        <a href="javascript:void(0)">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Legal</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Shop</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Cart</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>