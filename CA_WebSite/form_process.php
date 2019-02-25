<?php 
if(!isset($_POST['firstname'])){header("location: checkout.php");}
// Change the Merchant key here as provided by Payumoney
$MERCHANT_KEY = "rjQUPktU";

// Change the Merchant Salt as provided by Payumoney
$SALT = "e5iIg1jwi8";


  $firstname =$_POST['firstname'];
 $email =$_POST['email'];
 $phone =$_POST['phone'];
 $productinfo =$_POST['productinfo'];
 // $service_provider =$_POST['service_provider'];
 $amount =$_POST['amount'];
 $txnid =$_POST['txnid'];
 $productinfo =$_POST['productinfo'];
 $surl =$_POST['surl'];
 $furl =$_POST['furl'];
 

  //$ =$_POST[''];

  $hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
 $hash =strtolower(hash("sha512", $hashseq)); 
 

?>


<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from agmstudio.io/themes/material-style/2.3.3/home-landing3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Nov 2018 11:50:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Machine Learning | Analytics | Cloud-CloudAge | Payment Processing</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/preload.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.light-blue-500.min.css">
    <link rel="stylesheet" href="assets/css/width-boxed.min.css" id="ms-boxed" disabled="">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <script>
    function submitForm() {
      var postForm = document.forms.postForm;
      postForm.submit();
    }
</script>
  </head>
  <body onload="submitForm();">

<!-- Business sub menu popup-->
<div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">CloudAge</h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Register</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-key"></i> Recovery Pass</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                  <form autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Username</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                 
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                  <form>
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user-r">Username</label>
                          <input type="text" id="ms-form-user-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email-r">Email</label>
                          <input type="email" id="ms-form-email-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email-r">Contact Number</label>
                          <input type="email" id="ms-form-contact" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-r">Password</label>
                          <input type="password" id="ms-form-pass-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-rn">Re-type Password</label>
                          <input type="password" id="ms-form-pass-rn" class="form-control"> </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Register Now</button>
                    </fieldset>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <label class="control-label" for="ms-form-user-re">Username</label>
                        <input type="text" id="ms-form-user-re" class="form-control"> </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="ms-form-email-re">Email</label>
                        <input type="email" id="ms-form-email-re" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End business end -->
   <!-- student slider on popup-->
  <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="student-temp-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">Testimonials</h3>
              </div>
              <div class="modal-body">
                <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item">
                      <div class="carousel-caption">
                        <div class="container">
                          <div class="row">
                            
                            
                            <div class="col-lg-12">
                              <div class="card animated mb-4">
                                <blockquote class="blockquote blockquote-avatar withripple">
                                
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                                  <footer>Student Name, Designation.</footer>
                                </blockquote>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="carousel-caption">
                        <div class="container">
                          <div class="row">
                            
                            
                            <div class="col-lg-12">
                              <div class="card animated  mb-4">
                                <blockquote class="blockquote blockquote-avatar withripple">
                                  
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                                  <footer>Student Name, Designation.</footer>
                                </blockquote>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item active">
                      <div class="carousel-caption">
                        <div class="container">
                          <div class="row">
                            
                            
                            <div class="col-lg-12">
                              <div class="card animated  mb-4">
                                <blockquote class="blockquote blockquote-avatar withripple">
                                  
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                                  <footer>Student Name, Designation.</footer>
                                </blockquote>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!-- Controls -->
                    <a class="left carousel-control-prev btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
                      <i class="zmdi zmdi-arrow-left"></i>
                    </a>
                    <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
                      <i class="zmdi zmdi-arrow-right"></i>
                    </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--end student slider on popup-->

