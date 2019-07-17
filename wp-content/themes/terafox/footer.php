        <footer class="footer">
            <div class="flex_container">
                <div class="footer-top">
                    <div class="footer_logo">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>../images/logo_footer.png" alt="">
                        </a>
                    </div>
                    <div class="footer-nav">
                        <ul class="footer-list">
                            <li class="footer-items">
                                <a href="#" class="footer-link">Главная</a>
                            </li>
                            <li class="footer-items">
                                <a href="#" class="footer-link">О компании</a>
                            </li>
                            <li class="footer-items">
                                <a href="#" class="footer-link">Продукция</a>
                            </li>
                            <li class="footer-items">
                                <a href="#" class="footer-link">Отзывы</a>
                            </li>
                            <li class="footer-items">
                                <a href="#" class="footer-link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-info">
                        <div class="header-info-tel">
                            <a class="header-info-number" href="tel:+380667896592">+38 (066) 789-65-92</a>
                            <a class="header-info-callback" href="javascript:;">Обратный звонок</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>








        <div class="popup__overlay">
            <div class="popup">
                <a href="#" class="popup__close"></a>
                <div class="title-block">
                    <h2>Корзина товаров</h2>
                </div>
                <div class="popup-basket">
                    <?php echo do_shortcode("[woocommerce_cart]"); ?>
                </div>


                
                <?php echo do_shortcode("[woocommerce_checkout]"); ?> 
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/app.min.js"></script>
    </body>
</html>