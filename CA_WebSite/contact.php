<?php include('header.php');?>
<div class="container">
       <div class="row">
         <div class="col-xl-12 col-lg-12" style="height: 5vw;">
         </div>
       </div>
     </div>

<div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-7">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Contact</h2>
              </div>
              <div class="card-body">
                <form class="form-horizontal">
                  <fieldset class="container">
                    <div class="form-group row is-empty">
                      <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Name</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
                    </div>
                    <div class="form-group row is-empty">
                      <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-9">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
                    </div>
                    <div class="form-group row is-empty">
                      <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Subject</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="inputSubject" placeholder="Subject"> </div>
                    </div>
                    <div class="form-group row is-empty">
                      <label for="textArea" class="col-lg-2 control-label">Message</label>
                      <div class="col-lg-9">
                        <textarea class="form-control" rows="3" id="textArea" placeholder="Yout message..."></textarea>
                      </div>
                    </div>
                    <div class="form-group row justify-content-end">
                      <div class="col-lg-10">
                        <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-body">
                <div class="text-center mb-2">
                   <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span>
                  <h3 class="no-m ms-site-title">Cloud
                    <span>Age</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i>C2-18, 2nd Floor,Brahma Commercial Plaza,NIBM Junction</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i>Pune, MH 411048</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:support@cloudage.co.in">support@cloudage.co.in</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+91 8087 201 590</p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+14 155 238 886</p>
                </address>
              </div>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-map"></i>Map</h3>
              </div>
              
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79754.57038311737!2d73.82137903416503!3d18.5367873461954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea87873ad5a3%3A0x257629b74128d1f6!2sCloudAge+Big+Data!5e1!3m2!1sen!2sin!4v1543646479298" width="100%" height="235" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>



 <?php include('footer.php');?>