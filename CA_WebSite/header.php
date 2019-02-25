<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from agmstudio.io/themes/material-style/2.3.3/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Nov 2018 11:45:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="en-us">
    <meta http-equiv="content-type" content="text/HTML">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Machine Learning Analytics Cloud-CloudAge">
    <meta name="keyword" content="Machine Learning ,Analytics, Cloud-CloudAge,Big Data,Hadoop,Iot,Artificial Intelligence, Internet of Things">
    <meta name="author" content="cloudage.co.in">
    <meta name="copyright" content="copyright 2013 cloudage.co.in">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Machine Learning | Analytics | Cloud-CloudAge</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/preload.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.light-blue-500.min.css">
    <link rel="stylesheet" href="assets/css/width-boxed.min.css" id="ms-boxed" disabled="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/botui/build/botui-theme-default.css" />
    <link rel="stylesheet" href="https://unpkg.com/botui/build/botui.min.css" />
    <link href="http://vjs.zencdn.net/4.6/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/4.6/video.js"></script>
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- for skulpt  -->
    
<!-- Create a simple CodeMirror instance -->
<!-- <link rel="stylesheet" href="https://codemirror.net/lib/codemirror.css">
<script src="https://codemirror.net/lib/codemirror.js"></script> -->


<script src="http://www.skulpt.org/static/skulpt.min.js" type="text/javascript"></script> 
<script src="http://www.skulpt.org/static/skulpt-stdlib.js" type="text/javascript"></script> 


<script type="text/javascript">
function outf(text) {
   var mypre = document.getElementById("output");
   mypre.innerHTML = mypre.innerHTML + text;
}

function builtinRead(x)
{
    if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined)
        throw "File not found: '" + x + "'";
    return Sk.builtinFiles["files"][x];
}

function runit() {
   var prog = document.getElementById("yourcode").value;
   var mypre = document.getElementById("output");
   mypre.innerHTML = '';
   Sk.configure({output:outf,
           read: builtinRead
              });
   try {
      Sk.importMainWithBody("<stdin>",false,prog);
   } catch (e) {
      alert(e);
   }
}
</script>

</head>
  <body>
   
    <a href="javascript:void(0)" id="chat" class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand">
      <i class="fa fa-comments-o"></i>
    </a>
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
              <iframe src="http://18.216.236.253:5001/"></iframe>

                      <!-- <ul>
                        <li style="width:100%"><div class="msj macro"><div class="avatar"><img class="img-circle" style="width:100%;" src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"></div><div class="text text-l"><p>Hello Tom...</p><p><small>3:54 PM</small></p></div></div></li><li style="width:100%;"><div class="msj-rta macro"><div class="text text-r"><p>Hi, Pablo</p><p><small>3:54 PM</small></p></div><div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"></div></div></li><li style="width:100%"><div class="msj macro"><div class="avatar"><img class="img-circle" style="width:100%;" src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"></div><div class="text text-l"><p>What would you like to talk about today?</p><p><small>3:54 PM</small></p></div></div></li><li style="width:100%;"><div class="msj-rta macro"><div class="text text-r"><p>Tell me a joke</p><p><small>3:54 PM</small></p></div><div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"></div></div></li><li style="width:100%"><div class="msj macro"><div class="avatar"><img class="img-circle" style="width:100%;" src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"></div><div class="text text-l"><p>Spaceman: Computer! Computer! Do we bring battery?!</p><p><small>3:54 PM</small></p></div></div></li><li style="width:100%;"><div class="msj-rta macro"><div class="text text-r"><p>LOL</p><p><small>3:54 PM</small></p></div><div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"></div></div></li>
                      </ul>
            </div>
                      <div>
                          <div class="msj-rta macro" style="margin:auto">                        
                              <div class="text text-r" style="background:whitesmoke !important">
                                  <input class="mytext" placeholder="Type a message">
                              </div> 
                          </div> -->
                      </div>
          </div>
     <!--  <iframe id="iframe" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/d5181286-429b-447d-a5ba-5383af5a971b"></iframe> -->
    </div>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
