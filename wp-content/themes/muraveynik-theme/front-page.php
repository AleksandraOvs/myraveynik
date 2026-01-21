<?php get_header() ?>

<section class="section-hero">
    <div class="container">
        <div class="hero-decor"></div>
        <div class="section-hero__content">
            <h1 class="title1 element-animation">Металлобаза в Клину — быстро, выгодно, удобно</h1>
            <div class="frontpage__description">
            <p>
            Металлобаза Муравейник в Клину — это большой выбор металлопроката лучших российских производителей. Купить металл в Клину с доставкой в день заказа? Легко! Самовывоз прямо с площадки металлобазы? Пожалуйста! Предупреждаем заранее: прайс и выбор товаров нашей базы металла вас приятно удивят.</p>
            <p>У нас есть все для изготовления прочных конструкций, строительства надёжных сооружений по доступным ценам
            </p>
            </div>
            <div class="main-screen__buttons flex">
                <!-- <button class="button orange" type="button" data-fancybox data-src="#modalCallback">Оставить заявку</button> -->
<!--                  <button class="button orange" type="button" data-fancybox data-src="#modalCallback">Оставить заявку</button> -->
				<a class="button orange" href="tel:+79857170234" >Позвонить нам</a>
                 
                 <?php
                
                if ($btn_price = carbon_get_theme_option('crb_hero_button_price') ) {
                    ?>
                    <a class="button white" target="_blank" href=" <?php echo $btn_price ?> " >Скачать прайс</a>
                    <?php
                }
                ?>
                
               
			</div>
        </div>
    </div>      
    <div class="section-hero__decor element-animation2">Металло<br>прокат</div>
</section>

<section class="section-adv">
    <div class="container">
        <div class="section-adv__pretitle">Мeталлобаза Муравейник</div>
        <h2 class="title2">Преимущества</h2>

        <div class="section-adv__description">
        <p>Вам больше не придется заказывать металл на площадках Москвы, а потом долго ждать доставку. Металлобаза в Клину Муравейник находится прямо на Ленинградском шоссе. Найти проще простого! А на удобной парковке всегда есть свободные места. Наши клиенты — жители города Клин, Клинского района, Москвы. По запросу привезём металл из Клина покупателям Московской, Тверской областей.</p>
        </div>

        <ul class="section-adv__list">
            <li class="section-adv__list element-animation">
            <div class="section-adv__list__img">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/adv-icon01.png'?>" alt="">
            </div>    
            
                <p class="section-adv__list__text">
                    Доставляем собственным транспортом
                </p>
            </li>
            <li class="section-adv__list element-animation2">
            <div class="section-adv__list__img">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/adv-icon02.png'?>" alt="">
            </div>    
           
                <p class="section-adv__list__text">
                    Доставим по&nbsp;Клину и &nbsp;району за&nbsp;1&nbsp;час
                </p>
            </li>
            <li class="section-adv__list element-animation">
            <div class="section-adv__list__img">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/adv-icon03.png'?>" alt="">
            </div>    
            
                <p class="section-adv__list__text">
                    Резка под Ваши размеры
                </p>
            </li>
            <li class="section-adv__list element-animation2">
            <div class="section-adv__list__img">
                 <img src="<?php echo get_stylesheet_directory_uri() . '/images/adv-icon04.png'?>" alt="">
            </div>    
           
                <p class="section-adv__list__text">
                    20&nbsp;лет на&nbsp;рынке металла
                </p>
            </li>
        </ul>
    </div>
</section>

