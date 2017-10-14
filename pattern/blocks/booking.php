<section class="u-clearfix" id="booking">
    <hr class="striped u-space-none" />
    <div class="u-section-lg u-container-lg">
        <header class="title">
            <h2 class="h1 u-measure-md-9">Book a Consultation</h2>
            <p class="h4"><i>We will call you back to arrange a conveinient time</i></p>
        </header>
        <br>
        <p class="u-measure-md-8">Please leave us your name and contact email or telephone number and we will contact you to arrange a consultation. To help us best deal with your enquiry please provide as much information as possible.</p>
        <br>
        
        <div class="grid g-gutter-x-lg">
            <div class="g-col-md-6">
                <form action="" autocomplete="off" class="">
            
                    <div class="field-group">
                        <label class="field-group__label required">Your Name</label>
                        <div class="field-group__field">
                            <input id="text" type="text" placeholder="What is your name?" required>
                        </div>
                    </div>
            
                    <div class="field-group">
                        <label class="field-group__label required">Your Telephone</label>
                        <div class="field-group__field">
                            <input id="text" type="number" placeholder="Please include area/country code" required>
                        </div>
                    </div>
            
                    <div class="field-group">
                        <label class="field-group__label required">Your Email</label>
                        <div class="field-group__field">
                            <input id="text" type="email" placeholder="We never send spam" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                    </div>
            
                    <div class="field-group">
                        <label class="field-group__label">
							Your Message<br>
							<em class="micro">(Please include details of when you would like to book a consultation).</em>
						</label>
						
                        <div class="field-group__field">
                            <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>
            
                    <p><button type="submit" class="btn btn--lg btn--brand-aqua">Book a Consultation</button></p>
                    <p class="micro"><span class="required"></span> Denotes required.</p>
                </form>
            </div>
            <div class="g-col-md-5">
                <div class="card">
                    <div class="card__header">
                        <h4>Prefer to contact us by other means?</h4>
                    </div>
                    <div class="card__body">
                        <ul class=" lead">
                            <li>Call: <a href="tel: <?php printData('company', 'telephone'); ?>"><?php printData('company', 'telephone'); ?></a></li>
                            <li>Email: <a href="mailto: <?php printData('company', 'email'); ?>"><?php printData('company', 'email'); ?></a></li>
                        </ul>
						<p>We are available Monday - Friday between 9am and 5pm. If for some reason you are unable to get through to us, please do leave your name and contact number and we will call you back at our earliest conveinience.</p>
						<h4>Need to send us a letter?</h4>
						<p>2 Hayes Road, <br>
							Nuneaton,<br>
							Warwickshire.<br>
							CV10 0NH.
						</p>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</section>