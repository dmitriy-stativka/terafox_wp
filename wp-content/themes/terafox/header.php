<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="flex_container">
        <div class="header-top">
            <a href="javascript:;" class="header-button">
                <span></span>
            </a>
            <div class="header_logo">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>../images/logo.svg" alt="">
                </a>
            </div>
            <div class="header-nav">
                <ul class="header-list">
                    <li class="header-items">
                        <a href="#" class="header-link">Главная</a>
                    </li>
                    <li class="header-items">
                        <a href="javascript:;" class="header-link" onclick="$('html, body').animate({scrollTop:$('.details').offset().top}, '500', 'swing');">О компании</a>
                    </li>
                    <li class="header-items">
                        <a href="javascript:;" class="header-link" onclick="$('html, body').animate({scrollTop:$('.all-products').offset().top}, '500', 'swing');">Продукция</a>
                    </li>
                    <li class="header-items">
                        <a href="javascript:;" class="header-link" onclick="$('html, body').animate({scrollTop:$('.reviews').offset().top}, '500', 'swing');">Отзывы</a>
                    </li>
                    <li class="header-items">
                        <a href="javascript:;" class="header-link" onclick="$('html, body').animate({scrollTop:$('.call-back').offset().top}, '500', 'swing');">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="header-info">
                <div class="header-info-tel">
                    <a class="header-info-number" href="tel:+380667896592">+38 (066) 789-65-92</a>
                    <a class="header-info-callback" href="javascript:;">Обратный звонок</a>
                </div>
                <div class="header-info-basket">
                    <span>Корзина</span>
                    <i>4</i>
                </div>
            </div>
        </div>
    </div>
</header>