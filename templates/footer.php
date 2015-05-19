<footer class="content-info" role="contentinfo">
    <div class="container">
        <div class="row ">
            <div class="welcome-our-site-div"><span class="welcome-our-site-span">Наши услуги</span></div>
            <?php/* dynamic_sidebar('sidebar-footer'); */?>
            <div id="owl-demo" class="owl-carousel owl-theme">

                <div class="item">
                    <h1> <img src="wp-content/themes/ArmenianLaw/assets/img/home_icon.png" width="70" height="70"></h1>
                    <p class="text-center">Lorem ipsum.</p>
                    <h1> <img src="wp-content/themes/ArmenianLaw/assets/img/ico2.png" width="70" height="70"></h1>
                    <p class="text-center">Lorem ipsum.</p>
                </div>

<!--                <div class="owl-controls clickable">-->
<!--                    <div class="owl-buttons">-->
<!--                        <div class="owl-prev">-->
<!--                            <img class="right-left" src="http://armenianlaw.com/wp-content/uploads/2015/02/left.png" width="50" height="50"></div>-->
<!--                        <div class="owl-next">-->
<!--                            <img class="right-left" src="http://armenianlaw.com/wp-content/uploads/2015/02/right.png" width="50" height="50"></div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>

        </div>

    </div>
<!--    <div class="clients">-->
<!--        <div class="useful">-->
<!--            <h2> Клиенты и партнеры</h2>-->
<!--        </div>-->
<!--        <div class="partners-img_1 partners-img"> </div>-->
<!--        <div class="partners-img_2 partners-img"> </div>-->
<!--        <div class="partners-img_3 partners-img"> </div>-->
<!--        <div class="partners-img_4 partners-img"></div>-->
<!--        <div class="partners-img_5 partners-img"></div>-->
<!--        <div class="partners-img_6 partners-img"> </div>-->
<!--        <div class="partners-img_7 partners-img"></div>-->
<!--    </div>-->
    <div class="footer-under-div">
        <div class="container">
            <div class="row">
            <div class="footer-left-logo col-lg-5">
               <p> © 2015. Юридический центр «Адвокат Вардан Хечяан»</p>
               <p> +(374)10 32-02-02</p>
               <p> advokat@advokat.am</p>

                <div class="disclaimer-div">
                    <a href="#" class="float-left disclaimer"> Disclaimer &nbsp;|</a>

                    <a href="#" class="float-left disclaimer">&nbsp; Terms&Conditions </a>
                </div>
            </div>
                <div class="footer-left-logo col-lg-3">
                    <div class="col-xs-12">
                        <div id="follow-icons-fb" class="col-xs-4 follow-icons"></div>
                        <div id="follow-icons-tw" class="col-xs-4 follow-icons"></div>
                        <div id="follow-icons-in" class="col-xs-4 follow-icons"></div>
                    </div>
                    <div class="col-xs-12">
                        <div id="follow-icons-gplus" class="follow-icons col-xs-4"></div>
                        <div id="follow-icons-youtube" class="follow-icons col-xs-4"></div>
                        <div id="follow-icons-skype" class="follow-icons col-xs-4"></div>
                    </div>
            </div>
            <div class="footer-right-menu col-lg-4">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary_navigation',
                            'walker' => new Roots_Nav_Walker(),
                            'menu_class' => 'menu-items-ul'
                        )
                    );
                endif;
                ?>

            </div>
        </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<a id="scroll-to-top">
</a>