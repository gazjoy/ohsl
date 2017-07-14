<?php printPattern('component/skip/base'); ?>
<?php printPattern('component/header/base'); ?>

<main role="main" id="main">
    
    <section class="u-clearfix" style="position: relative;">
        
        <div style="position: absolute; bottom: 5em; right: 5em; width: 16em; z-index: 0;" class="u-visible-lg u-visible-xl">
        <?php echo file_get_contents('build/img/logo/o.svg'); ?>
        </div>
        
        <div class="u-section-lg u-container">
            <h1 class="hero-heading">We are <i class="u-text-brand-aqua">committed</i> to the<br class="u-hidden-xs"> prevention of ill health at work.</h1>
            <div class="u-section-sm u-measure-md-10 u-measure-lg-8">
                <p class="lead">We are a team of expert <a href="#profile">Occupational Hygienists</a>, we can help your business by ensuring that workplaces are safe environments for your employees. We do this by identifying the hazards, evaluating the risks and recommending effective control measures.</p>
            </div>
            <p><a href="#booking" class="btn btn--lg btn--brand-aqua js-anchor-nav">Book a Consultation</a></p>
            <?php //printPattern('component/token/base'); ?>
        </div>
        
    </section>
    
    
    <section class="u-clearfix t-steel">
        <hr class="striped u-space-none" />
        <div class="u-section-sm u-container">
            <div class="grid g-gutter-x-lg">
                <div class="g-col-md-4">
                    <div class="u-text-center">
                        <?php printPattern('component/step-icon/base'); ?>
                        <div>
                            <h2>Identify</h2>
                            <p>We identify the potential hazards in the workplace.</p>
                        </div>
                    </div>
                    <hr class="u-visible-xs u-visible-sm" />
                </div>
                <div class="g-col-md-4">
                    <div class="u-text-center">
                        <span class="step-icon">
                            <span class="step-icon__step t-gold">2</span>
                            <?php printSvg('noun', 'clipboard-plus', 'icon--xl icon--circle t-gold'); ?>
                        </span>
                        <div>
                            <h2>Evaluate</h2>
                            <p>We evaluate the potential risk involved.</p>
                        </div>
                    </div>
                    <hr class="u-visible-xs u-visible-sm" />
                </div>
                <div class="g-col-md-4">
                    <div class="u-text-center">
                        <span class="step-icon">
                            <span class="step-icon__step t-aqua">3</span>
                            <?php printSvg('noun', 'clipboard-star', 'icon--xl icon--circle t-aqua'); ?>
                        </span>
                        <div>
                            <h2>Recommend</h2>
                            <p>We recommend steps to mitigate the risk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="u-clearfix" id="solutions">
        <div class="u-section-lg u-container-lg">
            
            <div style="position: absolute; right: 10%; font-size: 800%;">
                <span style="display: inline-block; transform: rotate(-20deg);">🇬🇧</span>
                <span style="display: inline-block; transform: rotate(20deg);">🇪🇺</span>
            </div>
            
            <header class="title">
                <h2 class="h1 u-measure-md-9">Our Solutions</h2>
                <p class="h4"><i>Experience across a diverse range of disciplines</i></p>
            </header>
            <br>
            
            <div class="g-col-md-10 g-col-lg-9">
                <p>Occupational Hygiene Solutions Ltd. is a dynamic, professional consultancy service provider offering bespoke, quality occupational hygiene solutions to a wide range of industry sectors throughout the UK and Europe.</p>
                <br>
            </div>
            
            <div class="grid g-gutter">
            
                <div class="g-col-sm-6 g-col-md-4 u-full-height">
                    <a href="/" class="card">
                        <img src="<?php echo getUrl('build/img/services/noise-monitoring.jpg'); ?>" width="590" height="325" />
                        <div class="card__body">
                            <h3 class="h4">Noise Monitoring</h3>
                            <p>We can conduct a workplace noise survey that will assist your company in complying with it’s duties.</p>
                        </div>
                    </a>
                </div>
                
                <div class="g-col-sm-6 g-col-md-4 u-full-height">
                    <a href="/" class="card">
                        <img src="<?php echo getUrl('build/img/services/noise-monitoring.jpg'); ?>" width="590" height="325" />
                        <div class="card__body">
                            <h3 class="h4">Air Monitoring</h3>
                            <p>We offer a monitoring service for most substances deemed hazardous to health.</p>
                        </div>
                    </a>
                </div>
                
                <div class="g-col-sm-6 g-col-md-4 u-full-height">
                    <a href="/" class="card">
                        <img src="<?php echo getUrl('build/img/services/noise-monitoring.jpg'); ?>" width="590" height="325" />
                        <div class="card__body">
                            <h3 class="h4">Local Exhaust Ventilation (LEV)</h3>
                            <p>We will provide a clear and concise report based on the Health and Safety Executive’s template.</p>
                        </div>
                    </a>
                </div>
                
                <div class="g-col-sm-6 g-col-md-4 u-full-height">
                    <a href="/" class="card">
                        <img src="<?php echo getUrl('build/img/services/noise-monitoring.jpg'); ?>" width="590" height="325" />
                        <div class="card__body">
                            <h3 class="h4">Hazardous Substances (COSHH)</h3>
                            <p>We have many years of experience in the application of COSHH and can provide: COSHH assessments.</p>
                        </div>
                    </a>
                </div>
                
                <div class="g-col-sm-6 g-col-md-4 u-full-height">
                    <a href="/" class="card">
                        <img src="<?php echo getUrl('build/img/services/noise-monitoring.jpg'); ?>" width="590" height="325" />
                        <div class="card__body">
                            <h3 class="h4">Indoor Air Quality &amp; Lighting</h3>
                            <p>We are able to assist employers with this duty by conducting indoor air quality and lighting surveys.</p>
                        </div>
                    </a>
                </div>
                
                <div class="g-col-sm-6 g-col-md-4 u-full-height">
                    <a href="/" class="card">
                        <img src="<?php echo getUrl('build/img/services/noise-monitoring.jpg'); ?>" width="590" height="325" />
                        <div class="card__body">
                            <h3 class="h4">Occupational Hygiene Training</h3>
                            <p>We have many years experience of delivering training courses.</p>
                        </div>
                    </a>
                </div>
                
            </div>
            
        </div>
    </section>
    
    
    <section class="u-clearfix" id="profile">
        <hr class="striped u-space-none" />
        
        <div class="u-section-lg u-container-lg">
            
            <div class="grid g-stretch-first">
                <div>
                    <header class="title">
                        <h2 class="h1 u-measure-md-9">Company Profile</h2>
                        <p class="h4"><i>High quality service delivered by experienced staff</i></p>
                    </header>
                </div>
                <div>
                    <img src="<?php echo getUrl('build/img/accreditation/ISO 9001 Reg Mark GIF-Col.gif'); ?>" width="139" height="100" alt="ISO 9001 Reg Mark Colour" />
                </div>
            </div>
            <br>
            
            <div class="grid g-gutter-x-lg">
                <div class="g-col-md-8">
                    <div>
                        <p>Occupational Hygiene Solutions Ltd (OHSL) offers a professional consultancy
                        service that is independent and impartial. We offer a realistic alternative
                        to in-house resources and bring a very high level of practical experience,
                        know-how and confidentiality. Our aim is to deliver a market leading service
                        that enables you to effectively manage occupational hygiene risks within
                        your working environment.</p>
            
                        <p>OHSL offers a bespoke, high quality service that is delivered by qualified,
                        highly motivated and experienced staff. From initial contact, through to
                        delivery and completion, a designated project manager is here to provide
                        you with a more personal approach, with turnaround times considerably less
                        than existing industry standards. All of this service is offered at a price
                        that represents excellent value for money.</p>
                    </div>
                </div>
                <div class="g-col-md-4">
                    
                    
                    <header class="title">
                        <h3>Our Aims</h3>
                        <p class="h5"><i>We are committed to the following aims</i></p>
                    </header>
                    <br>
                    
                    <ul> 
                        <li>Redefine industry standards on customer care, delivery of work and customer
                    satisfaction. </li>
                        <li>Provide a one stop shop for occupational hygiene solutions.</li>
                        <li>Assist clients in proactively managing emerging health issues within
                    the workplace. </li>
                        <li>Provide a competitive service.</li> 
                    </ul>
                </div>
            </div>
            
            
            
            <h3>Our Team</h3>
            
            <div class="grid g-gutter-lg">
                <div class="g-col-md-4">
                    <div>
                        <h4>Gareth Ison <em>(<abbr title="Licentiate Membership of the Faculty of Occupational Hygiene">LFOH</abbr>)</em></h4> 
                        <p>Gareth is a qualified competent occupational hygienist with 20 years experience working in the occupational hygiene industry.</p>
                    </div>
                </div>
                <div class="g-col-md-4">
                    <div>
                        <h4>Helen Thomas <em>(<abbr title="Associate Membership of the Faculty of Occupational Hygiene">AFOH</abbr>)</em></h4>
                        <p>Helen is a competent occupational hygienist with approximately 6 years experience working in the occupational hygiene industry.</p>
                    </div>
                </div>
                <div class="g-col-md-4">
                    <div>
                        <h4>Andy Wallace <em>(<abbr title="Licentiate Membership of the Faculty of Occupational Hygiene">LFOH</abbr>)</em></h4>
                        <p>Andy is a qualified competent occupational hygienist with over 5 years experience working in the occupational hygiene industry.</p>
                    </div>
                </div>
            </div>
            
            <p><a href="#booking" class="btn btn--lg btn--brand-aqua btn--ghost js-anchor-nav">Contact The Team</a></p>
        </div>
    </section>
    
    
    
    <section class="u-clearfix u-fill-neutral-lighter" id="booking">
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
                            <label class="field-group__label">Your Name</label>
                            <div class="field-group__field">
                                <input id="text" type="text" placeholder="What is your name?" required>
                            </div>
                        </div>
                
                        <div class="field-group">
                            <label class="field-group__label">Your Telephone</label>
                            <div class="field-group__field">
                                <input id="text" type="number" placeholder="Please include area/country code" required>
                            </div>
                        </div>
                
                        <div class="field-group">
                            <label class="field-group__label">Your Email</label>
                            <div class="field-group__field">
                                <input id="text" type="email" placeholder="We never send spam" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            </div>
                        </div>
                
                        <div class="field-group">
                            <label class="field-group__label na">Your Message</label>
                            <div class="field-group__field">
                                <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                
                        <p><button type="submit" class="btn btn--lg btn--brand-aqua">Book a Consultation</button></p>
                        <p class="micro"><span class="na"></span> Denotes not required.</p>
                    </form>
                </div>
                <div class="g-col-md-6">
                    <div class="card" style="margin-bottom: 0; margin-top: -4em; border-radius: 0;">
                        <div class="card__header">
                            <h4>Prefer to contact us by other means?</h4>
                        </div>
                        <div class="card__body">
                            <ul class="u-list-unstyled lead">
                                <li>Call: <a href="tel: <?php printData('company', 'telephone'); ?>"><?php printData('company', 'telephone'); ?></a></li>
                                <li>Email: <a href="mailto: <?php printData('company', 'email'); ?>"><?php printData('company', 'email'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    
</main>

<?php printPattern('component/topper/base'); ?>
<?php printPattern('component/footer/base'); ?>