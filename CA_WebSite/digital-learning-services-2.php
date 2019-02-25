<?php include('header-2.php');
$conn = mysqli_connect("localhost","root","","cloudage");
// mysqli_select_db("$conn","cloudage");

if(isset($_POST["product-submit"])){
  // echo '<h1 class="test">test</h1>';
  $d = 0;
  if(is_array($_COOKIE['item'])){
    foreach($_COOKIE['item'] as $name => $value){
      $d = $d + 1;
    }
    $d = $d +1;
  }else{
    $d = $d +1;
  }

  $res3 = mysqli_query($conn,"select * from product where id=$id");
  while($row3=mysqli_fetch_array($res3)){
    $pname = $product_name;
  }
}
?>
      <div class="intro-full ms-hero-img-city2 ms-hero-bg-primary color-white" id="home">
        <div id="intro-video" class="plyr__video-embed">
           <video autoplay muted loop id="myVideo">
              <source src="assets/media/3-vp9.webm" type="video/webm">
             </video>
        </div>
        <div class="intro-full-content index-1">
                <div class="container">
                  <div class="text-center mb-4">
                     <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Digital Learning Services
                    </h1>
                    <p class="lead lead-lg color-white text-center center-block mt-2 mw-800  fw-300 animated fadeInUp animation-delay-7 p-head" style="font-style: italic;">" We Train
                      IT Teams For The Future Technologies "</p>
                  </div>
                  <!-- 3 video box start -->
                    <div class="container mt-6">
                      <div class="col-lg-12">
                                  <div class="row masonry-container vbox" style="position: relative; height: 303.781px;">
                                    <!-- How Do We Guarantee Success -->
                                    <?php
                                      $sql = "SELECT * FROM product";
                                      $result = $conn->query($sql);

                                      if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                    ?>
                                        
                                      <div class="col-md-4 masonry-item wow   animated animated" style="visibility: visible; position: absolute; left: 0px; top: 0px;">
                                      <article class="card card-info mb-4 wow  animated animated" style="visibility: visible;">
                                        <div class="card-body ">
                                          <form name="product-form" method="post" action="">
                                          <figure class="ms-thumbnail ms-thumbnail-left">
                                            <video poster="<?php echo $row["product_img"];?>" id="video-background" width="400" controls="" style="position: relative;
                                            top: -5px;">
                                            <source src="<?php echo $row['product_video'];?>" type="video/mp4">
                                            </video>
                                            <figcaption class="ms-thumbnail-caption text-center">
                                              <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title"><?php echo $row["product_name"];?></h3>
                                                
                                                <div class="mt-2">
                                                  <a href="<?php echo $row["product_pdf"];?>" title="Download pdf" download="" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger tooltips">
                                                    <i class="zmdi zmdi-download"></i>
                                                    <span style=" visibility: hidden;">Download pdf</span>
                                                  </a>

                                                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#guarantee-success-modal">
                                                    <i class="zmdi zmdi-play" title="Play Video"></i>
                                                  </a>
                                                  <button type="submit" name="product-submit"  title="Make My Career "class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" >
                                                    <i class="zmdi zmdi-shopping-cart" ></i>
                                                  </button >
                                                  
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                          </form>
                                        </div>
                                      </article>
                                      
                                    </div>

                                    <?php    }
}
                                    ?>


                                    

                                    <!-- What Technology Should You Choose? -->
                                    <!-- <div class="col-md-4 masonry-item wow  animated animated animated" style="visibility: visible; position: absolute; left: 370px; top: 0px;">
                                      <article class="card card-info mb-4 wow   animated animated" style="visibility: visible;">
                                        
                                        <div class="card-body ">
                                          
                                          <figure class="ms-thumbnail ms-thumbnail-left">
                                          <video poster="assets/img/video.jpg" id="video-background" width="400" controls="" style="position: relative;
                                          top: -5px;">
                                          <source src="assets/media/LandingVideo.mp4" type="video/mp4">
                                        </video>
                                          <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                              <h3 class="ms-thumbnail-caption-title">What Technology Should You Choose?</h3>
                                              
                                              <div class="mt-2">
                                                <a href="assets/pdf/CloudAge.pdf" download="" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger tooltips">
                                                  <i class="zmdi zmdi-download"></i>
                                                  <span style=" visibility: hidden;">Download pdf</span>
                                                </a>

                                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#technology-modal">
                                                  <i class="zmdi zmdi-play" title="Play Video"></i>
                                                </a>
                                                <a href="checkout.php" title="Make My Career "class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" >
                                                  <i class="zmdi zmdi-shopping-cart" ></i>
                                                </a>
                                              </div>
                                            </div>
                                          </figcaption>
                                        </figure>
                                       
                                        </div>
                                      </article>
                                    </div> -->
                                    <!-- Why IT Companies Prefer CloudAge? -->
                                    <!-- <div class="col-md-4 masonry-item wow   animated animated" style="visibility: visible; position: absolute; left: 740px; top: 0px;">
                                      <article class="card card-info mb-4 wow   animated animated" style="visibility: visible;">
                                        
                                        <div class="card-body ">
                                         
                                         <figure class="ms-thumbnail ms-thumbnail-left">
                                          <video poster="assets/img/video.jpg" id="video-background" width="400" controls="" style="position: relative;
                                          top: -5px;">
                                          <source src="assets/media/LandingVideo.mp4" type="video/mp4">
                                        </video>
                                          <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                              <h3 class="ms-thumbnail-caption-title">Why IT Companies Prefer CloudAge?</h3>
                                              
                                              <div class="mt-2">
                                                <a href="assets/pdf/CloudAge.pdf" download="" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger tooltips">
                                                  <i class="zmdi zmdi-download"></i>
                                                  <span style=" visibility: hidden;">Download pdf</span>
                                                </a>

                                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#Preferred-modal">
                                                  <i class="zmdi zmdi-play" title="Play Video"></i>
                                                </a>
                                                <a href="checkout.php" title="Make My Career "class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" >
                                                  <i class="zmdi zmdi-shopping-cart" ></i>
                                                </a>
                                              </div>
                                            </div>
                                          </figcaption>
                                        </figure>
                                        
                                        </div>
                                      </article>
                                    </div> -->
                                  </div>
                      </div>
                    </div>
                  <!-- 3 video box -->
                            <!-- <div class="text-center mb-2">
                              <a id="go-intro-full-next" href="#vbox" class="btn-circle btn-circle-raised btn-circle-white animated zoomInUp animation-delay-12">
                                <i class="zmdi zmdi-long-arrow-down"></i>
                              </a>
                            </div> -->
                </div>
        </div>
      </div>

    
      <!-- middle body content -->
      <div class="bg-light index-1 intro-full-next">
        <section id="services" class="">
          <div class="wrap ms-hero-img-meeting ms-hero-bg-info color-white ms-bg-fixed">
             <!-- start 3 services -->
              <div class="container mt-6">
               <div class="row dls">
                  <div class="col-lg-12">
                    <h2 style="text-align: center;position: relative;bottom: 15px;color: #fff;">Our Success Guaranteed Programs</h2>
                    <div class="row masonry-container sbox" style="position: relative; height: 503px;">
                      <?php
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>      
<div class="col-md-4 masonry-item wow fadeInUp animation-delay-2" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 760px; top: 0px;">
                        <article class="card card-info mb-4 wow materialUp animation-delay-5" style="visibility: visible; animation-name: materialUp;">

