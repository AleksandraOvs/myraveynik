<?php
$title       = carbon_get_post_meta(get_the_ID(), 'crb_partners_text');
$description = carbon_get_post_meta(get_the_ID(), 'crb_partners_description');
$partners    = carbon_get_post_meta(get_the_ID(), 'crb_partners_list');
?>

<section class="partners">
    <div class="container">

        <?php if ($title) : ?>
            <h2 class="title2 partners__title">
                <?php echo apply_filters('the_content', $title); ?>
            </h2>

        <?php endif; ?>

        <div class="partners__inner">
            <?php if ($description) : ?>
                <div class="partners__description">
                    <?php echo apply_filters('the_content', $description); ?>
                </div>
            <?php endif; ?>

            <?php if ($partners) : ?>
                <div class="partners__list">

                    <?php foreach ($partners as $item) :
                        $img_id = $item['partners_list_item_img'] ?? '';
                        $sign   = $item['partners_list_item_sign'] ?? '';
                    ?>
                        <div class="partners__item">

                            <?php if ($img_id) : ?>
                                <div class="partners__logo">
                                    <?php echo wp_get_attachment_image($img_id, 'medium'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($sign) : ?>
                                <div class="partners__sign">
                                    <?php echo $sign; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>