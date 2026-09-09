</div>
<footer class="footer">
    <div class="footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logoLink">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="web creator Asami" loading="lazy" class="footer__logoImg">
        </a>
    </div>
    <ul class="footer__nav">
        <li class="footer__navItem">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer_navlink"> <span>Top</span><br>
                トップ</a>
        </li>
        <li class="footer__navItem">
            <a href="<?php echo esc_url(home_url('/#message')); ?>" class="footer_navlink"> <span>Message
                </span><br>
                メッセージ</a>
        </li>
        <li class="footer__navItem">
            <a href="<?php echo esc_url(home_url('/#service')); ?>" class="footer_navlink"> <span>Service
                </span><br>
                サービス</a>
        </li>
        <li class="footer__navItem">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="footer_navlink"> <span>News
                </span><br>
                お知らせ</a>
        </li>
    </ul>
    <p class="footer_copy">
        <small>© web creator Asami 2025</small>
    </p>

</footer>
<?php wp_footer(); ?>

</body>

</html>