<!-- live webinar -->
<div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="web" tabindex="-1" role="dialog" aria-labelledby="web">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">CloudAge</h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link  withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Register</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-key"></i> Recovery Pass</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade  " id="ms-login-tab">
                  <form autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Username</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                 
                </div>
                <div role="tabpanel" class="tab-pane fade active show" id="ms-register-tab">
                  <form>
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user-r">Username</label>
                          <input type="text" id="ms-form-user-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email-r">Email</label>
                          <input type="email" id="ms-form-email-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email-r">Contact Number</label>
                          <input type="email" id="ms-form-contact" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-r">Password</label>
                          <input type="password" id="ms-form-pass-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-rn">Re-type Password</label>
                          <input type="password" id="ms-form-pass-rn" class="form-control"> </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Register Now</button>
                    </fieldset>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <label class="control-label" for="ms-form-user-re">Username</label>
                        <input type="text" id="ms-form-user-re" class="form-control"> </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="ms-form-email-re">Email</label>
                        <input type="email" id="ms-form-email-re" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- end live webinar -->

  <!--  Top 3 videos on DlS page-->

   <!-- For How Do We Guarantee Success? -->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="guarantee-success-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">How Do We Guarantee Success?</h3>
              </div>
              
            </div>
            <div class="modal-body">
             <video poster="assets/img/video.jpg" id="video-background"  controls  >
                <source src="assets/media/LandingVideo.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End How Do We Guarantee Success? -->

     <!-- For What Technology Should You Choose? -->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="technology-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">What Technology Should You Choose?</h3>
              </div>
              
            </div>
            <div class="modal-body">
             <video poster="assets/img/video.jpg" id="video-background"  controls  >
                <source src="assets/media/LandingVideo.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End What Technology Should you Choose? -->

    <!-- For Why IT Companies Preferred CloudAge? -->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="Preferred-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">Why IT Companies Preferred CloudAge?</h3>
              </div>
              
            </div>
            <div class="modal-body">
             <video poster="assets/img/video.jpg" id="video-background"  controls  >
                <source src="assets/media/LandingVideo.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Why IT Companies Preferred CloudAge? -->

  <!-- End Top 3 videos on DLS page -->
    <!--  <a href="javascript:void(0)" id="chat" class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand">
      <i class="fa fa-comments-o"></i>
    </a> -->
    <div id="ms-configurator" class="ms-configurator">
      <div class="ms-configurator-title">
       <!--  <h3>
          <i class="fa fa-gear"></i>Talk To Us</h3> -->
        <a href="javascript:void(0);" class="ms-conf-btn withripple">
          <i class="zmdi zmdi-close"></i>
        </a>
        <h3>
          <i class="fa fa-gear"></i> CloudAge Support</h3>      </div>
