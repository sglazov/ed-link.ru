<header id="header" role="banner" class="clearfix">
    <div class="glow">
        <div class="header-wrapper">
            <div class="section-1 clearfix">
                <div class="inner">
                    <div class="col1">
                        <a href="index.html" title="Home" rel="home" id="logo">
                            <img src="/assets/images/logo.png" alt="ED-LINK"/>
                        </a>

                        <div id="name-and-slogan">
                            <div id="site-slogan">Лучшие идеи для бизнеса!</div>
                        </div><!-- /#name-and-slogan -->
                    </div>
                    <div class="col2">
                        <div class="region region-menu">
                            <div id="block-superfish-1" class="block block-superfish block-odd">


                                <div class="content">
<ul id="superfish-1" class="sf-menu main-menu sf-horizontal sf-style-default sf-total-items-6 sf-parent-items-1 sf-single-items-5">
    <li id="menu-201-1" class="first odd sf-item-1 sf-depth-1 sf-no-children">
        <a href="/" class="sf-depth-1 <?php if ( is_page('index.html') ): ?>active<?php endif; ?>">
            Главная
        </a>
    </li>
    <li id="menu-1942-1" class="middle even sf-item-2 sf-depth-1 sf-no-children">
        <a href="about.html" class="sf-depth-1 <?php if ( is_page('about.html') ): ?>active<?php endif; ?>">
            О компании
        </a></li>
    <li id="menu-1943-1" class="middle even sf-item-4 sf-depth-1 sf-no-children">
        <a href="services.html" class="sf-depth-1 <?php if ( is_page('services.html') ): ?>active<?php endif; ?>">
            Услуги
        </a>
    </li>
    <li id="menu-442-1" class="last even sf-item-6 sf-depth-1 sf-no-children">
        <a href="contacts.html" class="sf-depth-1 <?php if ( is_page('contacts.html') ): ?>active<?php endif; ?>">
            Контакты
        </a>
    </li>
</ul>
                                </div><!-- /.content -->

                            </div><!-- /.block -->  </div>
                    </div>
                </div>
            </div>

            <?php if ( is_page('index.html') ) {
                require( __DIR__ . "/header-index.php" );
            } ?>

        </div>
    </div>
</header><!-- /#header -->