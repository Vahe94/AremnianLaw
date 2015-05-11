<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="row">
            <div class=" col-md-4 navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-sm-12 col-md-8">
                <nav class=" collapse navbar-collapse" role="navigation">
                    <div class="col-xs-12 no-padding">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav pull-right'));
                    endif;
                    ?>
                    </div>
                </nav>
                <div class="language-icons">Հայ</div>
                <div class="language-icons">Eng</div>
                <div class="language-icons">Рус</div>
            </div>
        </div>
    </div>
    <div class="wrap  main-container" role="document">
        <div class="content border-bottom6">
            <div class="container">
                <div class="col-lg-4 col-sm-12">
                    <div class="attorney_at_law"></div>
                    <div id="navigation">
                        <ul class="">
                            <li class=" menu-items">Главная</li>
                            <li class=" menu-items" >География услуг</li>
                            <li class=" menu-items" >Консультации</li>
                            <li class=" menu-items" >Контакты</li>
                            <li class=" menu-items">Новости</li>
                            <li class=" menu-items">Новости</li>
                            <li class=" menu-items">Услуги</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="advocate_pic"></div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="addres-mail">
                        <div class="header-contacts">
                            <div class="header-contacts-phone">+(374)10 32-02-02</div>
                            <div class="header-contacts-email">advokat@advokat.am</div>
                            <div class="header-contacts-location">Адрес: 0051 Ереван, Комитас 35-16</div>
                        </div>
                    </div>
                    <div class="callback">Обратный звонок</div>
                    <div>
                        <ul class="header-ul-about">
                            <li>Адвокат</li>
                            <li>Президент представительства Международного Союза (Содружества) адвокатов</li>
                            <li>Председатель представительства Европейской Арбитражной Палаты</li>
                            <li>Руководитель корпоративной группы Таможенный Адвокат</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