<!-- popup form popup -->
<div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="student-form-modal" tabindex="-1" role="dialog" aria-labelledby="studentModal">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <!-- <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button> -->
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">CloudAge</h3>
              </div>
              </div>
            <div class="modal-body">
              <div class="row popup-form">
                <div class="col-lg-12 col-sm-12">
                  <!-- Currently fresher option -->
                  <div class="fresher-career" style="display:none">
                      <input type="radio" name="type" value="fresher-career" id="fresher-career" >Just need a career<br>
                      <input type="radio" name="type" value="fresher-position" id="fresher-position" >Just need a career with good position<br>
                      <input type="radio" name="type" value="fresher-course" id="fresher-course" >Just need the course
                  </div>
                  <!-- end Currently fresher option-->

                  <!-- fresher-career "Just need a career" option -->
                  <div class="fresher-career-block" style="display:none">
                      <p>Are you a computer science graduate?</p>
                      <input type="radio" name="type" value="fresher-graduate-yes" id="fresher-graduate-yes" >Yes<br>
                      <input type="radio" name="type" value="fresher-graduate-no" id="fresher-graduate-no" >Other graduates or diploma
                  </div>

                  <!-- fresher-graduate-yes block -->
                  <div class="fresher-graduate-yes-block" style="display:none">
                      <p>You are eligible for the course with 6 months time</p>
                      <input type="radio" name="type" value="fresher-graduate-agree" id="fresher-graduate-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="fresher-graduate-notagree" id="fresher-graduate-notagree" >I will make it big somewhere else.
                  </div>


                  <!-- end fresher-graduate-yes block -->
                  <!-- fresher-graduate-no block -->
                  <div class="fresher-graduate-no-block" style="display:none">
                      <p>You will need to dedicate atleast 9 months time</p>
                      <input type="radio" name="type" value="fresher-graduate-agree" id="fresher-graduate-no-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="fresher-graduate-notagree" id="fresher-graduate-no-notagree" >I will make it big somewhere else.
                  </div>
                  <!-- fresher-graduate-no block -->
                  <!-- end fresher-career "Just need a career" option -->

                  <!-- "Just need a career with good position" option -->
                  <div class="fresher-need-carrer" style="display:none">
                      <p>International certification, Live project experience with use case, graduation, english are the skill sets you will need to work upon.</p>
                      <input type="radio" name="type" value="fresher-need-carrer-challenge" id="fresher-need-carrer-challenge" >Yes I am ready for the challenge<br>
                      <input type="radio" name="type" value="fresher-need-carrer-course" id="fresher-need-carrer-course" >For now just need the course
                  </div>

                  <!-- end Just need a career with good position option -->

                  <!-- "Just need the course" option -->
                  <div class="fresher-course-block" style="display:none">
                      <p>Are you atleast a graduate with good english?</p>
                      <input type="radio" name="type" value="fresher-course-graduation-poor" id="fresher-course-graduation-poor" >Yes completed graduation but poor english<br>
                      <input type="radio" name="type" value="fresher-course-graduation-good" id="fresher-course-graduation-good" >Yes completed graduation and good english<br>
                      <input type="radio" name="type" value="fresher-course-diploma" id="fresher-course-diploma" >Other graduates or diploma
                  </div>

                  <!-- Yes completed graduation but poor english -->
                  <div class="fresher-course-graduation-poor-block" style="display:none">
                      <p >Course duration will be 4 months</p>
                      <input type="radio" name="type" value="fresher-course-graduation-poor-agree" id="fresher-course-graduation-poor-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="fresher-course-graduation-poor-notagree" id="fresher-course-graduation-poor-notagree" >I will make it big somewhere else.
                   </div>
                  <!-- end Yes completed graduation but poor english -->

                  <!-- Yes completed graduation and good english -->
                  <div class="fresher-course-graduation-good-block" style="display:none">
                      <p>Course duration will be 3 months</p>
                      <input type="radio" name="type" value="fresher-course-graduation-good-agree" id="fresher-course-graduation-good-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="fresher-course-graduation-good-notagree" id="fresher-course-graduation-good-notagree" >I will make it big somewhere else.
                   </div>
                  <!-- end Yes completed graduation and good english -->

                  

                  <!-- Other graduates or diploma -->
                  <div class="fresher-course-diploma-block" style="display:none">
                      <p>Course duration will be 4 months</p>
                      <input type="radio" name="type" value="fresher-course-diploma-agree" id="fresher-course-diploma-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="fresher-course-diploma-notagree" id="fresher-course-diploma-notagree" >I will make it big somewhere else.
                   </div>
                  <!-- end Other graduates or diploma -->
                  <!-- end fresher-career option -->

                  <!-- unemployed option start -->
                  <div class="currently-unemployed-block" style="display:none">
                      <input type="radio" name="type" value="currently-unemployed-job" id="currently-unemployed-job" >Need to do the course for a job<br>
                      <input type="radio" name="type" value="currently-unemployed-position" id="currently-unemployed-position" >Need a career with good position<br>
                      <input type="radio" name="type" value="currently-unemployed-course" id="currently-unemployed-course" >Just need the course
                  </div>
                  
                  <!-- Need to do the course for a job -->
                  <div class="currently-unemployed-job-block" style="display:none">
                      <p>Are you a computer science graduate?</p>
                      <input type="radio" name="type" value="currently-unemployed-job-yes" id="currently-unemployed-job-yes" >Yes<br>
                      <input type="radio" name="type" value="currently-unemployed-job-other" id="currently-unemployed-job-other" >Other graduate
                  </div>

                   <!-- are you graduate yes option -->
                   <div class="currently-unemployed-job-yes-block" style="display:none">
                      <p>Since you are struggling you can do wonders if we get your attention for 4 months</p>
                      <input type="radio" name="type" value="currently-unemployed-job-yes-agree" id="currently-unemployed-job-yes-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="currently-unemployed-job-yes-notagree" id="currently-unemployed-job-yes-notagree" >I will make it big somewhere else.
                  </div>
                  <!-- end yes option -->

                  <!-- other option -->
                   <div class="currently-unemployed-job-other-block" style="display:none">
                      <p>Since you are struggling you can do wonders if we get your attention for 6 months</p>
                      <input type="radio" name="type" value="currently-unemployed-job-other-agree" id="currently-unemployed-job-other-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="currently-unemployed-job-other-notagree" id="currently-unemployed-job-other-notagree" >I will make it big somewhere else.
                  </div>
                  <!-- end other option -->
                  <!-- end Need to do the course for a job  -->

                 <!-- Need a career with good position -->
                  <div class="currently-unemployed-position-block" style="display:none">
                      <p>International certification, Live project experience with use case, graduation, english are the skill sets you will need to work upon.</p>
                      <input type="radio" name="type" value="currently-unemployed-position-prove" id="currently-unemployed-position-prove" >Will prove to the world that I can do it<br>
                      <input type="radio" name="type" value="currently-unemployed-position-course" id="currently-unemployed-position-course" >For now just need the course
                  </div>
                  <!-- end other option -->
                  <!-- end Need a career with good position  -->

                  <!-- currently-unemployed-course start -->
                  <div class="currently-unemployed-course-block" style="display:none">
                      <p>Are you atleast a graduate with good english?</p>
                      <input type="radio" name="type" value="currently-unemployed-course-poor" id="currently-unemployed-course-poor" >Yes completed graduation but poor english<br>
                      <input type="radio" name="type" value="currently-unemployed-course-good" id="currently-unemployed-course-good" >Yes completed graduation and good english<br>
                      <input type="radio" name="type" value="currently-unemployed-course-diploma" id="currently-unemployed-course-diploma" >Other graduates or diploma
                  </div>
                  <!-- currently-unemployed-course end -->

                   <!-- Yes completed graduation but poor english -->
                  <div class="currently-unemployed-course-poor-block" style="display:none">
                      <p>Course duration will be 4 months</p>
                      <input type="radio" name="type" value="currently-unemployed-course-poor-agree" id="currently-unemployed-course-poor-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="currently-unemployed-course-poor-notagree" id="currently-unemployed-course-poor-notagree" >I will make it big somewhere else.
                   </div>
                  <!-- end Yes completed graduation but poor english -->

                  <!-- Yes completed graduation and good english -->
                  <div class="currently-unemployed-course-good-block" style="display:none">
                      <p >Course duration will be 3 months</p>
                      <input type="radio" name="type" value="currently-unemployed-course-good-agree" id="currently-unemployed-course-good-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="currently-unemployed-course-good-notagree" id="currently-unemployed-course-good-notagree" >I will make it big somewhere else.
                   </div>
                  <!-- end Yes completed graduation and good english -->

                  <!-- Other graduates or diploma -->
                  <div class="currently-unemployed-course-diploma-block" style="display:none">
                      <p >Course duration will be 4 months</p>
                      <input type="radio" name="type" value="currently-unemployed-course-diploma-agree" id="currently-unemployed-course-diploma-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="currently-unemployed-course-diploma-notagree" id="currently-unemployed-course-diploma-notagree" >I will make it big somewhere else.
                   </div>
                  <!-- end Other graduates or diploma -->
                  <!-- end unemployed option start -->

                  <!-- employed option-->
                  <div class="employed-block" style="display:none">
                      <input type="radio" name="type" value="employed-job" id="employed-job" >Want high salary job<br>
                      <input type="radio" name="type" value="employed-career" id="employed-career" >Want high position career<br>
                      <input type="radio" name="type" value="employed-course" id="employed-course" >Just need the course
                  </div>

                  <!-- want high salary job -->
                  <div class="employed-job-block" style="display:none">
                      <p>Are you working for IT?</p>
                      <input type="radio" name="type" value="employed-job-yes" id="employed-job-yes" >Yes<br>
                      <input type="radio" name="type" value="employed-job-domain" id="employed-job-domain" >Other Domain
                  </div>

                  <!-- want high salary job Yes -->
                  <div class="employed-job-yes-block" style="display:none">
                    <p>You proved yourself to the world your course is for 2 months</p>
                      <input type="radio" name="type" value="employed-job-yes-agree" id="employed-job-yes-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="employed-job-notagree" id="employed-job-notagree" >I will make it big somewhere else.
                  </div>
                  <!-- end want high salary job Yes -->
                  <!-- end want high salary job -->

                  <!--Want high position career-->
                  <div class="employed-career-block" style="display:none">
                      <p>International certification, Live project experience with use case, graduation, english are the skill sets you will need to work upon.</p>
                      <input type="radio" name="type" value="employed-career-cake" id="employed-career-cake" >This is a piece of cake for me<br>
                      <input type="radio" name="type" value="employed-career-course" id="employed-career-course" >For now just need the course
                  </div>
                  <!-- end Want high position career -->

                  <!-- Just need the course -->
                  <div class="employed-course-block" style="display:none">
                      <p>Are you atleast a graduate with good english?</p>
                      <input type="radio" name="type" value="employed-course-poor" id="employed-course-poor" >Yes completed graduation but poor english<br>
                      <input type="radio" name="type" value="employed-course-good" id="employed-course-good" >Yes completed graduation and good english<br>
                      <input type="radio" name="type" value="employed-course-diploma" id="employed-course-diploma" >Other graduates or diploma
                  </div>
                  <!-- end ust need the course -->

                  <!-- Just need the course - Yes completed graduation but poor english -->
                  <div class="employed-course-poor-block" style="display:none">
                      <p>Course duration will be 4 months</p>
                      <input type="radio" name="type" value="employed-course-poor-agree" id="employed-course-poor-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="employed-course-poor-notagree" id="employed-course-poor-notagree" >I will make it big somewhere else.
                  </div>
                  <!-- end ust need the course -Yes completed graduation but poor english -->

                  <!-- Just need the course - Yes completed graduation and good english -->
                  <div class="employed-course-good-block" style="display:none">
                      <p >Course duration will be 3 months</p>
                      <input type="radio" name="type" value="employed-course-good-agree" id="employed-course-good-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="employed-course-good-notagree" id="employed-course-good-notagree" >I will make it big somewhere else.
                  </div>
                  <!-- end ust need the course - Yes completed graduation and good english -->

                  <!-- Just need the course - Other graduates or diploma -->
                  <div class="employed-course-diploma-block" style="display:none">
                      <p >Course duration will be 4 months</p>
                      <input type="radio" name="type" value="employed-course-diploma-agree" id="employed-course-diploma-agree" >Agree t&c <br>
                      <input type="radio" name="type" value="employed-course-diploma-notagree" id="employed-course-diploma-notagree" >I will make it big somewhere else.
                  </div>
                  <!-- end ust need the course - Other graduates or diploma -->
                  <!-- end employed option -->

                 <!--  <form action="submission.html" method="get" onsubmit="return is_checked()"> -->
                 <div class="pop-que">
                     <!-- fresher -->
                      <div class="fresher">
                        <h6>Be honest to get honest help</h6>
                        <input type="radio" name="type" value="fresher" id="fresher" >Currently Fresher
                        <ul>
                          <li>Completed graduation this year</li>
                          <li>Completed masters this year</li>
                          <li>Completed HSC, Under Graduate</li>
                        </ul>
                        <!-- 1st que -->

                      </div>
                      <!-- end fresher -->

                      <!-- unemployed -->
                      <div class="unemployed">
                        <h6>Be serious to get serious help</h6>
                        <input type="radio" name="type" value="unemployed" id="unemployed" >Currently Unemployed
                        <ul>
                          <li>Worked before however, actively looking for a job</li>
                          <li>Waiting for the right opportunity after graduation</li>
                          <li>Waiting for the right opportunity after masters</li>
                        </ul>
                      </div>

                      <!-- employed -->
                      <div class="employed">
                        <h6>Be open minded to get better salary</h6>
                        <input type="radio" name="type" value="employed" id="employed" >Currently Employed
                        <ul>
                          <li>Looking to change my domain</li>
                          <li>Looking to increase my salary</li>
                          <li>Looking for a better position in IT</li>
                        </ul>
                      </div>
                     <!--  </form> -->
                     <button type="button" class="d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">skip</button>
               </div>
              </div>
              
            </div>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- End popup forms end -->
     <!-- student slider on popup-->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="student-temp-modal" tabindex="-1" role="dialog" aria-labelledby="studentModal">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <!-- <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close" id="clo">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button> -->
              <div class="modal-title text-center">
               <!--  <span class="ms-logo ms-logo-white ms-logo-sm mr-1"><img src="assets/img/logo.png" width="93%"></span> -->
                <h3 class="no-m ms-site-title">Student Testimonials</h3>
              </div>
              <div class="modal-body">
                <div id="carousel-example-generic1" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic1" data-slide-to="0" class=""></li>
                      <li data-target="#carousel-example-generic1" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic1" data-slide-to="2" class="active"></li>
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
                    <a class="left carousel-control-prev btn btn-white btn-raised" href="#carousel-example-generic1" role="button" data-slide="next">
                      <i class="zmdi zmdi-arrow-left"></i>
                    </a>
                    <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic1" role="button" data-slide="next">
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
    <!--  student popup -->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal " id="ms-student-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
             
            <div class="modal-body">
            
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated  mb-4">
                           <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated  mb-4">
                      <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated mb-4">
                        <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated mb-4">
                           <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated  mb-4">
                      <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated mb-4">
                        <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated  mb-4">
                           <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated  mb-4">
                      <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated  mb-4">
                        <img src="assets/img/dummy_img.jpg" >
                           <p>Student Name</p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start video on poopup -->
    <!-- For new data -->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-newdata-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <h3 class="no-m ms-site-title">Big Data on Cloudera</h3>
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
    <!-- End new data -->

    <!-- For cloud services -->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-cloud-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <h3 class="no-m ms-site-title">Cloud Data Centers on Cloud</h3>
              </div>
              
            </div>
            <div class="modal-body">
             <video poster="assets/img/video.jpg" id="video-background"  controls >
                <source src="assets/media/LandingVideo.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end cloud services -->

    <!-- For ml -->
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-ml-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <h3 class="no-m ms-site-title">New Data(ML) On Cloud</h3>
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
    <!-- End ml -->
    <!-- forpython -->
     <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-python-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <h3 class="no-m ms-site-title">Python</h3>
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
    <!-- end python -->
    <!-- End video on popup -->
    <!-- End studetn popup -->
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
      <header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <!-- <div class="ms-title">
            <a href="/../">
              <img src="assets/img/logo.png" style="width:185px;margin-left:15px"></a>
          </div> -->

          <div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                <li class="animated fadeInRight animation-delay-3">
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-1">
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                <i class="zmdi zmdi-share"></i>
              </a>
            </div>
                        
            <a href="tel:+918087201590" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" >
              <i class="zmdi zmdi-phone"></i>
            </a>
            <a href="https://api.whatsapp.com/send?phone=14155238886&text=I%27m%20interested%20in%20your%20course&source=&data=" target="_blank" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8">
              <i class="fa fa-whatsapp"></i>
            </a>
            <!-- <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i>
            </a> -->
            <!-- <form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />

              
              <label for="search-box">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form> -->
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>
        </div>
      </header>

      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
        <div class="container container-full">
          <!-- Fixed header logo -->
           <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
              <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
              <span class="fix-logo" ><img src="assets/img/logo.png" width="100px">
             <p><i>We Make All Data Work</i></p>
              </span>
              
              <!-- <span class="ms-title">Material
                <strong>Style</strong>
              </span> -->
            </a>
          </div>
          <!--End Fixed header logo -->
          <!-- main logo -->
          <div class="col-md-3 logo">
              <a href="index.php"><img src="assets/img/logo.png" >
              <p><i>We Make All Data Work</i></p>
              </a>
              
          </div>
          <!-- end main logo -->
          <!-- menu -->
          
          <!-- end menu -->

<!-- testing menu -->
<div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown dropdown-megamenu-container">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Futuristic Technologies <i class="zmdi zmdi-chevron-down"></i>
                </a>
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
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Business Solution<i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
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
<!-- end testing menu -->


          <!-- timer -->
          <div class="header-timer col-md-3">
            <h6  data-toggle="tooltip" data-template="<div class=&quot;tooltip tooltip-warning&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner&quot;></div></div>" data-placement="top" title="" data-original-title="Register For Live Webinar" aria-describedby="tooltip344831"> <a href="javascript:void(0)"  data-toggle="modal" data-target="#ms-account-modal">Live Webinar</a> <div class="ripple-container"></div></h6>
           
             <a href="javascript:void(0)"  data-toggle="modal" data-target="#ms-account-modal"><p id="timer"></p></a>
          </div>
          <!-- end timer -->
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
          </a>
        </div>
      </nav>