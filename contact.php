
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "inc.header.php"; ?>
    </head>
    <body>
        <!-- Body Wrapper -->
        <div id="body-wrapper">
            <!-- Header
              ======================================================================== -->
            <?php include_once "inc.menu.php"; ?>
            <!-- Header / End -->
            <!-- Start Static Banner -->
            <div id="inner_banner">
                <div class="container ani" data-gen="fadeInRight" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <hr class="sep80">
                    <h3 class="headline">Contact Page 1</h3>
                    <h6>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</h6>
                    <div class="bg_page_nav"><a href="index.html">Home</a> &nbsp;&rarr;&nbsp; Contact Us</div>
                    <hr class="sep40">
                </div>
            </div>
            <!-- End Static Banner -->
            <!-- Content
              ======================================================================== -->
            <div class="container">
                <hr class="sep60">
                <!-- Map -->
                <article>
                    <iframe  height="400" style="width:100%;" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=116-F1+Johar+Town+Lahore,+Pakistan&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=46.898798,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=338-A+Revenue+Society,+Johar++Town,+Lahore,+Lahore+District,+Punjab,+Pakistan&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </article>
                <hr class="sep60">
                <!-- Main Content -->
                <div id="contentright" class="ani" data-gen="fadeInRight" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <h3 class="headline">Drop Us A Line</h3>
                    <p>Mauris urna placerat enim, eget varius nulla lacus ut erat. Mauris faucibus orci ac turpis facilisis et tempus metus venenatis. Pellentesque ornare, risus et vulputate mollis.</p>
                    <!-- Contact Form -->
                    <div class="contact_form">
                        <div class="form">
                            <form method="post" id="contact-form" action="http://www.okathemes.com/themes/plussone/contact.php">
                                <div class="fields">
                                    <div class="column">
                                        <p class="label">Name <span>*</span></p>
                                        <div class="field">
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <p class="label">E-mail <span>*</span></p>
                                        <div class="field">
                                            <input type="text" name="email">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <p class="label">Website</p>
                                        <div class="field">
                                            <input type="text" name="website">
                                        </div>
                                    </div>
                                </div>
                                <p class="label">Message <span>*</span></p>
                                <div class="textarea">
                                    <textarea cols="1" name="message" rows="6"></textarea>
                                </div>
                                <input type="submit" class="button green-darkgray" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div id="sidebarleft" class=" ani" data-gen="fadeInLeft" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <!-- Text Widget -->
                    <h3 class="headline">Contacts</h3>
                    <p class="address">1234 St Abort Road,<br />
                        London, GB 0045.</p>
                    <p class="phone">Phone: (+123) 456-7890 <br />
                        Fax: (+123) 456-7890</p>
                    <p class="email">Email: hello@plussone.com<br />
                        Web: www.plussone.com</p>
                </div>
            </div>
            <hr class="sep40">
            <!-- Footer Start
              ======================================================================== -->
            <?php include_once 'inc.footer.php'; ?>
            <!-- Footer / End -->
        </div>
        <!-- Body Wrapper / End -->
        <!-- Back to Top -->
        <a href="#" id="back-to-top"><i class="icon-chevron-up"></i></a>
        <!-- Styles Selector
        ================================================== -->
        <?php include_once 'inc.styleselector.php'; ?>
        
        <script src="js/tooltip.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/tooltip.js"></script>
    </body>
</html>
