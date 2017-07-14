<header role="banner" class="header" id="header">
    <div class="header__header">
        <div class="header__logo js-anchor-nav">
            <?php printPattern('component/logo/base'); ?>
        </div>
    </div>
    <div class="header__body">
        <nav class="header__nav">
            <ol class="nav nav--branded">
                <li><a href="#solutions" class="js-anchor-nav">Solutions</a></li>
                <li><a href="#profile" class="js-anchor-nav">Profile</a></li>
                <li><a href="#booking" class="js-anchor-nav">Contact</a></li>
                <li class="u-hidden-xs u-hidden-sm"><a href="tel: <?php printData('company', 'telephone'); ?>">Call: <?php printData('company', 'telephone'); ?></a></li>
            </ol>
        </nav>
    </div>
</header>