@extends('layouts.default')

@section('content')
<div class="page-title">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="page-title-text">
<h3>Contact Us</h3>
</div>
</div>
<div class="col-lg-6 col-md-6">
<ul>
<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
<li><i class="fa fa-angle-right"></i></li>
<li class="active">Contact Us</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="contact-area ptb-80">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="contact-box">
<i class="fa fa-map-marker"></i>
<h4>Address</h4>
<p>6000 Universal Blvd, Orlando, FL 32819, USA</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="contact-box">
<i class="fa fa-phone"></i>
<h4>Phone</h4>
<p><a href="#">+001 321 254-5874</a></p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="contact-box">
<i class="fa fa-envelope"></i>
<h4>Email</h4>
<p><a href="#"><span class="__cf_email__" data-cfemail="9cf5f2faf3dcf4f9eef3fef5f7f9b2fff3f1">[email&#160;protected]</span></a></p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="contact-box">
<i class="fa fa-skype"></i>
<h4>Skype</h4>
<p><a href="#">freelance.herobike</a></p>
</div>
</div>
</div>
</div>
</section>


<div class="contact ptb-80">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6">
<form id="contactForm">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="number" id="number" placeholder="Your Phone Number" required data-error="Please enter your phone number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message" required data-error="Write your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="btn btn-primary">Send Message</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div id="map"><iframe width="100%" height="450" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.2145094871134!2d-81.46822275011596!3d28.473085882394976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77ee72bc69fc1%3A0x879fd75a1d0a9ab4!2s6000+Universal+Blvd%2C+Orlando%2C+FL+32819%2C+USA!5e0!3m2!1sen!2sbd!4v1531896865263"></iframe></div>


<section class="partner-area ptb-80">
<div class="container">
<div class="section-title">
<h2>Our <span>Partner</span></h2>
<img src="assets/img/section-title-logo.png" alt="section-title-logo">
</div>
<div class="row">
<div class="partner-slider">
<div class="item">
<a href="#"><img src="assets/img/partner1.png" alt="partner1"></a>
</div>
<div class="item">
<a href="#"><img src="assets/img/partner2.png" alt="partner2"></a>
</div>
<div class="item">
<a href="#"><img src="assets/img/partner3.png" alt="partner3"></a>
</div>
<div class="item">
<a href="#"><img src="assets/img/partner4.png" alt="partner4"></a>
</div>
<div class="item">
<a href="#"><img src="assets/img/partner5.png" alt="partner5"></a>
</div>
<div class="item">
<a href="#"><img src="assets/img/partner6.png" alt="partner6"></a>
</div>
<div class="item">
<a href="#"><img src="assets/img/partner7.png" alt="partner7"></a>
</div>
</div>
</div>
</div>
</section>
    @endsection