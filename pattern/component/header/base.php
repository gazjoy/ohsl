<header role="banner" class="header" id="header">
    <div class="header__header">
        <div class="header__logo js-anchor-nav">
            <?php printPattern('component/logo/base'); ?>
        </div>
    </div>
    <div class="header__body">
        <nav class="header__nav">
            <ol class="nav nav--branded">
                <li>
                    <a href="<?php echo getUrl('/pattern/template/noise-monitoring/base?preview=true'); ?>" data-cc-toggle-action="activate" data-cc-toggle-target="#subnav">Solutions</a>
                </li>
                <li><a href="<?php echo getUrl('/pattern/template/training/base?preview=true'); ?>">Training</a></li>
                <li><a href="<?php echo getUrl('/pattern/template/profile/base?preview=true'); ?>">Profile</a></li>
                <li><a href="<?php echo getUrl('/pattern/template/contact/base?preview=true'); ?>">Contact</a></li>
            </ol>
        </nav>
		<div class="header__tel u-hidden-xs u-hidden-sm">
			<a href="tel: <?php printData('company', 'telephone'); ?>">Call: <?php printData('company', 'telephone'); ?></a>
		</div>
    </div>
</header>