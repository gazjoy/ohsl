<?php
    $icons = array(
        'clipboard-magnifying-glass',
        'clipboard-plus',
        'clipboard-star'
    );
?>
<ul class="nav nav--inline nav--space">
    <?php foreach($icons as $icon) : ?><li><?php printSvg('noun', $icon, 'icon--xl'); ?></li><?php endforeach; ?>
</ul>
