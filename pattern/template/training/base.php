<?php printPattern('component/skip/base'); ?>
<?php printPattern('component/header/base'); ?>

<main role="main">
    

    <!-- Abrasive Wheels -->
    <section class="u-clearfix" id="training-health-and-safety">
    	<hr class="striped u-space-none" />

    	<div class="u-section-lg u-container-lg">
	    	<h2>Health &amp; Safety Courses</h2>

	    	<div class="grid g-gutter">
	    		<div class="g-col-md-6">
	    			<?php for($i=1; $i <=5; $i++) {
	    				printPattern('component/card/inline');
	    			} ?>
	    		</div>
	    		<div class="g-col-md-6">
	    			<?php for($i=1; $i <=2; $i++) {
	    				printPattern('component/card/inline');
	    			} ?>
	    		</div>
	    	</div>



	    </div>
    </section>

    

    


</main>

<?php printPattern('component/footer/base'); ?>