<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{asset('../assets/images/favicon.png')}}" />

<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawsome.min.css">
<link rel="stylesheet" href="assets/fonts/font/flaticon.css">
<link rel="stylesheet" href="assets/css/meanmenu.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/nice-select.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
<link rel="stylesheet" href="assets/css/odometer.min.css">
<link rel="stylesheet" href="assets/css/barfiller.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/dark.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<title>Contact Us</title>

</head>
<body>
@include('navbar')

<section class="uni-banner" style="background:url(../assets/images/Contactus.jpg);background-size: 100%;">
<div class="container">
<div class="uni-banner-text-area">
<h1>Contact Us</h1>
<ul>
<li><a href="/">Home</a></li>
</ul>
</div>
</div>
</section>


<section class="contact ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="contact-card-area pr-20">
<div class="default-section-title">
<h3>Contact Us</h3>
<p>Please give us a call, drop us an email, or fill out the contact form and we'll get back to you.</p>
</div>
<div class="contact-card">
<h4><i class="fas fa-map-marker-alt"></i> Address: </h4>
<p><a href="#" target="_blank">529 & 530, 5th floor, Golden Trade Centre, New Rajendra Nagar, Raipur (C.G.)</a></p>
</div>
<div class="contact-card">
<h4><i class="fas fa-envelope"></i> Email: </h4>
<p><a href="mailto:sales@galaxydigipay.in"><span class="__cf_email__" >sales@galaxydigipay.in</span></a></p>
</div>
<div class="contact-card">
<h4><i class="fas fa-phone"></i> Call: </h4>
<p><a href="tel:7880022298">7880022298</a></p>
</div>
<div class="contact-card">
<h4>Follow Us:</h4>
<ul>
<li><a href="https://www.facebook.com/Galaxydigipay/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://www.youtube.com/channel/UCIusgzQhtVKn21JplKFix8A" target="_blank"><i class="fab fa-youtube"></i></a></li>
<li><a href="https://www.instagram.com/galaxydigipay/" target="_blank"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="contact-page-form-area pt-30">
<form  method="post" action="contact_submit" enctype="multipart/form-data">
    @csrf
<div class="row">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Name*" id="name" name="name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email*" id="email" required data-error="Please enter your Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="number" name="phone" class="form-control" placeholder="Phone Number*" id="phone_number" required data-error="Please enter your phone number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" name="company_name" class="form-control" placeholder="Company Name*" id="company_name" required data-error="Please enter your Company Name">
    <div class="help-block with-errors"></div>
    </div>
    </div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" name="city" class="form-control" placeholder="City" id="msg_subject" required data-error="Please enter your City">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" name="state" class="form-control" placeholder="State" id="website" required data-error="Please enter your State">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-12">
<div class="form-group">
<textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30" rows="5" required data-error="Please enter your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-12">
<button class="default-button default-button-3" type="submit"><span>Send Message <i class="fas fa-arrow-right"></i></span></button>
<div id="msgSubmit" class="h6 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912059.828769012!2d79.17143599548255!3d20.60879925444359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd9b772b763d%3A0xa46e9ca45d9030ea!2sGolden%20Trade%20Centre!5e0!3m2!1sen!2sin!4v1649933938900!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


@include('footer')

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/TweenMax.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/countdown.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/barfiller.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>