<div class="frame">
  <div class="frame-box">
            <ul><li style="width:100%"><div class="msj macro"><div class="avatar"><img class="img-circle" style="width:100%;" src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"></div><div class="text text-l"><p>Hello Tom...</p><p><small>4:08 PM</small></p></div></div></li><li style="width:100%;"><div class="msj-rta macro"><div class="text text-r"><p>Hi, Pablo</p><p><small>4:08 PM</small></p></div><div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"></div></div></li><li style="width:100%"><div class="msj macro"><div class="avatar"><img class="img-circle" style="width:100%;" src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"></div><div class="text text-l"><p>What would you like to talk about today?</p><p><small>4:08 PM</small></p></div></div></li><li style="width:100%;"><div class="msj-rta macro"><div class="text text-r"><p>Tell me a joke</p><p><small>4:08 PM</small></p></div><div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"></div></div></li><li style="width:100%"><div class="msj macro"><div class="avatar"><img class="img-circle" style="width:100%;" src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"></div><div class="text text-l"><p>Spaceman: Computer! Computer! Do we bring battery?!</p><p><small>4:08 PM</small></p></div></div></li><li style="width:100%;"><div class="msj-rta macro"><div class="text text-r"><p>LOL</p><p><small>4:08 PM</small></p></div><div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"></div></div></li></ul></div>
            <div>
                <div class="msj-rta macro" style="margin:auto">                        
                    <div class="text text-r" style="background:whitesmoke !important">
                        <input class="mytext" placeholder="Type a message">
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container ms-nav-fixed">
      <nav class="navbar navbar-expand-md navbar-fixed ms-lead-navbar navbar-mode navbar-mode mb-0" id="navbar-lead">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
              <img src="assets/img/logo.png" width="80px" style="position: absolute;top: 0;">
                <p class="sub-text"><i>We Make All Data Work</i></p>
              </span>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right dls-menu">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Futuristic Technologies </a>
                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                  <li class="container">
                    <div class="row">
                      <div class="col-sm-4 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-lightbulb-o"></i>Machine Learning</h3>
                          
                                <ul >
                                  <li>
                                      <a href="aws_ml.php" class="dropdown-item ">AWS ML</a>
                                  </li>
                                  <li>
                                      <a href="azure_ml.php" class=" dropdown-item">Azure ML</a>
                                  </li>
                                  <li>
                                      <a href="gcp_ml.php" class=" dropdown-item">GCP ML</a>
                                  </li>
                                </ul>
                            
                        </div>
                       
                      </div>
                      <div class="col-sm-4 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-cubes"></i> Platform as a service</h3>
                            <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="">Hadoop As A Service</a>
                                <ul>
                                  <li>
                                     <a class="dropdown-item" href="emr.php">EMR</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="hdin.php">HDinsight</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="bigq.php">BigQuery</a>
                                  </li>
                                </ul>
                            </li>
                            <li>
                              <a class="withripple" href="">Data As A Service</a>
                                <ul>
                                  <li>
                                     <a class="dropdown-item" href="pgDaaSApacheSpark.php">Apache Spark</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="pgDaaSDatabricks.php">Databricks</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="pgDaaSH2O.php">H2O.ai</a>
                                  </li>
                                </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-4 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="zmdi zmdi-cloud"></i> Cloud  Computing</h3>
                          <ul class="megamenu-block-list">
                              <li>
                                <a href="aws.php" class="dropdown-item ">AWS(Amazon)</a>
                              </li>
                              <li>
                                <a href="azure.php" class=" dropdown-item">Azure(Microsoft)</a>
                              </li>
                              <li>
                                <a href="gcp.php" class=" dropdown-item">GCP(Google)</a>
                              </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a  href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Business Solution</a>
                <ul class="dropdown-menu ">
                    <li>
                    <a href="javascript:void(0)" class="no-focus animated zoomInDown animation-delay-8 dropdown-item" data-toggle="modal" data-target="#ms-account-modal">HR Services</a>
                     </li>
                  <li >
                     <a href="javascript:void(0)" class=" no-focus animated zoomInDown animation-delay-8 dropdown-item" data-toggle="modal" data-target="#ms-account-modal">University Services</a>
                 </li>
                  <li>
                     <a href="javascript:void(0)" class="no-focus animated zoomInDown animation-delay-8 dropdown-item" data-toggle="modal" data-target="#ms-account-modal">Consultancy Services</a>
                  </li>
                  <li>
                    <a href="digital-learning-services.php" class=" dropdown-item">Digital Learning Services</a>
                </li>
               </ul>
              </li>
              
            </ul>
          </div>
          <!-- Mobile  and ipad menu -->
          <a href="javascript:void(0)" class="ms-toggle-left  ">
            <i class="zmdi zmdi-menu mob-menu"></i>
          <div class="ripple-container"></div></a>
          <!-- End mobile and ipad menu -->
          <!-- navbar-collapse collapse -->
          <div class="timer-modal" data-toggle="tooltip" data-template="<div class=&quot;tooltip tooltip-warning&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner&quot;></div></div>" data-placement="top" title="" data-original-title="Register For Live Webinar">
          <a href="javascript:void(0)"  data-toggle="modal" data-target="#web" class=" btn-navbar-menu" >
            <i class="zmdi zmdi-time" style="
    position: absolute;"></i>
    <a href="javascript:void(0)"  data-toggle="modal" data-target="#web"><p id="timer"></p></a>
          </a>
        </div>
        </div>
        <!-- container -->
      </nav>
