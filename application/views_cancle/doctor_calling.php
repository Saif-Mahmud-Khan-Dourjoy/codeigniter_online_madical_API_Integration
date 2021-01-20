<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Appointments | CNC</title>
    <link rel="icon" href="<?php echo base_url(); ?>public/assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/style.css">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/main.css">
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?php echo base_url(); ?>public/assets/img/callncure-logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                               <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/Test/ControllerGenViews/homePage">হোম</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/Test/ControllerDoctor/doctorSearchPage">ডাক্তারগন</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/Test/ControllerLists/listsViewPage">পার্টনার নেটওয়ার্ক</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/Test/ControllerLists/drugListViewPage">শপ</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://localhost/Test/ControllerUser/LoginAs">সাইন ইন</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="#">হটলাইন- ০১৭১১ ১১১২২২</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <section class="our_depertment section_padding">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                <div>
                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">Video Call</h4>
                                    </div>
                                    <div class="box-body">
                                        <section class="make-center">
                          
                        
                                 <button id="btn-stop-recording" style="display: none;">
                                  Stop Recording</button>
                            <input type="text" style="display: none;" id="room-id" value="" autocorrect=off autocapitalize=off size=20>
                                <!-- <a class="btn btn-success open_video" id="open_video" href="">
                                  <i class="fa fa-play"></i> Answer Call 
                                </a> -->
                                 <a class="btn btn-success close_video">
                                  <i class="fa fa-close"></i> Close Call
                                </a>
                            <!-- <button id="open_video" value=""> Open Video </button> -->
                            <button id="open-room" style="display: none;"> Call Video To Patient </button>
                            <button id="join-room" style="display: none;"></button>
                            <button id="open-or-join-room" style="display: none;"></button>
                        
                            <div id="videos-container" style="margin: 20px 0;"></div>
                        
                            <div id="room-urls" style="text-align: center;display: none;background: #F1EDED;margin: 15px -10px;border: 1px solid rgb(189, 189, 189);border-left: 0;border-right: 0;"></div>
                          </section>
                                    </div>
                                </div>
                                     </div>

                                     <div class="container">
                    <br />
                    <h2 align="center">Prescription For Patient</h2>
                    <br />
                    <div class="table-responsive">
                     <table class="table table-bordered" id="prescription_table">
                      <tr>
                       <th width="35%">Medicine Name</th>
                       <th width="30%">Time Of Taking</th>
                       <th width="30%">Day of Taking</th>
                       <th width="5%"></th>
                      </tr>
                      <tr>
                       <td contenteditable="true" class="medicine_name"></td>
                       <td contenteditable="true" class="timez"></td>
                       <td contenteditable="true" class="quantity"></td>
                       <td></td>
                      </tr>
                     </table>
                     <div align="right">
                      <button type="button" name="add" id="add" class="btn btn-success btn-xs">More+</button>
                     </div>
                     <div align="center">
                      <button type="button" name="save" id="save" class="btn btn-info">Save</button>
                     </div>
                     <br />
                     <!-- <div id="inserted_item_data"></div> -->
                    </div>
                    
                   </div>
                    

                    
                </div>
            </div>
        </div>
    </section>



    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="../public/assets/img/callncure-logo.png" alt="#"> </a>
                        <p>আমাদের কিছু কথা। আমাদের কিছু কথা। আমাদের কিছু কথা। আমাদের কিছু কথা। </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>লিংক সমূহ</h4>
                        <ul>
                            <li><a href="#">লিংক ১</a></li>
                            <li><a href="#">লিংক ২</a></li>
                            <li><a href="#">লিংক ৩</a></li>
                            <li><a href="#">লিংক ৪</a></li>
                            <li><a href="#">লিংক ৫</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>সেবা সমূহ</h4>
                        <ul>
                            <li><a href="#">সেবা ১</a></li>
                            <li><a href="#">সেবা ২</a></li>
                            <li><a href="#">সেবা ৩</a></li>
                            <li><a href="#">সেবা ৪</a></li>
                            <li><a href="#">সেবা ৫</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>অন্যান্য</h4>
                        <ul>
                            <li><a href="#">অন্যান্য ১</a></li>
                            <li><a href="#">অন্যান্য ২</a></li>
                            <li><a href="#">অন্যান্য ৩</a></li>
                            <li><a href="#">অন্যান্য ৪</a></li>
                            <li><a href="#">অন্যান্য ৫</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        <h4>নিউজলেটার</h4>
                        <p>আমাদের সম্পর্কে সকল আপডেট পেতে আপনার ইমেইল দিয়ে সংযুক্ত থাকুন।
                        </p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="ইমেইল অ্যাড্রেস" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="ti-angle-right"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text text-center col-md-12">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Developed by <a href="https://www.devszone.com" target="_blank">DevsZone</a>
                    </p>

                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="<?php echo base_url(); ?>public/assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url(); ?>public/assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url(); ?>public/assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?php echo base_url(); ?>public/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="<?php echo base_url(); ?>public/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/jquery.form.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/mail-script.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/contact.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url(); ?>public/assets/js/custom.js"></script>

    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>public/assets/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="<?php echo base_url(); ?>public/assets/js/main.js"></script>

