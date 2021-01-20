<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lists | CNC</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="https://kit.fontawesome.com/321f07098e.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
   <style type="text/css">
         .show-cart li {
         display: flex;
        }
</style>
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
     <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>MEDICINE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

         <div class="container-fluid mt-5">
         <div class="row text-right">
         <div class="col">
          <i class="fas fa-cart-plus fa-2x text-info mr-2" data-toggle="modal" data-target="#cart">(<span class="total-count"></span>)</i>
          <i class="fas fa-trash fa-2x clear-cart text-danger"></i>
        </div>
    </div>
    </div>

        <section id="results1" class="our_depertment section_padding single_pepertment_page">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center" id="scrollingPanel1">
                            <div class="col-xl-9">
                                <h4>MEDICINE সমূহ</h4>
                                <hr>
                                <div class="row">
                                   <table class="table table-bordered table-sm mt-5" >
                                 <thead>
                                        <tr>
                                           <th class="text-center">Sl No</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Company Name</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                 </thead>
                                        <tbody id="table_Medicine">
      
                                         </tbody>
                                    </table>
                                </div>               
            </div>   
        </div>  
    </section>
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url();?>ControllerCustomer/customerInfoPage" class="btn btn-warning">Order now</a>
      </div>
    </div>
  </div>
</div> 


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

<script>

      var url=window.location.href;
      var store_id= url.substring(url.lastIndexOf('=') + 1);

    
         $.ajax({
             url:"<?php echo base_url();?>ControllerLists/getMedicine/"+store_id,
             type:"get",
            dataType:'html',
             success:function(data){

          // $.each(data, function(k) {
          //     alert(data[k].medicine_id);
          //      });
                   var dataes=JSON.parse(data);
                  
                  
                   
                    var output=''; 
                    var store_id='';
                 for(var i=0; i<dataes.length; i++ )
                 {   
                   var store_id=dataes[i].store_id;
                   localStorage.setItem('store_id',store_id);
                   // return false;
                  output +='<tr class="text-uppercase"><td class="text-center">'+(i+1)+'</td><td class="text-center">'+dataes[i].medicine_name+'</td><td class="text-center">'+dataes[i].company_name+'</td><td class="text-center">'+dataes[i].price+'</td><td class="text-center"><button class="btn btn-success add_to_cart" data-name='+dataes[i].medicine_name+' data-price='+dataes[i].price+'>Add To Cart </button></td></tr>'; 
                  }
                 $('#table_Medicine').html(output);

               // cart function //   
             // ************************************************
// Shopping Cart API
// ************************************************

   var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
    cart = [];

 // for(var i=0;i<cart.length; i++){
 //    console.log(cart[i].name);

 //  }

  
  // Constructor
  function Item(name, price, count) {
    this.name = name;
    this.price = price;
    this.count = count;
  }
  
  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }

  

  // =============================
  // Public methods and propeties 
  // =============================
  var obj = {};
  
  // Add to cart
  obj.addItemToCart = function(name, price, count) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(name, price, count);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;

        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
   
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  return obj;
})();

// Add Item
$('.add_to_cart').click(function(event) {
  event.preventDefault();
  var name=$(this).data("name");
  var price=$(this).data("price");
  shoppingCart.addItemToCart(name, price, 1);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});

// Display item
function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>" 
      + "<td>(" + cartArray[i].price + ")</td>"
      + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      + " = " 
      + "<td>" + cartArray[i].total + "</td>" 
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
  localStorage.setItem('TotalAmount',shoppingCart.totalCart());
}


// Delete item button
$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name');
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})

// One Item Subtruct
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// One Item Add
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});

displayCart();
  // console.log(cart.length)
  // for(var i=0;i<cart.length;i++){
  //   // console.log((i+1)+' '+cart[i].name);
  //   // console.log((i+1)+' '+cart[i].count);
  //   var medicine=[];

  //   medicine[i]=cart[i].name; 
  //   var count=[];
  //   count[i]=cart[i].count; 
  //   localStorage.setItem('medicinename',medicine[i]);
  //   localStorage.setItem('count',count[i]);
  // }
  //   for(var i=0;i<cart.length;i++){
  //   console.log(localStorage.getItem('medicinename'));
  //   console.log(localStorage.getItem('count'));
  //           }
}
            });

</script>  

 


</body>

</html>