<div class="intro-full ms-hero-img-city2 ms-hero-bg-primary color-white" id="home">
     <div id="intro-video" class="plyr__video-embed">
           <video autoplay muted loop id="myVideo">
              <source src="assets/media/3-vp9.webm" type="video/webm">
             </video>
        </div>
        <div class="intro-full-content index-1">
      <div class="container success-text" >
        <!--<h2>Payment Success</h2>-->
        <div class="card card-info" style="background: transparent;padding: 20px;">
<h2>Payment Gateway Testing Sample</h2>
<table>
<tr><td style="color:#29b6f6">Transaction Id : </td><td style="color:#29b6f6"><strong><?php echo $_POST['txnid']; ?></strong></td><br><td style="color:#29b6f6">Amount : </td><td style="color:#29b6f6"><strong>Rs. <?php echo $_POST['amount']; ?></strong></td>
</table>
<div >
<p>In this page we will genrate hash and send it to payumoney.</p>
<br>
<p>Please be patient. this process might take some time,<br />please do not hit refresh or browser back button or close this window</p>
</div>
</div>
        <div>
  <form name="postForm" action="https://test.payu.in/_payment" method="POST" >
    <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
    <input type="hidden" name="hash" value="<?php echo $hash;  ?>"/>
    <input type="hidden" name="txnid" value="<?php echo $_POST['txnid'];  ?>" />
    <input type="hidden" name="amount" value="<?php echo $_POST['amount'];  ?>" />
    <input type="hidden" name="firstname" value="<?php echo $_POST['firstname'];  ?>" />
    <input type="hidden" name="email" value="<?php echo $_POST['email'];  ?>" />
    <input type="hidden" name="phone" value="<?php echo $_POST['phone'];  ?>" />
    <input type="hidden" name="productinfo" value="<?php echo $_POST['productinfo'];  ?>" />
    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
    <input type="hidden" name="surl" value="<?php echo $_POST['surl'];  ?>" />
    <input type="hidden" name="furl" value="<?php echo $_POST['furl'];  ?>" />
  </form>
</div>
            </div>
        </div>