<div class="card-body big">
<h2>Big Data on Hadoop</h2>
  <p style="color: #757575;"><?php echo $row["product_desc"];?>.... <a href="<?php echo $row["product_text_pdf"];?>" download="">Download our Documented Proof</a></p>
  <figure class="ms-thumbnail ms-thumbnail-left">
  <video poster="<?php echo $row["product_img"];?>" id="video-background" width="400" controls="" style="position: relative;top: -5px;">
    <source src="<?php echo $row['product_video'];?>" type="video/mp4">
  </video>
  <figcaption class="ms-thumbnail-caption text-center">
    <div class="ms-thumbnail-caption-content">
      <h3 class="ms-thumbnail-caption-title"><?php echo $row["product_name"];?></h3>
        <div class="mt-2">
          <a href="<?php echo $row["product_pdf"];?>" download="" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger tooltips">
          <i class="zmdi zmdi-download"></i>
          <span style=" visibility: hidden;">Download pdf</span>
          </a>
          <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#ms-newdata-modal">
            <i class="zmdi zmdi-play" title="Play Video"></i>
          </a>
          <a href="checkout.php" title="Make My Career " class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
            <i class="zmdi zmdi-shopping-cart"></i>
          </a>
        </div>
      </div>
  </figcaption>
</figure>
</div>
</article>
                      </div>