<!-- Main js all common file include -->
<script src="<?php echo base_url(); ?>public/rtc/doctorcustom.js"></script>
<script src="<?php echo base_url(); ?>public/rtc/live_webrtc/dist/RTCMultiConnection.js"></script>
<script src="<?php echo base_url(); ?>public/rtc/live_webrtc/node_modules/webrtc-adapter/out/adapter.js"></script>
<script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>

<!-- custom layout for HTML5 audio/video elements -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/rtc/live_webrtc/dev/getHTMLMediaElement.css">
<script src="<?php echo base_url(); ?>public/rtc/live_webrtc/dev/getHTMLMediaElement.js"></script>
<script src="<?php echo base_url(); ?>public/rtc/live_webrtc/node_modules/recordrtc/RecordRTC.js"></script>
<script src="<?php echo base_url(); ?>public/rtc/live_webrtc/rtc_main.js"></script>
  <script src="https://cdn.webrtc-experiment.com/common.js"></script>

  <script>
      var url=window.location.href;
        var room_id = url.substring(url.lastIndexOf('=') + 1);

        $.ajax({
               url: "http://localhost/CnC/api/video/get_details/",
               type: "POST",
               dataType: 'json',
               data : {
                    'room_id' : room_id,
   
                                  },
               success:function(data){
                   
                   localStorage.setItem('appointments_id',data.appointment_id);
                   localStorage.setItem('users_id',data.user_id);
                   localStorage.setItem('doc_id',data.doctor_id);
                   
   
                   
               },
               error:function(){
                     
               }
               
           });

//     $(".open_video").on('click',function(e){
//       e.preventDefault();
// var appointment_doctor_video_id = 1;
// // alert(appointment_doctor_video_id);
//            $.ajax({
//             type  : 'GET',
//             url : 'http://localhost/CnC/api/video/open_video',
//             async : false,
//             dataType : 'json',
//             data:{appointment_doctor_video_id:appointment_doctor_video_id},
//             success: function(video_id) {
//               if (video_id) {
//                     // $('.open_video').html('Close Call');
//                     $('.close_video').html('Close Call');
//                     $("#open_video").attr("href",video_id);
//               }

         


//            }


//          });

//             event.preventDefault();
//          });
</script>


<script>
    $(document).ready(function(){
     var count=1;
     $('#add').click(function(){
      count++;
      var html_code = "<tr id='row"+count+"'>";
       html_code += "<td contenteditable='true' class='medicine_name'></td>";
       html_code += "<td contenteditable='true' class='timez'></td>";
       html_code += "<td contenteditable='true' class='quantity'></td>";
       html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>Del -</button></td>";   
       html_code += "</tr>";  
       $('#prescription_table').append(html_code);
     });
     
     $(document).on('click', '.remove', function(){
      var delete_row = $(this).data("row");
      $('#' + delete_row).remove();
     });
     
     $('#save').click(function(){
      var doc_id=localStorage.getItem('doc_id');
      var user_id= localStorage.getItem('users_id');
      var appointment_id= localStorage.getItem('appointments_id');
     
      // console.log(user_id);
      // return false;
      var medicine_name = [];
      var timez = [];
      var quantity = [];
      $('.medicine_name').each(function(){
       medicine_name.push($(this).text());
      });
      $('.timez').each(function(){
       timez.push($(this).text());
      });
      $('.quantity').each(function(){
       quantity.push($(this).text());
      });
      $.ajax({
       url:"http://localhost/CnC/api/Prescriptions/prescription",
       method:"POST",
       data:{
            medicine_name:medicine_name,
            timez:timez,
            quantity:quantity,
            doc_id : doc_id,
            user_id : user_id,
            appointment_id : appointment_id,
            },
       success:function(data){
       alert('successfull');
      
       }
      });
     });
    });
     
    
    </script>

    
</body>

</html>