</div>
<aside class="ms-footbar dls-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li>
                    <a href="index.php">
                      <i class="zmdi zmdi-home"></i> Home</a>
                  </li>
                  <li>
                    <a href="ml&ai.php">
                      <i class="fa fa-lightbulb-o"></i> ML & Hadoop</a>
                  </li>
                  <li>
                    <a href="hass-dass.php">
                      <i class="zmdi zmdi-image-o"></i> PaaS</a>
                  </li>
                  <li>
                    <a href="cloud-computing.php">
                      <i class="zmdi zmdi-cloud-outline-alt"></i> Cloud</a>
                  </li>
                  <li>
                    <a href="business-solution.php">
                      <i class="zmdi zmdi-case"></i> Business </a>
                  </li>
                  <li>
                   <a href="contact.php">
                     <i class="zmdi zmdi-calendar-account"></i>Contact</a>
                 </li>                 
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribe</h3>
                <p class="">Subscribe to our newsletter and get notified about our newest projects and promotions.</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Email Address</label>
                      <input type="email" id="ms-subscribe" class="form-control"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Upcoming Webinar</h3>
                <div class="ms-footer-media">
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/online.png" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Present to hundreds with confidence and attend a webinar from anywhere.</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2019</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Online</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/onsite.png" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Training either on-site or via webinar is customized for each client upon a review of features.</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2018</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">On-Site</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/ondemand.png" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Get immediate access to all of Marketo's on-demand webinars for marketers.</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2018</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">On-Demand</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                 <img src="assets/img/logo_org.png" style="width: 80%">
                </div>
                <address class="no-mb">
                  <p>
                    <a href="https://goo.gl/maps/XVqxZxbwtvp" target="_blank"><i class="color-danger-light zmdi zmdi-pin mr-1"></i></a>C2-18, 2nd Floor,Brahma Commercial Plaza,<br />NIBM Junction
                    
                  </p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> Pune, MH 411048</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:support@cloudage.co.in">support@cloudage.co.in</a>
                  </p>
                  <p>
                   <a href="tel:+918087201590"> <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+91 8087 201 590</a></p>
                  <p>
                    
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                  <a href="#" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="#" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="#" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube-play"></i>
                  </a>
                  <br>
                  <a href="#" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a> 
                  <a href="https://api.whatsapp.com/send?phone=14155238886&text=I%27m%20interested%20in%20your%20course&source=&data=" target="_blank" class="btn-circle btn-whatsapp">
                    <i class="zmdi zmdi-whatsapp"></i>
                  </a>
                  <a href="#" class="btn-circle btn-github">
                    <i class="zmdi zmdi-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; CloudAge 2018</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a class="withripple log_in" href="javascript:void(0)" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i> Login</a>
            <!-- <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account-add"></i> Register</a> -->
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" onkeyup="myFunction()"/>
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm"><img src="assets/img/logo.png" style="width:80%"></span>
              <h3>CloudAge</h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li class="card" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="fa fa-lightbulb-o"></i> Futuristic Technology </a>
            <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1" data-parent="#slidebar-menu">
              <!-- AI -->
              <li>
                <a class="withripple" href="">ARTIFICIAL INTELLIGENCE</a>
                <ul>
                  <li>
                    <a class="withripple" href="">Machine Learning</a>
                    <ul >
                                  <li>
                                      <a href="aws_ml.php" class="dropdown-item ">AWS ML</a>
                                  </li>
                                  <li>
                                      <a href="azure_ml.php" class=" dropdown-item">Azure ML</a>
                                  </li>
                                  <li>
                                      <a href="gcp_ml.php" class=" dropdown-item">GCP ML</a>
                                  </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- pass -->
              <li>
                <a class="withripple" href="">Platform as a service</a>
                <ul>
                  <li>
                              <a class="withripple" href="">Hadoop As A Service</a>
                                <ul>
                                  <li>
                                     <a class="dropdown-item" href="emr.php">EMR</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="hdin.php">HDinsight</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="bigq.php">BigQuery</a>
                                  </li>
                                </ul>
                            </li>
                            <li>
                              <a class="withripple" href="">Data As A Service</a>
                                <ul>
                                  <li>
                                     <a class="dropdown-item" href="pgDaaSApacheSpark.php">Apache Spark</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="pgDaaSDatabricks.php">Databricks</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="pgDaaSH2O.php">H2O.ai</a>
                                  </li>
                                </ul>
                            </li>
                </ul>
              </li>
              <!-- cloud COMPUTING -->
              <li>
                <a class="withripple" href="">Cloud  Computing</a>
                <ul>
                  <li>
                                <a href="aws.php" class="dropdown-item ">AWS(Amazon)</a>
                              </li>
                              <li>
                                <a href="azure.php" class=" dropdown-item">Azure(Microsoft)</a>
                              </li>
                              <li>
                                <a href="gcp.php" class=" dropdown-item">GCP(Google)</a>
                              </li>
                </ul>
              </li>
            </ul>
          </li>
          
          <li class="card" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="zmdi zmdi-case"></i>Business Solution</a>
            <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#slidebar-menu">
              <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#ms-account-modal">HR Services</a>
              </li>
              <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#ms-account-modal">University Services</a>
              </li>
              <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#ms-account-modal">Consultancy Services</a>
              </li>
              <li>
                <a href="digital-learning-services.php">Digital Learning Services</a>
              </li>
              
            </ul>
          </li>
         
        </ul> 
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="#" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge-pill badge-pill-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="#" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge-pill badge-pill-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="#" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="https://api.whatsapp.com/send?phone=14155238886&text=I%27m%20interested%20in%20your%20course&source=&data=" target="_blank" class="btn-circle btn-circle-raised btn-whatsapp">
              <i class="zmdi zmdi-whatsapp"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!--<script src="assets/js/configurator.min.js"></script>-->
    
    <script src="assets/js/index.js"></script>
  </body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.3.3/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Nov 2018 11:48:07 GMT -->
</html>