<section class="section-bestselling white-bg">
    <div class="container">
        <h2 class="title2">
            Популярные товары
        </h2>
  
        <?php
		    global $product;
		    $args = array(
			    'post_type' => 'product',
			    'post_status' => 'publish',
			    'posts_per_page' => 14,
			    'meta_key' => 'total_sales',
			    'orderby'        => 'rand',
		    );
		    $wc_query = new WP_Query($args);
			
		    if ($wc_query->have_posts()): ?>
                <div class="section-bestselling__products__container">
                    <!-- <div class="section-bestselling__products__arrows"> -->
                        <div class="bs-slider-prev">
                            <svg width="209" height="387" viewBox="0 0 209 387" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.40952 182.88L183.402 4.37633C189.267 -1.46871 198.762 -1.45888 204.616 4.40656C210.466 10.2713 210.451 19.7716 204.586 25.6212L36.2474 193.501L204.592 361.379C210.457 367.23 210.472 376.724 204.622 382.59C201.688 385.53 197.843 387 193.998 387C190.163 387 186.333 385.54 183.403 382.62L4.40952 204.12C1.58498 201.31 -1.52588e-05 197.486 -1.52588e-05 193.501C-1.52588e-05 189.516 1.58952 185.696 4.40952 182.88Z" fill="#F99A30"/>
                                <path d="M4.40952 182.88L183.402 4.37633C189.267 -1.46871 198.762 -1.45888 204.616 4.40656C210.466 10.2713 210.451 19.7716 204.586 25.6212L36.2474 193.501L204.592 361.379C210.457 367.23 210.472 376.724 204.622 382.59C201.688 385.53 197.843 387 193.998 387C190.163 387 186.333 385.54 183.403 382.62L4.40952 204.12C1.58498 201.31 -1.52588e-05 197.486 -1.52588e-05 193.501C-1.52588e-05 189.516 1.58952 185.696 4.40952 182.88Z" stroke="white"/>
                            </svg>
                        </div>
                    <!-- </div>  -->
			    <div class="section-bestselling__products">
                    
               
				<?php 
				    while ($wc_query->have_posts()):
				    $wc_query->the_post();
				    //woocommerce_product_loop_start(); 
				?>

				<div class="section-bestselling__products__item">
                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( $product->image_id ); ?></a>

                    <p class="price"><?php echo $product->price; ?>&nbsp;руб</p>

                    <p class="title"><a href="<?php the_permalink(); ?>"><?php echo $product->name; ?></a></p>
                </div>

				    <?php //woocommerce_product_loop_end();
				    endwhile; ?>
              
                       
			    </div>
                <div class="bs-slider-next">
                    <svg width="209" height="387" viewBox="0 0 209 387" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M204.59 204.12L25.5975 382.624C19.733 388.469 10.2383 388.459 4.38362 382.593C-1.46651 376.729 -1.45139 367.228 4.41386 361.379L172.753 193.499L4.40787 25.6205C-1.45662 19.7702 -1.47174 10.2759 4.37764 4.41043C7.31253 1.47016 11.1574 1.95082e-06 15.0024 2.62309e-06C18.8374 3.29364e-06 22.6672 1.46033 25.5968 4.38019L204.59 182.88C207.415 185.69 209 189.514 209 193.499C209 197.484 207.41 201.304 204.59 204.12Z" fill="#F99A30"/>
                        <path d="M204.59 204.12L25.5975 382.624C19.733 388.469 10.2383 388.459 4.38362 382.593C-1.46651 376.729 -1.45139 367.228 4.41386 361.379L172.753 193.499L4.40787 25.6205C-1.45662 19.7702 -1.47174 10.2759 4.37764 4.41043C7.31253 1.47016 11.1574 1.95082e-06 15.0024 2.62309e-06C18.8374 3.29364e-06 22.6672 1.46033 25.5968 4.38019L204.59 182.88C207.415 185.69 209 189.514 209 193.499C209 197.484 207.41 201.304 204.59 204.12Z" stroke="white"/>
                    </svg>
                        </div>
                </div>
			    <?php
			        endif;
			            wp_reset_postdata();
			    ?>
    </div>
</section>



<section class="section-categories">
    <div class="container">
        <h2 class="title2">Металл в Клину заказывают в&nbsp;Муравейнике</h2>

        <div class="section-categories__description">
            <p>
            Муравейник — база металла в Клину, которая продаёт не&nbsp;только горяче — и&nbsp;холоднокатаный металлопрокат под любые нужды, но&nbsp;и&nbsp;комплектующие для производства, изготовления металлических дверей, гаражных ворот.</p>
            <p>Наша металлобаза в&nbsp;Клину станет вашим помощником при ремонте или постройке нового дома — поможем с&nbsp;выбором товара, посоветуем оптимальное решение, отнесёмся к&nbsp;вашему проекту, как&nbsp;к&nbsp;своему. По желанию заказчика осуществляем резку металла на&nbsp;части требуемой длины.
            </p>
        </div>
        
        <div class="categories__slider">
            <div class="categories-slider__controls flex justify-between">
	            <div class="categories-slider-prev">
		            <svg width="19" height="32" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg">
			            <path d="M17 30L3 16L17 2" stroke="#23C229" stroke-width="3" stroke-linecap="round"/>
		            </svg>
	            </div>
	            <div class="categories-slider-next">
		            <svg width="19" height="32" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg">
			            <path d="M2 30L16 16L2 2" stroke="#23C229" stroke-width="3" stroke-linecap="round"/>
		            </svg>
	            </div>
            </div>
            
            <ul class="categories__list">
                <?php echo get_categories_product(); ?>
            </ul>
        </div>


        <a class="button green catalog-button" href="<?php echo site_url('catalog') ?>">Посмотреть весь каталог</a>
    </div>
</section>

