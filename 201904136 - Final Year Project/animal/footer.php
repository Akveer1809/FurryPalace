<?php
include('config.php');

if (isset($_POST['email'])) {


    $email = $_POST['email'];
    echo $email;
   

    

    $sql = "INSERT INTO `Subscribe` (`Email`) VALUES ('$email');";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location:index.php');
        // echo 'Data Inserted';
    } else {
        echo "field to connect " . $con->error;
    }
    mysqli_free_result($result);
    mysqli_close($con);
}

?>

<footer class="footer__area section__relative">
    <div class="section__shape">
        <svg class="svg_element">
            <use xlink:href="#svg__element-9" />
        </svg>
    </div>
    <!--Footer_Bottom_Area-Start-->
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pr-lg-5">
                    <div class="footer__widget anim_top">
                        <h4 class="widget__title">About Us</h4>
                        <div class="desc mb-4">
                            <p>Pets need care and attention to keep them healthy, happy, and safe. They need healthy food; clean, fresh water; and a comfortable place to sleep. Most pets also require regular exercise to stay fit. It is important to find out all about an animal before deciding whether it will fit in well with you or your family.</p>
                        </div>
                        <div class="social__links">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer__widget anim_top">
                        <h4 class="widget__title">Explore</h4>
                        <ul class="nav-link">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <!-- <li><a href="#">Testimonial</a></li>
                            <li><a href="#">Expert Team</a></li> -->
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer__widget anim_top">
                        <h4 class="widget__title">Services</h4>
                        <ul class="nav-link">
                            <li><a href="#">Dog boarding</a></li>
                            <li><a href="#">Cat boarding</a></li>
                            <li><a href="#">Pet Grooming</a></li>
                            <li><a href="#">Pet Training</a></li>
                            <li><a href="#">Pet Taxi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 pl-lg-5">
                    <div class="footer__widget anim_top">
                        <h4 class="widget__title">Subscribe</h4>
                        <div class="desc pb-4">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui</p>
                        </div>
                        <form id="mc_form" class="subscribe__form" method="post">
                            <input type="email" id="mc-email" name="email" placeholder="E-mail Address">
                            <button type="submit"><i class="ri-mail-send-line"></i></button>
                            <label class="mt-3" for="mc-email"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer_Bottom_Area-End-->
    <!--Footer_Top_Area-Start-->
    <div class="footer__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="copyright text-center text-md-left mb-3 mb-md-0" style="text-align:center !important ;">Copyright &copy; 2022. All Rights Reserved By Furry Palace</div>
                </div>
                <!-- <div class="col-md-6 text-md-right text-center">
                    <div class="supported__cards">
                        <img src="images/credit-cards.png" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!--Footer_Top_Area-End-->
</footer>