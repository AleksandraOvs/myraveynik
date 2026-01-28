<?php get_header() ?>

<section class="section-hero">
    <div class="container">
        <div class="hero-decor"></div>
        <div class="section-hero__content">
            <h1 class="title1 element-animation">Металлобаза в Клину — быстро, выгодно, удобно</h1>
            <div class="frontpage__description">
                <p>
                    Металлобаза «Муравейник» в&nbsp;Клину — это&nbsp;металлопрокат по&nbsp;ГОСТу с&nbsp;доставкой в&nbsp;день заказа и&nbsp;резкой под&nbsp;нужные размеры
                </p>
            </div>
            <div class="main-screen__buttons flex">
                <!-- <button class="button orange" type="button" data-fancybox data-src="#modalCallback">Оставить заявку</button> -->
                <!--                  <button class="button orange" type="button" data-fancybox data-src="#modalCallback">Оставить заявку</button> -->
                <a class="button orange" href="tel:+79857170234">Позвонить нам</a>

                <?php

                if ($btn_price = carbon_get_theme_option('crb_hero_button_price')) {
                ?>
                    <a class="button white" target="_blank" href="<?php echo $btn_price ?> ">Скачать прайс</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="section-hero__decor element-animation2">Металло<br>прокат</div>
</section>

<?php get_template_part('template-parts/advantages') ?>


<!-- <section class="section-adv">
    <div class="container">
        <div class="section-adv__pretitle">Мeталлобаза Муравейник</div>
        <h2 class="title2">Преимущества</h2>

        <div class="section-adv__description">
        <p>Вам больше не придется заказывать металл на площадках Москвы, а потом долго ждать доставку. Металлобаза в Клину Муравейник находится прямо на Ленинградском шоссе. Найти проще простого! А на удобной парковке всегда есть свободные места. Наши клиенты — жители города Клин, Клинского района, Москвы. По запросу привезём металл из Клина покупателям Московской, Тверской областей.</p>
        </div>

        <ul class="section-adv__list">
            <li class="section-adv__list element-animation">
            <div class="section-adv__list__img">
                <img src="<?php //echo get_stylesheet_directory_uri() . '/images/adv-icon01.png'
                            ?>" alt="">
            </div>    
            
                <p class="section-adv__list__text">
                    Доставляем собственным транспортом
                </p>
            </li>
            <li class="section-adv__list element-animation2">
            <div class="section-adv__list__img">
                <img src="<?php //echo get_stylesheet_directory_uri() . '/images/adv-icon02.png'
                            ?>" alt="">
            </div>    
           
                <p class="section-adv__list__text">
                    Доставим по&nbsp;Клину и &nbsp;району за&nbsp;1&nbsp;час
                </p>
            </li>
            <li class="section-adv__list element-animation">
            <div class="section-adv__list__img">
                <img src="<?php //echo get_stylesheet_directory_uri() . '/images/adv-icon03.png'
                            ?>" alt="">
            </div>    
            
                <p class="section-adv__list__text">
                    Резка под Ваши размеры
                </p>
            </li>
            <li class="section-adv__list element-animation2">
            <div class="section-adv__list__img">
                 <img src="<?php //echo get_stylesheet_directory_uri() . '/images/adv-icon04.png'
                            ?>" alt="">
            </div>    
           
                <p class="section-adv__list__text">
                    20&nbsp;лет на&nbsp;рынке металла
                </p>
            </li>
        </ul>
    </div>
</section> -->

<?php //get_template_part('template-parts/bestselling-block') 
?>

<?php //get_template_part('template-parts/section-categories') 
?>

<?php get_template_part('template-parts/catalog-block')
?>

<section class="section-we-work">
    <div class="container">
        <h2 class="title2">Как мы работаем</h2>

        <ul class="section-we-work__steps">
            <li class="section-we-work__steps__item element-animation">
                <div class="step-item__text">
                    <p class="caption"><span>01</span> /шаг</p>
                    <p><strong>Оформляете заказ</strong></p>
                    <p>Вы оставляете заявку на сайте или по телефону <br>
                        <a href="tel:88888">8 985 717 02 34</a>
                    </p>
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
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/img-step22.webp' ?>" alt="">
                </div>
            </li>
            <li class="section-we-work__steps__item element-animation">
                <div class="step-item__text">
                    <p class="caption"><span>03</span> /шаг</p>
                    <p><strong>Доставляем</strong></p>
                    <p>Собственным транспортом</p>
                </div>
                <div class="steps-item__img">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/img-step3.webp' ?>" alt="">
                </div>
            </li>
            <li class="section-we-work__steps__item element-animation">
                <div class="step-item__text">
                    <p><strong>Нужна помощь с&nbsp;заказом?</strong></p>
                    <p>Звоните по&nbsp;номеру <a href="tel:898589955">8&nbsp;985&nbsp;717&nbsp;02&nbsp;34</a> или&nbsp;оставьте заявку</p>
                    <div class="we-work__buttons flex">
                        <button class="button orange" type="button" data-fancybox data-src="#modalCallback">Оставить заявку</button>
                        <a class="button white" href="<?php echo site_url('catalog'); ?>">Перейти в каталог</a>
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
                    <p>Получаете и проверяете заказ</p>
                </div>
                <div class="steps-item__img">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/how-we-work/img-step4.png' ?>" alt="">
                </div>
            </li>
        </ul>
    </div>
</section>

<?php get_template_part('template-parts/faq') ?>
<?php get_template_part('template-parts/partners') ?>
<?php get_template_part('template-parts/contact-us') ?>



<?php get_footer() ?>