<?php
}
}
?>

                        
                    </div>
                  </div>
                </div>
              </div>
    
          <!-- end 3 services -->
          <!-- logo start -->
            <div class="container mt-6 dls-logo">
              <h2 class="text-center  mb-4" style="color:#fff">Testimonials</h2>
              <div class="container">
                <div class="card card-flat bg-transparent">
                  <div class="row">
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          
                            <img src="assets/img/logo/infosys.png" alt="Infosys">
                          
                          <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo cmp-img  animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          
                            <img src="assets/img/logo/persistent.png" alt="Persistent">
                          
                          <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-success wow info-logo cmp-img animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/Reliance-Jio-Logo.png" alt="Reliance Jio">
                          
                          <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-primary wow info-logo cmp-img animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/cognizant.png" alt="cognizant">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-danger wow info-logo cmp-img animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center  ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                         <img src="assets/img/logo/Cybage.png" alt="Cybage">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-info wow info-logo cmp-img animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/logo/Synechron.png" alt="Synechron">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/logo/Lenovo-Logo.png" alt="Lenovo">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo cmp-img animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/logo/RelianceIndustries.png" alt="Reliance Industries">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-success wow info-logo cmp-img animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/logo/suez.png" alt="suez clients &amp; appatura">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-primary wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/logo/hortonworks.png" alt="Hortonworks">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-danger wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/hcl.png" alt="HCL">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-info wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/Eclerx.png" alt="Eclerx Services">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center  ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/ZensarTechnologies.png" alt="Zensar Technologies">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/tcs.png" alt="TCS">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-success wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/capgemini.png" alt="Capgemini">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-primary wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                            <img src="assets/img/logo/LTI_Lets_solve.png" alt="LTI Infotech">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-danger wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/Accenture.png" alt="Accenture">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center bg-warnin">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/ibm.png" alt="IBM">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                      </figure>
                        </div>
                        
                      </div>
                    </div>  
                  </div>
                  <!-- extra logos -->
                  <div class="row">
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/TechData.png" alt="TechData">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              <div class="mt-2">
                               <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                         </figure>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/Teradata.png" alt="Teradata">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-success wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/centurySoft.png" alt="century Soft">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-primary wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/clairvoyant.png" alt="Clairvoyant">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-danger wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/kogentix.png" alt="Kogentix">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-info wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <a href="javascript:void(0)" class="no-focus animated zoomInDown animation-delay-8 dropdown-item" data-toggle="modal" data-target="#student-temp-modal">
                            <img src="assets/img/logo/DataMetica.png" alt="Data Metica">
                          </a>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/cubex.png" alt="Cubex">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/logo/techberry.png" alt="Techberry">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-success wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/buisness.png" alt="Buisness">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-primary wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                            <img src="assets/img/logo/dcengines.png" alt="DC engines">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-danger wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                         <img src="assets/img/logo/figmd.png" alt="Figmd">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-info wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/phdata.png" alt="Ph Data">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                            <img src="assets/img/logo/resilinc.png" alt="Resilinc">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/harman.png" alt="Harman">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-success wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/Quantiphi.png" alt="Quantiphi">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-primary wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/parkar.png" alt="Parkar consulting &amp; lab">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                                </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-danger wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/IDC-vector.png" alt="IDC Vector">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                            </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center bg-warnin">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                           <img src="assets/img/logo/techwave.png" alt="Techwave">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>  
                  </div>
                  <!-- end exreat logo -->
                  <!-- 2nd roe extra logo -->
                  <div class="row">
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-warning wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/indium.png" alt="Indium">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                    <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/niit.png" alt="NIIT">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-success wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/saama.png" alt="Saama Technologies">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-primary wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/ecloudeaon.png" alt="Ecloudeaon">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-danger wow info-logo cmp-img animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                         <figure class="ms-thumbnail ms-thumbnail-left">
                          <img src="assets/img/logo/opus.png" alt="opus">
                           <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                              <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                              
                              <div class="mt-2">
                                

                                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                  <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                </a>
                              </div>
                            </div>
                          </figcaption>
                          </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo animated animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                                       <img src="assets/img/logo/etisalat.png" alt="Etisalat">
                                         <figcaption class="ms-thumbnail-caption text-center">
                                          <div class="ms-thumbnail-caption-content">
                                            <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                                            
                                            <div class="mt-2">
                                              

                                              <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                                <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                              </a>
                                            </div>
                                          </div>
                                        </figcaption>
                            </figure>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!-- end 2nd row extra logo -->
                  <!-- 3rd row  -->
                  <div class="row">
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo animated animated animated" style="visibility: hidden; animation-name: none;">
                        <div class="text-center ">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                                       <img src="assets/img/logo/schlumberger.png" alt="Schlumberger">
                                         <figcaption class="ms-thumbnail-caption text-center">
                                          <div class="ms-thumbnail-caption-content">
                                            <h3 class="ms-thumbnail-caption-title">Testimonials</h3>
                                            <div class="mt-2">
                                             <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger" data-toggle="modal" data-target="#student-temp-modal">
                                                <i class="zmdi zmdi-comments" title="Testinonials "></i>
                                              </a>
                                            </div>
                                          </div>
                                        </figcaption>
                            </figure>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card card-royal wow info-logo animated animated animated" style="visibility: visible;">
                        <div class="text-center ">
                          <figure class="ms-thumbnail ms-thumbnail-left">
                            <a href="javascript:void(0)" class="no-focus  zoomInDown animation-delay-8 dropdown-item" data-toggle="modal" data-target="#student-temp-modal">
                                                                      <h2 style="padding: 37px;color: #03a9f4;">More +</h2>
                            </a>
                          </figure>
                        </div>
                       </div>
                     </div>
                  </div>
                  <!-- end 3rd row  -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- end middle body content -->

      <!-- Up arrow -->
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
      <!-- end Up arrow -->
       <!-- Footer -->
    <?php include('footer-2.php'); ?>