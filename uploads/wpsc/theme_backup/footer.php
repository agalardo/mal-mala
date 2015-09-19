<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div><!-- #main .wrapper -->
<footer id="colophon" role="contentinfo">
    <div class="site-info">
        <ul class="menu" id="menu">
            <li><a href="https://vk.com/mal_mala" target="_blank" rel="nofollow"><img src="/wp-content/themes/twentytwelve/images/ygKFQtMUrO4.png"/>&nbsp;&nbsp;Мы вКонтакте</a></li>
            <li><a href="https://twitter.com/MAL_MALA_" target="_blank" rel="nofollow"><img src="/wp-content/themes/twentytwelve/images/twitter-bird-light-bgs.png"/>&nbsp;Twitter</a></li>
        </ul>
        <div id="copyright_container">&copy;Авторские права МАЛ МАЛА 2013, all right reserved
        </div>
        <!--<?php do_action('twentytwelve_credits'); ?>
        <a href="<?php echo esc_url(__('http://wordpress.org/', 'twentytwelve')); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentytwelve'); ?>"><?php printf(__('Proudly powered by %s', 'twentytwelve'), 'WordPress'); ?></a>-->
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter21357391 = new Ya.Metrika({id:21357391,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21357391" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
--><!-- /Yandex.Metrika counter -->

</body>
</html>