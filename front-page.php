<?php

/* piece of cake studios | homepage */

get_header(); ?>
    
<section class="jumbotron" id="header">
    <div class="container text-center">
        
        <span id="start-change"><!--point at which the navbar changes bg color--></span>
        
        <h1><span id="header-text">piece of cake</span></h1>
            <script type="text/javascript">
                var text = ["piece of cake", "it's a cinch", "like duck soup", "no sweat", "easy peasy", "a snap"];
                var counter = 0;
                var elem = document.getElementById("header-text");
                setInterval(change, 2000);
                    function change() {
                        elem.innerHTML = text[counter];
                            counter++;
                            if(counter >= text.length) { counter = 0; }
                    }
            </script>
        
        <div id="sideways">
            <a href="#">piece of cake studios</a>
        </div>
        <div id="scroll-down">
            <a href="#about">scroll down</a>
        </div>
    </div>
</section>      

<main>

    <section id="about">

    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <h4>Our Services</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-4">
                    <h3>Digital / Web Design</h2>
                    <p>When it comes to email templates, landing pages, and websites, it’s our bread and butter. We always put in %100, whether it’s starting from branding or simply revamping an existing page.</p>
                </div>
                <div class="col-sm-4">
                    <h3>Front End Development</h2>
                    <p>We create completely responsive websites so you get the most out of your designs. By utilizing best web practices, it ensures your site is in tip top shape and fully functional.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="packages">
        <img src="<?php bloginfo('template_directory'); ?>/img/high-five.png" class="center-block img-responsive" id="packages-img" alt="see our packages!"/>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h4>For a more in depth look at our services, please check out our package offerings, which includes customizable bundles and all of our web deliverables.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-5 col-md-2">
                    <a class="btn btn-default" href="#" role="button">View Packages</a>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div id="process-header">
                        <p>Our Process</p>
                        <h4>You have something special to share and we want to help you do it. So we’ve broken down our work process into 3 simple steps. </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="process-step-one">
                        <img src="<?php bloginfo('template_directory'); ?>/img/finger-point.png" alt="step one" />
                    </div>
                    <h3>Choose your recipe</h3>
                    <p>What are you craving? After you look through our <a href="#">package offerings</a>, pick whatever suits your fancy. We've got something for everyone.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/peace.png" alt="step two" />
                    <h3>Gather the ingredients</h3>
                    <p>Let’s get to know each other. Who are you? What are you looking for? And more importantly, what’s your favorite kind of food?</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/peace.png" alt="step three" />
                    <h3>Mix up the batter</h3>
                    <p>We do the stirring and you do the taste-testing. Tell us when it tastes just right. Your feedback and thoughts are always important.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div id="process-footer">
                        <h2>And that’s all there is to it. Put it in the oven and bake at 350˚. Chemical reactions happen and your website comes to life!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="consultation">
        <div class="container">
            <div class="row text-center center-block">
                <div class="col-md-offset-2 col-md-8">
                    <img src="<?php bloginfo('template_directory'); ?>/img/donuts-group.png" alt="donuts for everyone!" />

                    <h4>Got a project or an idea? Awesome! We are happy to offer a free consultation to go over details, answer any questions, or address design related matters.</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-offset-5 col-md-2">
                    <a class="btn btn-default" href="#" role="button">Free Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section id="work">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div id="work-header">
                        <p>Our Work</p>
                        <h4>Wise words we live by: “Don't try to be something for everybody, just try to be everything for that one person.”</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/work-1.png" alt="website for signature home realty" />
                    <p>Website_Small Real Estate Company</p>
                    <h2>Signature Home Realty's Launch</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-4">
                    <div class="work-item">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/work-2.png" alt="branding example" />
                        <p>Branding_Community Event</p>
                        <h2>Jiro's Sushi Movie Night</h2>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="work-item">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/work-3.png" alt="web design for dripp's candies" />
                        <p>Web Design_Dripp's Candies</p>
                        <h2>Dripp's Email Template</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <section id="contact-header">
                        <img src="<?php bloginfo('template_directory'); ?>/img/smile.png" alt="contact us!" />
                        <h3>Get in touch.</h3>
                        <h4>Questions / comments? We'd love to hear from you! <br>Message us at <a href="mailto:hello@pieceofcakestudios.com">hello@pieceofcakestudios.com</a> or use the contact form below.</h4>
                    </section>
                </div>
            </div> 
            
            <div class="col-md-offset-2 col-md-8">
            
                <?php
                    if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
                ?>
                
            </div>


            <!--<form class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-offset-3 col-sm-1 control-label"><h4>Name</h4></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-offset-3 col-sm-1 control-label"><h4>Email</h4></label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-sm-offset-3  col-sm-1 control-label"><h4>Subject</h4></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="Subject" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <textarea class="form-control" rows="5" placeholder="Type your message here."></textarea>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-2 text-center">
                        <button type="submit" class="btn btn-default" id="contact-submit-btn">Make Contact</button>
                    </div>
                </div>
            </form>-->
        </div>
    </section>

    <hr>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="footer-content">
                        &copy; piece of cake studios
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div id="footer-social">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/fb.png" alt="facebook" /></a> 
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/insta.png" alt="instagram" /></a>
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/youtube.png" alt="youtube" /></a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="footer-content">
                        <a href="#">Back to the top <img src="<?php bloginfo('template_directory'); ?>/img/up.png" id="up" alt="back to top" /></a>
                    </div>
                </div>
            </div>
        </div> 
    </footer>

</main>

<?php get_footer(); ?>

