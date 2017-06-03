<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webjeb
 */

?>

<!-- begin footer-->
<footer class="footer">
	<div class="footer__in">
		<div class="footer__row">
			<!-- <a href="/" class="footer__logo logo logo_dark">Webjeb</a> -->

			<ul class="footer__social social">
				<li class="social__item social__item_youtube">
					<a href="<?php $youtube = the_field('youtube', 'option'); echo $youtube; ?>" class="social__link" target="_blank">Youtube</a>
				</li>
				<li class="social__item social__item_vk">
					<a href="<?php $vk = the_field('vk', 'option'); echo $vk; ?>" class="social__link" target="_blank">Vk</a>
				</li>
				<li class="social__item social__item_twitter">
					<a href="<?php $twitter = the_field('twitter', 'option'); echo $twitter; ?>" class="social__link" target="_blank">Twitter</a>
				</li>
				<li class="social__item social__item_inst">
					<a href="<?php $instagram = the_field('instagram', 'option'); echo $instagram; ?>" class="social__link" target="_blank">Instagram</a>
				</li>
			</ul>
		</div>
		<div class="footer__copyright">
			<span>©</span> 2017 'Webjeb'</div>
	</div>
</footer>
<!-- end footer-->

<?php wp_footer(); ?>





<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44026314 = new Ya.Metrika({ id:44026314, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44026314" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<script data-skip-moving="true">
	(function(w,d,u,b){
			s=d.createElement('script');r=(Date.now()/1000|0);s.async=1;s.src=u+'?'+r;
			h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
	})(window,document,'https://cdn.bitrix24.ru/b3991101/crm/site_button/loader_2_fzznp7.js');
</script>

	</body>
</html>
