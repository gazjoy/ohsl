<?php printPattern('component/skip/base'); ?>
<?php printPattern('component/header/base'); ?>

<main role="main">

    <!-- Abrasive Wheels -->
    <section class="u-clearfix" id="training-health-and-safety">
    	<hr class="striped u-space-none" />

    	<div class="u-section-lg u-container-md">
	    	<h2>Health &amp; Safety Courses</h2>
	    	<?php for($i=1; $i <=5; $i++) { printPattern('component/card/inline'); } ?>
	    </div>
    </section>

    <section class="u-clearfix" id="training-health-social-care">
    	<hr class="striped u-space-none" />

    	<div class="u-section-lg u-container-md">
	    	<h2>Health &amp; Social Care Courses</h2>
	    	<?php for($i=1; $i <=5; $i++) { printPattern('component/card/inline'); } ?>
	    </div>
	</section>
	
</main>

<?php printPattern('component/footer/base'); ?>