<?php 
if(isset($_POST['submit'])){
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$conn = mysqli_connect('localhost','root','','progdev');

$sql= "INSERT INTO les_messages(fullname, email, phone, message) VALUES ('$fullname','$email','$phone','$message')";
mysqli_query($conn,$sql);}
?>

<?php 
if(isset($_POST['subm'])){
$emai=$_POST['emai'];


$conn = mysqli_connect('localhost','root','','progdev');

$sql= "INSERT INTO  les_emails (EMAIL) VALUES ('$emai')";
mysqli_query($conn,$sql);}
?>







<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <script>function sub(){alert("email send succefuly");}</script>
  <title>ELECTRONEO</title>

  <!-- slider stylesheet -->
  

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          ELECTRONEO
        </span>
      </a>
    </div>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="img-box">
              <img src="images/8b8188cb36bdfe8c30906e8398f224ef-new.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/8b8188cb36bdfe8c30906e8398f224ef-new.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/8b8188cb36bdfe8c30906e8398f224ef-new.jpg" alt="">
            </div>
          </div>
        </div>
    
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#contact">contact US <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#product">Our PRODUCT </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#test">Testimonial</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            HIGH QUALITY
          </h2>
          <p>
            From smartphones and laptops to cameras, TVs and video game consoles you can find the hottest electronics
          </p>
        </div>
        <div class="img-box">
          <img src="images/macbook-air-13-m1-8-go-ram-256-go-ssd-gold-mgnd3fn-a.jpg" alt="">
        </div>
        <div class="btn-box">
          <a href="">
            BUY
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/95932EFD-8A4C-437A-A954-7A9308B733CE.png" alt="">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2>
                About Our store
              </h2>
            </div>
            <p>
              Electronic components distributor with a huge selection in stock and ready to ship with no minimum orders. New electronic parts added daily.

            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- product section -->
  <a name="product"></a>
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Recommendation product
        </h2>
      </div>
    </div>
    <div class="container-fluid">

      <div class="product_container">
        <div class="box">
          <img src="images/Apple-iPhone-14-Pro_FINAL_featured-image-packshot-review-1.jpg" alt="">
          <div class="link_box">
            <h5>
              Iphone 14 pro max
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/1200-L-test-apple-macbook-air-m2-de-la-4k-au-petit-dj.jpg" alt="">
          
        </div>
        <div class="box">
          <img src="images/display-2.jpg" alt="">
          <div class="link_box">
            <h5>
            huawie p50 pro
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/1581c46a470c3aa40c1f2ea895de94174984a4d3 (1).jpg" alt="">
          <div class="link_box">
            <h5>
             Huawie p30 pro
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/Samsung-Galaxy-S23-wallpapers.jpg" alt="">
          <div class="link_box">
            <h5>
              samsung s23 ultra
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/SAMTQ55S92CATXXC.jpg" alt="">
          <div class="link_box">
            <h5>
           samsung serie T
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  

  <section class="client_section layout_padding-bottom">
    <div class="container ">
      <div class="heading_container">
        <a name="test"></a>
        <h2>
          What Says Cutomer
        </h2>
        <hr>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images\client-img.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  lamin dyakiti
                </h5>
                <p>
                  
                  
                   <br>
                   Certainly! I'd be happy to help. However, I'll need more information about your electronic store to provide a review. Please share some details about the products you offer, the overall user experience on your website or physical store, any unique features or offerings, and any specific aspects you'd like me to focus on. The more details you provide, the better I can tailor the review to your specific store.
                </p>
              </div>
            </div>
          </div>
          
          
        </div>
        
      </div>

    </div>
  </section>

  <!-- end client section -->


  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr><a name="contact"></a>
            <h2>
              Request A call back
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            <form action="#" method="POST">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" name="fullname" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone" />
                  </div>
                  <div>
                    <input type="text" class="message_input" placeholder="Message" name="message"/>
                  </div>
                  <div><input type="submit" name="submit" value="envoyer" onclick="sub()">
                    
                  </div> 
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
         ELECTRONEO
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                BIM MAKHLOUF DEROUA BERRCHID
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : 0628426171
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
              BASSOULAHCEN5@GMAIL.COM
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="#" method="POST">
              <input type="text" placeholder="Enter your email"  name="emai">
              <button name="subm" onclick="sub()">
                GET STARTED
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="https://www.facebook.com/222ELECTRONEO?mibextid=ZbWKwL">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  

</body>

</html>