<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Signin | CNC</title>
    <link rel="icon" href="../public/assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../public/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../public/assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../public/assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../public/assets/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="../public/assets/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="../public/assets/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../public/assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../public/assets/css/style.css">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/main.css">
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
                        <a class="navbar-brand" href="index.html"> <img src="../public/assets/img/callncure-logo.png" alt="logo"> </a>
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
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="../public/assets/img/img-01.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" id="form_user" method="post">
                        <span class="login100-form-title">
					 সাইন করুন 
					</span>

                        <div class="wrap-input100 validate-input" data-validate="সঠিক ফোন নম্বরটি দিতে হবে">
                            <input class="input100" type="number" name="phone" id="phone" placeholder="আপনার ফোন নম্বর">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="সঠিক পাসওয়ার্ড দিতে হবে">
                            <input class="input100" type="password" name="pass" id="pass" placeholder="আপনার পাসওয়ার্ড">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="btn_2 d-none d-lg-block btn-block">
							সাইন করুন 
						</button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt3" href="#">
                                ফোন নম্বর / পাসওয়ার্ড 
                            </a>
                            <span class="txt1">
                                ভুলে গেছি?
                            </span>
                            <br> <br>
                            <hr>
                            <a class="txt2" href="<?php echo base_url();?>ControllerUser/showUserRegisterpage">
                                <h5 class="text-white"> নতুন অ্যাকাউন্ট তৈরী করুন</h5>
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
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

    <script src="../public/assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../public/assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../public/assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="../public/assets/js/owl.carousel.min.js"></script>
    <script src="../public/assets/js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="../public/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../public/assets/js/jquery.form.js"></script>
    <script src="../public/assets/js/jquery.validate.min.js"></script>
    <script src="../public/assets/js/mail-script.js"></script>
    <script src="../public/assets/js/contact.js"></script>
    <!-- custom js -->
    <script src="../public/assets/js/custom.js"></script>

    <!--===============================================================================================-->
    <script src="../public/assets/vendor/select2/select2.min.js"></script>
    <script src="../public/assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="../public/assets/js/main.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#form_user').submit(function(event){
                event.preventDefault();

            var phone= $('#phone').val();
            var pass= $('#pass').val();

            // console.log(phone);
            // return false;

               $.ajax({
            url: "<?php echo base_url();?>ControllerUser/Login",
            type: "POST",
            dataType: 'json',
            data : {
                 'phone' : phone,
                 'pass' : pass,
                 
            },
            success:function(data){

                // console.log(data);
                  var validation= data['valid'];

                  if(validation=='yes'){

                   var id=data.dataes[0].id;

                   

                   // var phone=data.dataes[0].phone;

                   localStorage.setItem('user_id',id);
                   // localStorage.setItem('phone',phone);

                   // console.log(localStorage.getItem('user_id'));
                   // return false;
                   
                  swal("User Successfully Loged In!");
                    
                   setTimeout(function(){
                     window.location.replace("homePage");
                 },2000);

                  }else{

                   
                    
                    swal("Invalid Info");
                    setTimeout(function(){

                    location.reload();
                    },2000); 

                  }
            }
            }); 
        });
      });      
    </script>
</body>

</html>