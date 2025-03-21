<!DOCTYPE html>
<html lang="en">

<?php include("header.php") ?>
<?php
require "connection.php";
?>

    <!-- ====== Portfolio Section ====== -->
    <section id="recent" class="section-padding pb-85 portfolio-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2 style="color: #fff;">Figma Designing</h2>
                        <h5 style="color: #F5BD02;">We are willing to design Software project interfaces graphically with using the trending technology</h5>
                        <span style="color: #fff;">Feel free to check them below</span>
                    </div>
                </div>
            </div>

            <div class="row portfolio">
                <!-- Single Portfolio -->
                <?php
                $yt_rs = Database::search("SELECT * FROM images INNER JOIN portfolio ON images.portfolio_id = portfolio.id WHERE images.portfolio_id = 6 ORDER BY RAND()");
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

<!-- ====== //Hero Area ====== -->
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
<script src="main.js"></script>
</body>