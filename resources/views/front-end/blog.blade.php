@extends('Layouts.blog')

@section('content')
<div>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html"><span>Study</span>Lab</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/course" class="nav-link">Course</a></li>
          <li class="nav-item"><a href="/instructor" class="nav-link">Instructor</a></li>
          {{-- <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li> --}}
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item">
            <a href="/students" class="nav-link">
                <button type="button" class="btn btn-primary btn-block text-light shadow">Student Login</button>
            </a>
        </li>
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Our Blog <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Our Blog</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
          </a>
          <div class="text d-block">
           <div class="meta">
            <p>
             <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
             <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
             <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
           </p>
         </div>
         <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
         <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
       </div>
     </div>
   </div>

   <div class="col-lg-4 ftco-animate">
    <div class="blog-entry">
      <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
      </a>
      <div class="text d-block">
       <div class="meta">
        <p>
         <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
         <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
         <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
       </p>
     </div>
     <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
     <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
   </div>
 </div>
</div>
<div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
       <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
       <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
     </p>
   </div>
   <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
   <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>
<div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
       <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
       <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
     </p>
   </div>
   <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
   <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>

<div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
       <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
       <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
     </p>
   </div>
   <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
   <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>
<div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
       <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
       <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
     </p>
   </div>
   <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
   <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>
</div>
<div class="row mt-5">
  <div class="col text-center">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</section>

<footer class="ftco-footer ftco-no-pt">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Help Desk</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Customer Care</a></li>
            <li><a href="#" class="py-2 d-block">Legal Help</a></li>
            <li><a href="#" class="py-2 d-block">Services</a></li>
            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
            <li><a href="#" class="py-2 d-block">Call Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5">
       <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2">Recent Courses</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Computer Engineering</a></li>
          <li><a href="#" class="py-2 d-block">Web Design</a></li>
          <li><a href="#" class="py-2 d-block">Business Studies</a></li>
          <li><a href="#" class="py-2 d-block">Civil Engineering</a></li>
          <li><a href="#" class="py-2 d-block">Computer Technician</a></li>
          <li><a href="#" class="py-2 d-block">Web Developer</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md pt-5">
      <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</div>
@endsection