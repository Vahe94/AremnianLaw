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
                        </div>
                    <div class="col-xs-12 no-padding">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav pull-right'));
                    endif;
                    ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
