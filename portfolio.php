<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "connection.php";

if (isset($_SESSION["user"])) {

?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="UTF-8">
        <link rel="icon" href="assets/images/logo.png">
        <title>Update Portfolio</title>

        <!-- ====== Google Fonts ====== -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

        <!-- ====== ALL CSS ====== -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>

    <body data-spy="scroll" data-target=".navbar-nav" style="background-color: #242424; overflow-x: hidden;">

        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <!-- // Preloader -->

        <!-- ====== Header ====== -->
        <header id="header" class="header">
            <!-- ====== Navbar ====== -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand logo" href="#">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                    <!-- // Logo -->

                    <!-- Mobile Menu -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                    <!-- Mobile Menu -->

                    <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto d-lg-none">
                            <li class="nav-item active"><a class="nav-link" href="#home">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">UPDATES</a></li>
                            <li class="nav-item"><a class="nav-link" href="#comments">COMMENTS</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#skills">NEW SKILLS</a></li>
                            <li class="nav-item"><a class="nav-link" href="#upskills">UPDATE SKILLS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ====== // Navbar ====== -->
        </header>

        <!-- ====== Portfolio ====== -->
        <section id="updates" class="contact-section" style="padding-top: 100px;">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2 style="color: #F5BD02;">Update Statistics</h2>
                            <p style="color: #fff;">Update Company experince for the customer enhancement</p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->

                <!-- Contact Form -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Form -->
                        <?php
                        $p_rs = Database::search("SELECT * FROM `company_details`");
                        $p_num = $p_rs->num_rows;

                        for ($x = 0; $x < $p_num; $x++) {
                            $p_data = $p_rs->fetch_assoc();
                        ?>
                            <div class="row">
                                <div class="col-12 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="cus" id="cus" required placeholder="Happy Customer Count  : <?php echo $p_data["happyclients"]; ?>">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="totalexp" id="totalexp" required placeholder="Total business Experince Years : <?php echo $p_data["totalexp"]; ?>">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="uiexp" id="uiexp" required placeholder="UI/ UX Experince Years : <?php echo $p_data["uiexp"]; ?>">
                                </div>

                                <div class="col-12 form-group">
                                    <input type="number" class="form-control" name="uicount" id="uicount" required placeholder="With <?php echo $p_data["uiexp"]; ?> Experince, so far we designed <?php echo $p_data["uicount"]; ?> attractive User Interfaces">
                                </div>

                                <div class="col-12 form-group">
                                    <input type="number" class="form-control" name="graphicworks" id="graphicworks" required placeholder="With <?php echo $p_data["totalexp"]; ?> Experince, so far we designed <?php echo $p_data["graphicworks"]; ?> attractive Graphic Designs">
                                </div>
                            </div>
                            <div class="form-btn text-center">
                                <button class="button" type="button" onclick="UpdatePortfolio();">Update Business Portfolio</button>
                                <p class="form-message"></p>
                            </div>

                            <!-- // Form -->
                    </div>
                </div>
            <?php
                        }
            ?>
            <!-- // Contact Form -->
            </div>
        </section>
        <!-- ====== // Portfolio ====== -->

        <!-- ====== Feedback ====== -->
        <section id="comments" class="contact-section" style="padding-top: 40px;">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2 style="color: #F5BD02;">Feedbacks of Customers</h2>
                            <p style="color: #fff;">Customer Feedbacks are really vital for business enhancement</p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->

                <!-- Contact Form -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-12 col-lg-6 form-group">
                                <input type="text" class="form-control" name="feedname" id="feedname" required placeholder="Customer Name Here">
                            </div>
                            <div class="col-12 col-lg-6 form-group">
                                <input type="text" class="form-control" name="designation" id="designation" required placeholder="Who is your Customer?">
                            </div>
                            <div class="col-12 form-group">
                                <textarea type="text" class="form-control" name="feedbackpro" id="feedbackpro" required placeholder="Leave Your feedback Here" style="height: 140px"></textarea>
                            </div>
                        </div>
                        <div class="form-btn text-center">
                            <button class="button" type="button" onclick="feedbackpro();">Send a new Feedback</button>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== // Feedback ====== -->

        <!-- ====== Skiils ====== -->
        <section id="skills" class="contact-section" style="padding-top: 40px;">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2 style="color: #F5BD02;">Add new Skills</h2>
                            <p style="color: #fff;">Show your skills to customers & make trust between business</p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->

                <!-- Contact Form -->
                <?php
                $skill_rs = Database::search("SELECT * FROM `skills` WHERE `skills`= 'HTML5'");
                $skill_num = $skill_rs->num_rows;

                for ($x = 0; $x < $skill_num; $x++) {
                    $skill_data = $skill_rs->fetch_assoc();
                ?>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-12 col-lg-6 form-group">
                                    <input type="text" class="form-control" name="lang" id="lang" required placeholder="Ex:- <?php echo $skill_data["skills"]; ?>" required>
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="percentage" id="percentage" required placeholder="How much skilled in that?  Ex:- <?php echo $skill_data["percentage"]; ?> %"" required>
                                </div>
                            </div>
                            <div class=" form-btn text-center">
                                    <button class="button" type="button" onclick="skilladding();">Add new Skill</button>
                                    <p class="form-message"></p>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                    ?>
                    </div>
        </section>
        <!-- ====== // Skiils ====== -->

        <!-- ====== Update Skiils ====== -->
        <section id="upskills" class="contact-section" style="padding-top: 40px;">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2 style="color: #F5BD02;">Update your Skills</h2>
                            <p style="color: #fff;">You are growing each & every day! So don't forget to update your skill Percentages</p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->

                <!-- Contact Form -->
                <?php
                $uskill_rs = Database::search("SELECT * FROM `skills` WHERE `skills`= 'HTML5'");
                $uskill_num = $uskill_rs->num_rows;

                for ($x = 0; $x < $uskill_num; $x++) {
                    $uskill_data = $uskill_rs->fetch_assoc();
                ?>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-12 col-lg-6 form-group">
                                    <select id="ulang" class="form-control">
                                        <?php

                                        $rs = Database::search("SELECT * FROM `skills`");
                                        $n = $rs->num_rows;

                                        for ($x = 0; $x < $n; $x++) {
                                            $d = $rs->fetch_assoc();
                                        ?>
                                            <option><?php echo $d["skills"]; ?></option>
                                        <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                    <input type="number" class="form-control" name="upercentage" id="upercentage" required placeholder="How much skilled in that?  Ex:- <?php echo $skill_data["percentage"]; ?> %"" required>
                                </div>
                            </div>
                            <div class=" form-btn text-center">
                                    <button class="button" type="button" onclick="skillUP();">Update Your Skill</button>
                                    <p class="form-message"></p>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                    ?>
                    </div>
        </section>
        <!-- ====== // Update Skiils ====== -->

        <!-- ====== Update Skiils ====== -->
        <section id="portfolio" class="contact-section" style="padding-top: 40px;">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2 style="color: #F5BD02;">Add Portfolio</h2>
                            <p style="color: #fff;">Main Purpose of the application is to show yourworks to customer</p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->

                <!-- Contact Form -->
                <?php
                $uskill_rs = Database::search("SELECT * FROM `skills` WHERE `skills`= 'HTML5'");
                $uskill_num = $uskill_rs->num_rows;

                for ($x = 0; $x < $uskill_num; $x++) {
                    $uskill_data = $uskill_rs->fetch_assoc();
                ?>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                        <center>
                            <div class="row">
                                <div class="col-12 col-lg-6 form-group">
                                    <select id="proj_title" class="form-control">
                                        <?php

                                        $rs = Database::search("SELECT * FROM `portfolio`");
                                        $n = $rs->num_rows;

                                        for ($x = 0; $x < $n; $x++) {
                                            $d = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $d["id"]; ?>"><?php echo $d["portfolio"]; ?></option>
                                        <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                    <input type="text" class="form-control" name="proj_name" id="proj_name" required placeholder="Enter Your Project Name" required>
                                </div>
                                </div>
                                    <div class="col-4">
                                    <input type="file" class="d-none" id="imageuploder" />
                                        <label type="button" for="imageuploder" onclick="changeProductimg();" class="btn btn-dark"><img src="assets/images/upload.png" style="width: 200px; height:180px;" id="i0" /></label>
                                    </div>


                            </center>
                            <div class=" form-btn text-center">
                                <button class="button" type="button" onclick="addProtfolio();">Add Protfolio</button>
                                <p class="form-message"></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <!-- ====== // Update Skiils ====== -->

            <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2024 <a href="https://www.begindot.com/">Designed by Delta Codex
                                Software Solutions</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.mixitup.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/fact.counter.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="main.js"></script>


    </body>

</html>
<!-- ====== // Header ====== -->
<?php
} else {
    header("location:adminSignin.php");
}
?>