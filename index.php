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
            <!--============================== Slider =================================-->
            <div id="slider" class="elastic-slideshow">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li> <img src="images/slider/elastic/1.jpg" alt="Slider 1" />
                            <div class="ei-title">
                                <h2><span>Ultra Responsive</span></h2>
                                <h3><span>Multi-Purpose Business Website Template</span></h3>
                            </div>
                        </li>
                        <li> <img src="images/slider/elastic/2.jpg" alt="Slider 2" />
                            <div class="ei-title">
                                <h2><span>Flexible Design</span></h2>
                                <h3><span>Multi-Purpose Business Website Template</span></h3>
                            </div>
                        </li>
                        <li> <img src="images/slider/elastic/3.jpg" alt="Slider 3" />
                            <div class="ei-title">
                                <h2><span>Awesomes Colors</span></h2>
                                <h3><span>Multi-Purpose Business Website Template</span></h3>
                            </div>
                        </li>
                        <li> <img src="images/slider/elastic/4.jpg" alt="Slider 4" />
                            <div class="ei-title">
                                <h2><span>Retina Icons</span></h2>
                                <h3><span>Multi-Purpose Business Website Template</span></h3>
                            </div>
                        </li>
                        <li> <img src="images/slider/elastic/5.jpg" alt="Slider 5" />
                            <div class="ei-title">
                                <h2><span>Customer Support</span></h2>
                                <h3><span>Multi-Purpose Business Website Template</span></h3>
                            </div>
                        </li>
                    </ul>
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li> <a href="#">Slide 1</a> <img src="images/slider/elastic/thumb/1.jpg" alt="Slider 1" /> </li>
                        <li> <a href="#">Slide 2</a> <img src="images/slider/elastic/thumb/2.jpg" alt="Slider 2" /> </li>
                        <li> <a href="#">Slide 3</a> <img src="images/slider/elastic/thumb/3.jpg" alt="Slider 3" /> </li>
                        <li> <a href="#">Slide 4</a> <img src="images/slider/elastic/thumb/4.jpg" alt="Slider 4" /> </li>
                        <li> <a href="#">Slide 5</a> <img src="images/slider/elastic/thumb/5.jpg" alt="Slider 5" /> </li>
                    </ul>
                </div>
                <script type="text/javascript">

                    $(document).ready(function() {

                        $('#ei-slider').eislideshow({
                            easing: 'easeOutExpo',
                            titleeasing: 'easeOutExpo',
                            titlespeed: 1200,
                            thumbMaxWidth: 120
                        });

                    });

                </script>
            </div>
            <hr class="sep40">
            <!-- Content
              ======================================================================== -->
            <div class="container">
                <div class="promo-block ani" data-gen="fadeInDown" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <h4 class="color-lightgray">PlussOne, a very clean, responsive & super flexible multipurpose theme</h4>
                    <h3 class="lspace ucase">Portrait Quality Work, Makes You Feel Fun Again!</h3>
                </div>
                <div  class='hr hr-short hr-center'><span class='hr-inner'><span class='hr-inner-style'></span></span></div>
                <div class="one-third ani" data-gen="fadeInLeft" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <div class="iconbox  hexagon"><span><i class="icon-mobile-phone"></i></span>
                        <div class="content"><strong>Responsive Design</strong>
                            <div>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiu modi tempora.</div>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="one-third ani" data-gen="fadeInLeft" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <div class="iconbox hexagon"><span><i class="icon-plane"></i></span>
                        <div class="content"><strong>Magic Touch</strong>
                            <div>Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiu modi tempora.</div>
                        </div>
                    </div>
                </div>
                <div class="one-third column-last ani" data-gen="fadeInLeft" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <div class="iconbox hexagon"><span><i class="icon-cogs"></i></span>
                        <div class="content"><strong>Easy Customization</strong>
                            <div>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="sep40">
            <div class="fullwidth box_border">
                <div class="container">
                    <hr class="sep30">
                    <h3 class="headline">Recent Projects </h3>
                    <h6>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</h6>
                    <hr class="sep20">
                    <!-- Project Carousel -->
                    <div class="project-carousel fullwidth-padding clearfix ani" data-gen="fadeInUp" data-gen-offset="bottom-in-view" style="opacity:0;"> <a id="project-prev" class="jcarousel-prev" href="#"><i class="icon-angle-left"></i></a> <a id="project-next" class="jcarousel-next" href="#"><i class="icon-angle-right"></i></a>
                        <ul>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_01.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_01.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_02.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_02.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_03.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_03.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_04.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_04.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_05.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_05.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_06.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_06.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_08.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_08.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                            <li class="project-item">
                                <div class="thumbnail"> <img src="images/portfolio/project_09.jpg" alt="" />
                                    <div class="overlay"></div>
                                    <div class="mask"> <a href="images/portfolio/project_09.jpg" class="icon-image folio" data-fancybox-group="gallery"><i class="icon-search"></i></a> </div>
                                </div>
                                <div class="thumb-item-title">
                                    <h6><a href="portfolio_single.html">Project Title</a></h6>
                                    <span>Project Descriptions</span> </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Project Carousel / End -->
                    <!-- Content / End -->
                    <hr class="sep60">
                </div>
            </div>
            <div class="container">
                <hr class="sep30">
                <div class="two-third ani" data-gen="fadeInLeft" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <div  class='hr hr-short'>
                        <h4 class="headline">Our Services</h4>
                        <span class='hr-inner'><span class='hr-inner-style02'></span></span></div>
                    <div class="block_tabs_type_3">
                        <div class="tabs">
                            <ul>
                                <li><a href="#1" class="current"><i class="icon-thumbs-up"></i> Coporate &amp; Clean Design</a></li>
                                <!-- tab link -->
                                <li><a href="#2"><i class="icon-mobile-phone"></i> Ultra Responsive</a></li>
                                <!-- tab link -->
                                <li><a href="#3"><i class="icon-magic"></i> Magic Touch</a></li>
                                <!-- tab link -->
                                <li><a href="#4"><i class="icon-cogs"></i> Easy Customization</a></li>
                                <!-- tab link -->
                                <li><a href="#5"><i class="icon-user"></i> Customer Support</a></li>
                                <!-- tab link -->
                            </ul>
                        </div>
                        <div class="tab_content">
                            <!-- tab content goes here -->
                            <h3 class="font_heading">Corporate &amp; Clean Design</h3>
                            <p>Dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
                            <div class="one-half">
                                <ul class="circle">
                                    <li>Nam ultricies dolor eu velit varius scelerisque</li>
                                    <li>Phasellus id augue ligula</li>
                                    <li>Ante venenatis dapibus</li>
                                </ul>
                            </div>
                            <div class="one-half column-last">
                                <ul class="circle">
                                    <li>Nam ultricies dolor eu velit varius scelerisque</li>
                                    <li>Phasellus id augue ligula</li>
                                    <li>Ante venenatis dapibus</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab_content">
                            <!-- tab content goes here -->
                            <div class="f_right15" style="margin-top:50px;"><img src="images/portfolio/project_13.jpg" class="pic" width="125" height="100" alt=""></div>
                            <div class="oh">
                                <h3 class="font_heading">Ultra Responsive</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <p>Dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                            </div>
                        </div>
                        <div class="tab_content">
                            <!-- tab content goes here -->
                            <h3 class="font_heading">Magic Touch</h3>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. <br>
                                <br>
                                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                        </div>
                        <div class="tab_content">
                            <!-- tab content goes here -->
                            <h3 class="font_heading">Easy Customization</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                        </div>
                        <div class="tab_content">
                            <!-- tab content goes here -->
                            <h3 class="font_heading">Customer Support</h3>
                            <p>Quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="one-third column-last ani" data-gen="fadeInRight" data-gen-offset="bottom-in-view" style="opacity:0;">
                    <div  class='hr hr-short'>
                        <h4 class="headline">Get in touch!</h4>
                        <span class='hr-inner'><span class='hr-inner-style02'></span></span></div>
                    <div class="contact-form">
                        <form method="post" id="contact-form">
                            <label>Name</label>
                            <input type="text" name="name" />
                            <label>Email</label>
                            <input type="text" name="email" />
                            <label>Message</label>
                            <textarea cols="88" rows="6" name="message"></textarea>
                            <input type="submit" value="Submit Form " class="green-darkgray">
                        </form>
                    </div>
                </div>
            </div>
            <hr class="sep60">
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
    </body>
</html>
