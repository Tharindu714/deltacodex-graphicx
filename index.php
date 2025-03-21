<!DOCTYPE html>
<html lang="en">
<?php
require "connection.php";
?>

<?php include("header.php") ?>

    <!-- ====== Featured Area ====== -->
    <section id="featured" class="section-padding pb-70">
        <div class="container">
            <div class="row">
                <!-- single featured item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Graphic Design</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fa fa-edit"></i>
                            </div>
                            <p style="color: #fff;">We are here to do all kind of artworks, all kind of graphic designs
                                with our enormous designing skills using the latest technolgy & latest designing tools
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single featured item -->
                <!-- single featured item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Web Design</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fa fa-code"></i>
                            </div>
                            <p style="color: #fff;">You can start developing your business website, portfolio site with
                                our
                                attractive UI/UX designs. Also we can design your dream web idea with latest figma
                                design tool.</p>
                        </div>
                    </div>
                </div>
                <!-- single featured item -->
                <!-- single featured item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">SEO Services</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <p style="color: #fff;">With our professional skill of SEO, we are willing to provide you
                                a better SEO Service for your requirement. our SEO content will help your clients to
                                find your site Easily</p>
                        </div>
                    </div>
                </div>
                <!-- single featured item -->
            </div>
        </div>
    </section>
    <!-- ====== //Featured Area ====== -->

    <!-- ====== About Area ====== -->
    <section id="about" class="about-area pb-85">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2 style="color: #fff;">About the company</h2>
                        <h4 style="color: #F5BD02;">" Delta Codex Graphics "</h4>
                        <span style="color: #fff;">" Designing Beyond Imagination "</span>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-bg" style="background-image:url(assets/images/about-bg.jpg)">
                        <!-- Social Link -->
                        <div class="social-aria">
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=61553083106877"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://wa.me/LYBYW3SM4QBOO1"><i class="fab fa-whatsapp"></i></a>
                            <a target="_blank" href="https://www.instagram.com/delta.codex.software.solutions/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://t.me/DeltaCodex"><i class="fab fa-telegram"></i></a>
                            <a target="_blank" href="https://youtube.com/@deltacodexsoftwares?si=yUvtqxzfCQZReC38"><i class="fab fa-youtube"></i></a>
                        </div>
                        <!-- // Social Link -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <?php
                        $seo_rs = Database::search("SELECT * FROM `company_details` WHERE `id` = '1'");
                        $seo_num = $seo_rs->num_rows;
                        $seo_data = $seo_rs->fetch_assoc();
                        ?>
                        <h2 style="color: #fff;">Hello, We are <span>Delta Codex Graphics</span></h2>
                        <h4 style="color: #F5BD02;">Graphic Designers and Web Designers</h4>
                        <p style="color: #fff;">We have nearly <?php echo $seo_data["totalexp"]; ?> years of experince in graphic designing including the <?php echo $seo_data["uiexp"]; ?>
                            years of UI/UX designing.
                            We are currently holding a quite large portfolio with bunch of working experince. So anyone
                            can feel free to contact us to achieve your designing dream and your future web application
                        </p>

                        <h5 style="color: #F5BD02;">My Skills</h5>

                        <!-- Skill Area -->
                        <div id="skills" class="skill-area">
                            <?php
                            $p_rs = Database::search("SELECT * FROM `skills`");
                            $p_num = $p_rs->num_rows;

                            for ($x = 0; $x < $p_num; $x++) {
                                $p_data = $p_rs->fetch_assoc();
                            ?>
                                <!-- Single skill -->
                                <div class="single-skill">
                                    <div class="skillbar" data-percent="<?php echo $p_data["percentage"]; ?>%">
                                        <div class="skillbar-title"><span><?php echo $p_data["skills"]; ?></span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent"><?php echo $p_data["percentage"]; ?>%</div>
                                    </div>
                                </div>
                                <!-- //Single skill -->
                            <?php
                            } ?>
                        </div>
                        <!-- //Skill Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // About Area ====== -->

    <!-- ====== Fact Counter Section ====== -->
    <!-- ====================================================================
            NOTE: You need to change  'data-count="10"' and 'p' Eliments
        ===================================================================== -->
    <section class="section-padding pb-70 bg-img fact-counter" id="counter" style="background-image: url(assets/images/fan-fact-bg.jpg)">
        <div class="container">
            <div class="row">
                <!-- Single Fact Counter -->
                <div class="col-lg-3 co col-md-6 l-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="<?php echo $seo_data["totalexp"] ?>"><?php echo $seo_data["totalexp"] ?></span>+</h2>
                        <p>Years Experience</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="<?php echo $seo_data["happyclients"] ?>"><?php echo $seo_data["happyclients"] ?></span>+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="<?php echo $seo_data["uicount"] ?>"><?php echo $seo_data["uicount"] ?></span>+</h2>
                        <p>UI/UX Designs</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="<?php echo $seo_data["graphicworks"] ?>"><?php echo $seo_data["graphicworks"] ?></span>+</h2>
                        <p>Graphic Works</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
            </div>
        </div>
    </section>
    <!-- ====== //Fact Counter Section ====== -->

    <!-- ====== Service Section ====== -->
    <section id="service" class="section-padding pb-70 service-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Other Services</h2>
                        <h5 style="color: #fff;"></h5>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service" style="height: 350px;">
                        <div class="service-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h2>E-Commerce Platform</h2>
                        <p>We are willing to start E- Commerce journey with you! You can now start developing your
                            Own online shopping store with the latest web development technology.
                            Incline with the latest software developing trends like Java 23 & PHP 8.2,
                            We are now eligible to optimize your website</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service" style="height: 350px;">
                        <div class="service-icon">
                            <i class="fa fa-file-word"></i>
                        </div>
                        <h2>Article Writing</h2>
                        <p>No more plagarism again! We are responsible to write your articles,
                            assignments as fast as we can with 100% unique words. According to your given deadline service charges will change</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service" style="height: 350px;">
                        <div class="service-icon">
                            <i class="fa fa-video"></i>
                        </div>
                        <h2>Video Editing</h2>
                        <p>We are now eligible to edit your youtube videos and music
                            tracks much faster with latest technology. Feel free to contact us
                            & introduce your requirement, we will give you the full HD quality edit for you </p>
                    </div>
                </div>
                <!-- //Single Service -->
            </div>

        </div>
    </section>
    <!-- ====== //Service Section ====== -->

    <!-- ====== Why choose Me Section ====== -->
    <section id="" class="why-choose-us pb-85">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2 style="color: #fff;">Why choose Us</h2>
                        <h5 style="color: #F5BD02;">We assure to provide a better & relaiable service for you</h5>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-clock"></i>
                                </div>
                            </div>
                        </div>
                        <h4 style="color: #F5BD02;">Completed on right time</h4>
                        <p style="color: #fff;">With our efficient working schedule, we are willing to provide you a much faster
                            Service. Whatever the requiremernt you bring to us, it will provide before the given time</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-handshake"></i>
                                </div>
                            </div>
                        </div>
                        <h4 style="color: #F5BD02;">Friendly Customer Service</h4>
                        <p style="color: #fff;">Feel free to call us casually
                            Because we are here to provide you the most friendly service.
                            No matter how hard to explain your requirement we will listen carefully</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-history"></i>
                                </div>
                            </div>
                        </div>
                        <h4 style="color: #F5BD02;">Free Revisions for graphic Designs</h4>
                        <p style="color: #fff;">Some time all designs are not really catchy for you!!
                            So we are now eligible to do three free revisions for every graphic design requirement by
                            concerning our customer satisfaction</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-phone-volume"></i>
                                </div>
                            </div>
                        </div>
                        <h4 style="color: #F5BD02;">24 Hours Service</h4>
                        <p style="color: #fff;">Contact us anytime anywhere and bring your graphic or software requirement.
                            We always give you the best solution we got. Call us or chat with us anytime without hesitation</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->
            </div>
        </div>
    </section>
    <!-- ====== //Why choose Me Section ====== -->

    <!-- ====== Service Section ====== -->
    <section id="portfolio" class="pb-85 portfolio-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2 style="color: #fff;">Portfolio</h2>
                        <h5 style="color: #F5BD02;">Achknowledge more about our works</h5>
                        <span style="color: #fff;">Select the service you wish to have from us</span>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row portfolio">
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-portfolio" style="background-image: url('assets/images/uiux.jpeg')">
                        <div class="portfolio-icon text-center">
                            <a href="ui.php"><i class="fa fa-hand-pointer"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>UI/UX Designing</h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->

                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-portfolio" style="background-image: url('assets/images/portrait.jpg')">
                        <div class="portfolio-icon text-center">
                            <a href="portrait.php"><i class="fa fa-hand-pointer"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Portrait Graphics</h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->

                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-portfolio" style="background-image: url('assets/images/landscape.jpg')">
                        <div class="portfolio-icon text-center">
                            <a href="land.php"><i class="fa fa-hand-pointer"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Landscape Graphics</h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->

                <!-- Single Portfolio -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-portfolio" style="background-image: url('assets/images/YouTube.png')">
                        <div class="portfolio-icon text-center">
                            <a href="yt.php"><i class="fa fa-hand-pointer"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Youtube Thumbnails</h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->

                <!-- Single Portfolio -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-portfolio" style="background-image: url('assets/images/logo.jpg')">
                        <div class="portfolio-icon text-center">
                            <a href="logo.php"><i class="fa fa-hand-pointer"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Logo Designs</h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->

                <!-- Single Portfolio -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-portfolio" style="background-image: url('assets/images/figma.jpg')">
                        <div class="portfolio-icon text-center">
                            <a href="figma.php"><i class="fa fa-hand-pointer"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Figma Designs</h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->

                <!-- Single Portfolio -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-portfolio" style="background-image: url('assets/images/other.jpg')">
                        <div class="portfolio-icon text-center">
                            <a href="other.php"><i class="fa fa-hand-pointer"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Other Services</h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
            </div>
        </div>
    </section>
    <!-- ====== // Service Section ====== -->


    <!-- ====== Portfolio Section ====== -->
    <section id="recent" class="pb-85 portfolio-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2 style="color: #fff;">Recent Work</h2>
                        <h5 style="color: #F5BD02;">Currently we are handling a large portfolio in company</h5>
                        <span style="color: #fff;">Feel free to check them below</span>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <!-- Work List Menu-->
                <div class="col-lg-8">
                    <div class="work-list text-center">
                        <ul>
                            <?php
                            $l_rs = Database::search("SELECT * FROM `portfolio` WHERE `portfolio` IN('Potrait','Landscape','Thumbnails')");
                            $l_num = $l_rs->num_rows;

                            for ($x = 0; $x < $l_num; $x++) {
                                $l_data = $l_rs->fetch_assoc();
                            ?>
                                <li class="filter" data-filter=".<?php echo $l_data['portfolio']; ?>"><?php echo $l_data['portfolio']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- // Work List Menu -->
            </div>
            <div class="row portfolio">
                <!-- Single Portfolio -->
                <?php
                $yt_rs = Database::search("SELECT * FROM images INNER JOIN portfolio ON images.portfolio_id = portfolio.id WHERE images.portfolio_id IN (2, 3,4) ORDER BY RAND() LIMIT 18");
                $yt_num = $yt_rs->num_rows;

                for ($x = 0; $x < $yt_num; $x++) {
                    $yt_data = $yt_rs->fetch_assoc();
                ?>
                    <div class="col-lg-4 col-md-6 mix <?php echo $yt_data['portfolio']; ?>">
                        <div class="single-portfolio" style="background-image: url('<?php echo $yt_data['path']; ?>')">
                            <div class="portfolio-icon text-center">
                                <a data-lightbox='lightbox' href="<?php echo $yt_data['path']; ?>"><i class="fas fa-expand-arrows-alt"></i></a>
                            </div>
                            <div class="portfolio-hover">
                                <h4><?php echo $yt_data['project_name']; ?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Portfolio -->
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ====== // Portfolio Section ====== -->

    <!-- ====== Testimonial Section ====== -->
    <section id="testimonial" class="section-padding bg-secondary testimonial-area">
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center">
                    <h2>Testimonial</h2>
                    <h5 style="color: #fff;">What our beloved customers ideas about us</h5>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: #010203; border-radius: 30px;">
            <!-- Section Title -->

            <!-- //Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonials owl-carousel" data-ride="carousel">
                        <!-- Single Testimonial -->
                        <?php
                        $tes_rs = Database::search("SELECT * FROM `feedback`");
                        $tes_num = $tes_rs->num_rows;

                        for ($x = 0; $x < $tes_num; $x++) {
                            $tes_data = $tes_rs->fetch_assoc();
                        ?>
                            <div class="single-testimonial text-center">
                                <div class="testimonial-quote">
                                    <i class="fa fa-quote-right" style="color: #F5BD02;"></i>
                                </div>
                                <p style="color: #fff;"><?php echo $tes_data['content']; ?></p>
                                <h4 style="color: #fff;"><?php echo $tes_data['customer_name']; ?> <span style="color: #F5BD02;"><?php echo $tes_data['designation']; ?></span>
                                </h4>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- // Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Testimonial Section ====== -->


    <!-- ====== Call to Action Area ====== -->
    <section class="section-padding call-to-action-aria">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 style="color: #fff;">Feel free to call us now <i class="fa fa-phone-volume"></i></h2>
                    <p style="color: #F5BD02;">Don't hesitate!! Call us now!! If you find the situation difficult to call with us!!
                        Just leave us a message and you can also contact us from social media</p>
                </div>
                <div class="col-lg-3">
                    <div class="cta-button">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="tel:+94751441764" class="button">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Call to Action Area ====== -->

    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2024 <a href="https://github.com/Tharindu714">Designed by Delta Codex
                                Software Solutions</a></p>
                        <p class="text-white">Send us an email : <a href="mailto:deltacodexsoftwares@gmail.com">Delta Codex Graphics & Softwares</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->

    <!-- ====== ALL JS ====== -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>