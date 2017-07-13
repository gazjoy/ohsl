<header role="banner" class="header" id="header">
    <div class="header__header">
        <div class="header__logo js-anchor-nav">
            <?php printPattern('component/logo/base'); ?>
        </div>
        <a href="#" class="header__link-menu u-visible-xs u-visible-sm" data-cc-toggle-action="toggle" data-cc-toggle-target="#header">Menu</a>
    </div>
    <div class="header__body">
        <nav class="header__nav">
            <ol class="nav nav--branded js-anchor-nav">
                <li><a href="#solutions">Solutions</a></li>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#booking">Contact</a></li>
                <li><a href="tel: <?php printData('company', 'telephone'); ?>">Call: <?php printData('company', 'telephone'); ?></a></li>
            </ol>
        </nav>
    </div>
    <div class="header__footer t-steel u-visible-xs u-visible-sm">
        <span class="micro u-visible-xs u-visible-sm">© 2017 <a href="#"><?php printData('company', 'name'); ?></a> <?php printData('company', 'long-name'); ?></span>
    </div>
</header>