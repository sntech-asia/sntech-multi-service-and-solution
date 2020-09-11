<?php
include('./db_connnection.php');
$result = mysqli_query($conn,"SELECT * FROM services");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Multi service solutions</title>
    <meta charset="UTF-8">
    <meta name="description" content="Cloud 83 - hosting template ">
    <meta name="keywords" content="cloud, hosting, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height :2%;
            background-color: dodgerblue;
            color: white;
            text-align: match-parent;
        }
    </style>
</head>
<body>

    <section class="features-section spad">
        <div class="container">
            <div class="section-title">
                <img src="./img/section-title-icon.png" alt="#">
                <label for="sn_thebest">The best out there</label>
               
                <h2>See our Services</h2>
            </div>
            <?php
            if (mysqli_num_rows($result) > 0) {
            }
             ?>
            <div class="row">
            <?php
                  $i=0;
                 while($row = mysqli_fetch_array($result)) {?>
                  <div class="col-lg-4 col-md-6 feature-item">
                    <a>
                        <div class="ft-icon">
                            <?php
                              echo $row['image'];?>
                 </div>
                 </a>                                   
                <p>  
                <?php
                     echo "<h4>".$row["title"]."</h4>";
                 
                 ?>                
                    <ul>
                        <?php echo $row["service"];?>
                    </ul>
                </p>
                </div>
                 <?php } ?>
         </div>
        </div>
    </section>

    <section class="skills-and-testimonials-section spad">
    <?php
                 if (mysqli_num_rows($result) > 0) {
                    $result = mysqli_query($conn,"SELECT * FROM progress");
                  }
                
                  ?>
        <div class="container">
            <div class="row">
                <!-- Skills -->
                <div class="col-lg-6">
                <?php
                  $i=0;
                   while($row = mysqli_fetch_array($result)) {?>
                             
                    <div class="single-progress-item">
                        <p><?php echo $row['progress_title'];?></p>
                        <div class="progress-bar-style" data-progress="<?php echo $row['progress_per'];?>" data-bgcolor="#eb2b63"></div>             
                </div>
                <?php } ?> 
                   </div> 
            
                <!-- Testimonials -->
                <div class="col-lg-6">
                    <div class="testimonials-slider owl-carousel">
                        <div class="testimonial-item">
                            <div class="ti-content">
                                <p>Too good service very fast in process cost effective and highly efficient</p>
                            </div>
                            <div class="ti-author-pic set-bg" data-setbg="./img/review/1.jpg"></div>
                            <div class="ti-author">
                                <h6>Sudip Acharya</h6>
                                <span>Client</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="ti-content">
                                <p>“I have always found Multi Service Solution's technicians to be professional,responsive,trustworthy  and knowledgeable.  Most important to me, they possess excellent communication skills.”</p>
                            </div>
                            <div class="ti-author-pic set-bg" data-setbg="./img/review/2.jpg"></div>
                            <div class="ti-author">
                                <h6>Bibek Dawadi</h6>
                                <span>Client</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
                   </div>
    </section>
    <section class="faq-section spad">
        <div class="container">
            <div class="section-title">
                <img src="./img/section-title-icon.png" alt="#">
                <p>The best out there</p>
                <h2>Special Offer</h2>
            </div>

            <?php
                    if (mysqli_num_rows($result) > 0) {
                    }
                    $result=mysqli_query($conn,"SELECT *FROM specialoffer");
             ?>         
            <?php 
             $i=0;
            while($row = mysqli_fetch_array($result)) {?>
            <div id="accordion" class="accordion-area faq-accordion">
                <div class="panel">
                    <div class="panel-header" id="headingOne">
                        <button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><?php echo $row['offertype'];?></button>
                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <?php
                                         echo "<h4>".$row["titleoffer"]."</h4>";               
                                        ?>         
                                            <p name="sntech_des"><?php echo $row['description'];?> </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="./img/cctv.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>          
    </section>

    <!-- Skills & testimonials section end -->
    <!--
    <section class="footer-top-section text-white spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <h3>SOCIALIZE WITH US</h3>
                        <hr />
                        <p><p><p>We hope so because we believe that relationships matter and you should like to get to know us better.</p></p></p>
                        <div class="fw-social social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <h3>GET IN TOUCH</h3>
                        <hr />
                        <p>
                            Multi Service Solution
                        </p>
                        <div class="row">
                            <div class="col-lg-4">
                                <ul>
                                    <li><a class="fa fa-map-marker" href=""> &nbsp;&nbsp; Bharatpur-28</a></li>
                                    <li><a class="fa fa-phone" href=""></a></li>
                                    <li><a class="fa fa-envelope" href=""></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6">
                    <div class="footer-widget">
                        <h3>ABOUT US</h3>
                        <hr />
                        <p><p><p>We hope so because we believe that relationships matter and you should like to get to know us better.</p></p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>   Footer top section -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