<section class="section-we-work">
    <div class="container">
        <h2 class="title2">Как мы работаем</h2>

        <ul class="section-we-work__steps">
            <li class="section-we-work__steps__item element-animation">
                <div class="step-item__text">
                    <p class="caption"><span>01</span> /шаг</p>
                    <p><strong>Оформляете заказ</strong></p>
                    <p>Вы оставляете заявку на сайте или по телефону <br>
                    <a href="tel:88888">8 985 717 02 34</a></p>
                </div>
                <div class="steps-item__img">                  
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/img-step1.png' ?>" alt="">
                </div>
            </li>
            <li class="section-we-work__steps__item element-animation2">
                <div class="step-item__text">
                    <p class="caption"><span>02</span> /шаг</p>
                    <p><strong>Доставка или самовывоз</strong></p>
                    <p>Звонок от менеджера для уточнения деталей заказа</p>
                </div>
                <div class="steps-item__img">                 
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/img-step2.png' ?>" alt="">
                </div>
            </li>
            <li class="section-we-work__steps__item element-animation">
                <div class="step-item__text">
                    <p class="caption"><span>03</span> /шаг</p>
                    <p><strong>Доставляем</strong></p>
                    <p>Собственным транспортом</p>
                </div>
                <div class="steps-item__img">                 
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/img-step3.png' ?>" alt="">
                </div>
            </li>
            <li class="section-we-work__steps__item element-animation">
                <div class="step-item__text">
                    <p><strong>Нужна помощь с заказом?</strong></p>
                    <p>Звоните по номеру <a href="tel:898589955">8 985 717 02 34</a> или оставьте заявку</p>
                    <div class="we-work__buttons flex">
                <button class="button orange" type="button" data-fancybox data-src="#modalCallback">Оставить заявку</button>
                <a class="button white" href="<?php echo site_url('catalog');?>">Перейти в каталог</a>
			</div>
                </div>
                <div class="steps-item__img">                  
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/que.png' ?>" alt="">
                </div>
            </li>
            <li class="section-we-work__steps__item element-animation">
                <div class="step-item__text">
                    <p class="caption"><span>04</span> /шаг</p>
                    <p><strong>Приёмка товара</strong></p>
                    <p>Получаете и проверяете заказ</p></div>
                <div class="steps-item__img">                  
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/img-step4.png' ?>" alt="">
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="our-products__section">
    <div class="container">
        <h2 class="title2">Изделия из нашего металла</h2>
        <div class="our_products__inner flex justify-between align-stretch">
            <div class="our_products__inner__slider">
                    <?php
                    if ($prods_slides = carbon_get_theme_option('crb_our_prods')){
                    ?>
                        <div class="our-products__section__slider">
                        <?php
                        foreach($prods_slides as $prod_slide){
                            $slide_img = wp_get_attachment_image_url( $prod_slide['crb_our_prods_img'], 'full' );
                            ?>
                            <div class="our-products__section__slider__item">
                                <img class="our_products__img" src="<?php echo $slide_img; ?>" alt="Продукция из металла Муравейник">

                            </div>

                            <?php
                        }

                        ?>
                        </div>

                    <?php
                    }
                    ?>
            <div class="our-products__controls flex justify-between">
                <div class="our-prods-slider-prev">
                    <svg width="19" height="32" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 30L3 16L17 2" stroke="#23C229" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="our-prods-slider-next">
                    <svg width="19" height="32" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 30L16 16L2 2" stroke="#23C229" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            </div>
            <div class="our_products__inner__content">
                <?php
                    if($our_prods_text = carbon_get_theme_option('crb_our_prods_text')){
                        echo $our_prods_text;
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
if ($dialog_id = carbon_get_theme_option('crb_dialog_img') ){
    $slide_url = wp_get_attachment_image_url( $dialog_id, 'full' );
        //echo '<img src="' . $slide_url . '" alt="Муравейник город Клин Металлобаза">';
                }
            ?>
<section class="dialog-section" style="background-image: url(<?php echo $slide_url ?>); background-repeat:no-repeat;">
    <div class="container flex align-end justify-between">

        <div class="dialog-section__text">
            <?php
                if ($dialog_text = carbon_get_theme_option('crb_dialog_text') ){
                    echo $dialog_text;
                }
            ?>
            <?php if ($dialog_buttons = carbon_get_theme_option('crb_dialog_buttons')){
                ?>
                    <ul class="dialog-section_text_buttons flex justify-between align-stretch">
                        <?php foreach ($dialog_buttons as $dialog_button){
                            ?>
                                <li class="dialog-buttons__item">
                                    <a class="button green" href="<?php echo $dialog_button[('crb_dialog_button_link')]?>">
                                        <?php
                                            $dialog_link_img = $dialog_button[('crb_dialog_button_img')];
                                            $dialog_link_url = wp_get_attachment_image_url( $dialog_link_img, 'full' );
                                        ?>
                                        <div class="dialog-buttons__item__img">
                                            <img src="<?php echo $dialog_link_url;?>" alt="">
                                        </div>
                                        <span><?php echo $dialog_button[('crb_dialog_button_link_text')] ?></span>
                                    </a>
                                </li>
                            <?php
                        }
                        ?>
                                <li class="dialog-buttons__item">
                                    
                                        <a href="#modalCallback" class="button green" data-fancybox>
                                        <div class="dialog-buttons__item__img">    
                                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/icon/phone.svg">
                                        </div>
                                        <span>Оставить заявку</span></a>
                                    
                                </li>
                    </ul>
                <?php
            }
           ?>
        </div>
    </div>
</section>


    
                
         
    
<?php get_footer() ?>