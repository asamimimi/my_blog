<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="愛媛県でウェブ制作をしています。ターゲットに刺さるデザインを作ります。">
    <title>web creator Asami</title>
    <!-- ファビコンの設定 -->
    <!-- <link rel="icon" href="favicon.ico"> -->

    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div class="content">
        <header class="header">
            <h1 class="header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Asami webCreator" loading="lazy"></a>
            </h1>
            <nav class="header__nav">
                <ul class="header__navList">
                    <li class="header__navItem">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__navLink">
                            <span>Top</span><br>
                            トップ
                        </a>
                    </li>
                    <li class="header__navItem">
                        <a href="<?php echo esc_url(home_url('/#message')); ?>" class="header__navLink">
                            <span>Message</span><br>
                            メッセージ
                        </a>
                    </li>
                    <li class="header__navItem">
                        <a href="<?php echo esc_url(home_url('/#service')); ?>"" class=" header__navLink">
                            <span>Service</span><br>
                            できること
                        </a>
                    </li>
                    <li class="header__navItem">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="header__navLink">
                            <span>News</span><br>
                            お知らせ
                        </a>
                    </li>
                </ul>

                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__contact onlyPc"><span>Contact</span>
                    お問い合わせ</a>
            </nav>

            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__contact onlySp">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_mail.svg" alt="お問い合わせ" loading="lazy" class="header__contact_icon">
            </a>
            <button class="mobile-menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>