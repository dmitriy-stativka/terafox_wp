<?php get_header(); ?>

<main class="main">
    <div class="main-top">
        <div class="flex_container">
            <?php
            $params = array(
                'post_type' => 'generalScreen',
                'posts_per_page' => -1,
            );
            $query = new WP_Query( $params );
            ?>
            <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                    <?php $titleH1 = get_field('title');
                        $titleText = get_field('titleText');
                        $linkYouTube = get_field('linkYouTube');
                        $linkInsta = get_field('linkInsta');
                        $linkVK = get_field('linkVK');                                    
                    ?>
                    <div class="main-top-text">
                        <h1 class="main-top-title"><?php echo $titleH1; ?></h1>
                        <p><?php echo $titleText; ?></p>
                        <div class="main-top-buttons">
                            <a class="more-button" href="#" onclick="$('html, body').animate({scrollTop:$('.details').offset().top}, '500', 'swing');">Подробнее</a>
                            <a target="_blank" class="social vk" href="<?php echo $linkVK; ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>../images/vk.svg" alt=""></a>
                            <a target="_blank" class="social inst" href="<?php echo $linkInsta; ?>"></a>
                            <a target="_blank" class="social yt" href="<?php echo $linkYouTube; ?>"></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- PRODUCTS_START -->
    <div class="main-products">
        <div class="flex_container">
            <div class="title-block">
                <h2>Наша продкуция</h2>
                <p>Текстовый блок, описывающий данный раздел. <br> Рыскрывает особености продукциии компании.</p>
                <span class="title-span">Продукция</span>
            </div>
            <div class="all-products">
                <?php echo do_shortcode('[product_category per_page="4" order="desc" category="products"]'); ?>
            </div>
        </div>
    </div>
    <!-- PRODUCTS_END -->
    <!--  DETAILS_START -->
    <div class="details">
        <div class="flex_container">
            <div class="flex_row">
                <div class="flex_col-desk--1-2">
                    <div class="details-image">
                        <img src="<?php echo get_template_directory_uri(); ?>../images/img_detail.jpg" alt="">
                    </div>
                </div>
                <div class="flex_col-desk--1-2">
                    <div class="details-text">
                        <div class="title-block">
                            <h2>Эксклюзивные мангалы любой сложности</h3>
                            <p>Эксклюзивный подзаголовок</p>
                            <span class="title-span">О компании</span>
                        </div>
                        <div class="details-description">
                        <?php
                            $params = array(
                                'post_type' => 'company',
                                'posts_per_page' => -1,
                            );
                            $query = new WP_Query( $params );
                            ?>
                            <?php if($query->have_posts()): ?>
                                    <?php while ($query->have_posts()): $query->the_post() ?>
                                    <?php $text_company = the_field('text_company'); 
                                        echo $text_company;
                                    ?>
                                    <?php endwhile; ?>
                            <?php endif; ?>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DETAILS_END -->
    <!-- WHY_WE_START -->
    <div class="utp">
        <div class="flex_container">
            <div class="utp-desc">
                <div class="title-block">
                    <h2>Почему мы? Потому что у нас очень круто и качественно!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde minima veniam quasi illum.</p>
                    <span class="title-span">ПРЕИМУЩЕСТВА</span>
                </div>
                <div class="utp-list">
                    <div class="flex_row">


                    <?php
                        $params = array(
                            'post_type' => 'utp',
                            'posts_per_page' => 4,
                        );
                        $query = new WP_Query( $params );
                        ?>
                        <?php if($query->have_posts()): ?>
                                <?php while ($query->have_posts()): $query->the_post() ?>
                                <?php $imageUTP = get_field('imageUTP');
                                    $titleUTP = get_field('titleUTP');
                                    $descriptionUTP = get_field('descriptionUTP');                               
                                ?>
                                <div class="flex_col-desk--1-4">
                                    <div class="utp-item">
                                        <div class="utp-icon">
                                            <img src="<?php echo $imageUTP['url']?>" alt="">
                                        </div>
                                        <b class="utp-name"><?php echo $titleUTP;?></b>
                                        <p class="utp-text"><?php echo $descriptionUTP;?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                        <?php endif; ?>






                        
                      
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- WHY_WE_END -->
    <!-- REVIEWS_START -->
    <div class="reviews">
        <div class="flex_container">
            <div class="title-block">
                <h2>Отзывы довольных клентов о продукции нашей компании</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde minima veniam quasi illum.</p>
                <span class="title-span">Отзывы</span>
            </div>
            <div class="main_gallery_wrap">
                <div class="main_gallery_holder">
                    <div class="main_gallery">
                            <?php
                        $params = array(
                            'post_type' => 'reviews',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query( $params );
                        ?>
                        <?php if($query->have_posts()): ?>
                                <?php while ($query->have_posts()): $query->the_post() ?>
                                        <?php $imagerewiew = get_field('image_rewiew')?>
                                        <?php $rewiewtext = get_field('review'); ?>
                                        <?php $namerewiew = get_field('name_rewiew'); ?>
                                        <?php $cityrewiew = get_field('city_rewiew'); ?>
                                    <div class="main_gallery_slide">
                                        <div class="author">
                                            <div class="author-info">
                                                <div class="author-image">
                                                    <img src="<?php echo $imagerewiew['url'] ?>" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <b><?php echo $namerewiew; ?></b>
                                                    <span><?php echo $cityrewiew; ?></span>
                                                </div>
                                            </div>
                                            <div class="author-text">
                                                <p><?php echo $rewiewtext; ?></p>
                                            </div>
                                            <div class="author-reviews">
                                                <div class="product-star">
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                    <i></i>
                                                </div>
                                                <div class="author-data">
                                                    <span><?php the_date();?></span>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- REVIEWS_END -->
    <!-- CALL_BACK_START -->
    <div class="call-back utp">
        <div class="utp-desc">
            <div class="flex_container">
                <div class="title-block">
                    <h2>Нужна помощь с выбором? Получите бесплатную консультацию специалиста</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde minima veniam quasi illum.</p>
                    <span class="title-span">Консультация</span>
                </div>
                
                <?php echo do_shortcode("[contact-form-7 id='46' title='Contact form 1']"); ?>
            </div>
        </div>
    </div>
    <!-- CALL_BACK_END -->
</main>
<?php get_footer(); ?>