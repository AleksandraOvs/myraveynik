<?php
/*
 * The template for displaying the footer
 */

?>
</main>
<footer id="footer" class="footer">

	
  <div class="container">
    	<a href="<?php site_url(); ?>" class="footer__logo logo">
  			<?php
  				$footer_logo = get_theme_mod('footer_logo');
  				$img = wp_get_attachment_image_src($footer_logo, 'full');
  				if ($img) :
    		?>
    			<img src="<?php echo $img[0]; ?>" alt="">
  				<?php endif; ?>
		</a>
		<div class="footer__inner footer-container flex align-start justify-between">
			<div class="footer__left">
				<?php if ( is_active_sidebar( 'sidebar-footer-left' ) ){ ?>
		            <?php dynamic_sidebar( 'sidebar-footer-left' ); ?>
            	<?php } ?>
			</div>

			<div class="footer__center">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'container' => 'nav',
							'menu_class' => 'footer__menu',
						)
					);
				?>
			</div>
			<div class="footer__right">
				<?php if ( is_active_sidebar( 'sidebar-footer-right' ) ){ ?>
		            <?php dynamic_sidebar( 'sidebar-footer-right' ); ?>
                <?php } ?>
			</div>
		</div>
  </div>

  <div class="footer__text">
	<div class="container">
		<p class="footer__text__p">
			Информация о товаре, представленном на сайте, не является публичной офертой. Характеристики, комплект поставки, внешний вид, страна и место производства товара могут отличаться от указанных или могут быть изменены производителем без отображения в каталоге магазина Муравейник. Условия приобретения товара требуют согласования с менеджером магазина. Предложение действительно с момента согласования его с менеджером Интернет-магазина.
		</p>
	
	</div>
  </div>

</footer>

<!-- <form id="modalCallback" class="callback-form">
		<h2 class="modal-h2">Заполните форму ниже</h2>
		<div class="modal-inner">
			<p>Менеджер перезвонит вам в течении 10 мин:</p>
			<ul>
				<li>Сориентирует по стоимости заказа</li>
				<li>Согласует время доставки</li>
				<li>Ответит на все интересующие вопросы</li>
			</ul>
		</div>
        
        <input type="tel" name="phone" placeholder="Введите ваш номер телефона*" autocomplete="off" required>
        <p class="remark">*Обязательное поле ввода</p>
        <input type="submit" value="Отправить" class="button orange">

        <div class="agreement flex justify-around align-center">
        <input type="checkbox" name="checkbox" id="checkbox2" checked required>
		<label for="checkbox2"></label>

        <p>Нажимая кнопку вы принимаете условия
        <a href="<?php //echo site_url('politika-konfidentsialnosti')?>">Политики&nbsp;конфиденциальности</a>
		</p>
        </div>
    </form> -->

	<div id="modalCallback" class="callback-form">
	<?php echo do_shortcode('[contact-form-7 id="5475fb6" title="Оставить заявку"]'); ?>
		<!-- <h2>Заполните форму ниже</h2>
		<div class="modal-description">Менеджер перезвонит вам в течении 10 мин:</div>
		<ul>
			<li>Сориентирует по стоимости заказа</li>
			<li>Согласует время доставки</li>
			<li>Ответит на все интересующие вопросы</li>
		</ul>
        <input type="tel" name="phone" placeholder="+7 (999) 999 99 99 *" autocomplete="off" required>
        <p class="remark">*Обязательное поле ввода</p>
        <input type="submit" value="Оставить заявку" class="button button--orange">
        <div class="checkbox flex">
            <input type="checkbox" name="checkbox" id="checkbox2" checked required><label for="checkbox2"><img src="<?php echo get_template_directory_uri(); ?>/assets-new/images/front/check.svg" alt=""></label>
            <div class="flex">
                <p>Нажимая кнопку вы принимаете условия</p>
                <a href="https://muraveynik.su/politika-konfidentsialnosti/">Политики конфиденциальности</a>
            </div>
        </div> -->
				</div>
	
	<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(68919115, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/68919115" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<!-- Begin Verbox {literal} -->
    <script type='text/javascript'>
    	(function(d, w, m) {
    		window.supportAPIMethod = m;
    		var s = d.createElement('script');
    		s.type ='text/javascript'; s.id = 'supportScript'; s.charset = 'utf-8';
    		s.async = true;
    		var id = 'e2edd9d08924ce3d826ba46df21ab7d2';
    		s.src = 'https://admin.verbox.ru/support/support.js?h='+id;
    		var sc = d.getElementsByTagName('script')[0];
    		w[m] = w[m] || function() { (w[m].q = w[m].q || []).push(arguments); };
    		if (sc) sc.parentNode.insertBefore(s, sc); 
    		else d.documentElement.firstChild.appendChild(s);
    	})(document, window, 'Verbox');
    </script>
<!-- {/literal} End Verbox -->

<script type="text/javascript">(function(window,document,n,project_ids){window.GudokData=n;if(typeof project_ids !== "object"){project_ids = [project_ids]};window[n] = {};window[n]["projects"]=project_ids;config_load(project_ids.join(','));function config_load(cId){var a=document.getElementsByTagName("script")[0],s=document.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},cMrs='';s.async=true;if(document.location.search&&document.location.search.indexOf('?gudok_check=')===0)cMrs+=document.location.search.replace('?','&');s.src="//mod.gudok.tel/script.js?sid="+cId+cMrs;if(window.opera == "[object Opera]"){document.addEventListener("DOMContentLoaded", i, false)}else{i()}}})(window, document, "gd", "lvgfxk4ssz");</script>

<?php wp_footer(); ?>

</body>


</html>
