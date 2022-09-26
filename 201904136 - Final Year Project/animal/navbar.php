<?php
session_start();
?>

<div class="nav__area nav__transparent" data-spy="affix" data-offset-top="197">
    <div class="container nav__row">
        <!-- nav__logo-Start -->
        <div class="nav__logo">
            <!-- Text-Logo-Markup -->
            <!--<h2 class="nav__logo-text"><a href="#">Gority</a></h2>-->
            <!-- Image-Logo-Markup -->
            <!-- <a href="index-2.php" class="nav__logo-image logo__light"><img src="images/logo-light.png" alt="Gority"></a>
            <a href="index-2.php" class="nav__logo-image logo__dark"><img src="images/logo-dark.png" alt="Gority"></a> -->
            <a href="index.php" class="nav__logo-image logo__light"><span style="font-weight: 900;color: #fff;font-size: 30px;">Furry Palace</span></a>
            <a href="index.php" class="nav__logo-image logo__dark"><span style="font-weight: 900;color: #000;font-size: 30px;">Furry Palace</span></a>
        </div>
        <!--nav__logo-End-->
        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-function-line"></i>
        </div>
        <div class="nav__right" id="nav-right">
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
            <!-- nav__menu-Start -->
            <nav class="nav__menu" id="nav-menu">
                <ul class="nav">
                    <li class="current-menu-item"><a href="index.php">Home</a> </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a>
                    </li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="contact.php">
                            <?php
                            if (isset($_SESSION['name'])) {
                                echo "Welcome: " . $_SESSION["name"];
                            }
                            else 
                            {
                                // echo "<script> window. location = 'login.php'</script>";
                            }
                            ?>
                        </a>
                    </li>
                    <li>
                        <?php
                        if (isset($_SESSION['name'])) {
                            echo "<a href='logout.php'>Logout</a>";
                        } else {
                            echo "<a href='login.php'>LogIn</a>";
                        }
                        ?>
                    </li>
                    <!-- <li><a href="logout.php"><i class="fa fa-sign-out"></i></a></li> -->
                </ul>
            </nav>
            <!-- nav__menu-End -->


            <!-- Search-Form-Tigger-Button -->

            <!--Action-Button-->
            <a href="contact.php" class="primary__button">Appoinment</a>
        </div>
    </div>
</div>