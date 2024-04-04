@extends('layouts.welcome')

@section('content')
<div class="body-inner">
    <!-- banner start-->
    @include('components.indexHeader')

    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
        <!-- Subpage title start -->
        <div class="page-banner-title">
           <div class="text-center">
              <h2>Contact Us</h2>
              <ol class="breadcrumb">
                 <li>
                    <a href="#">Exibit /</a>
                 </li>
                 <li>
                    Contact Us
                 </li>
              </ol>
           </div>
        </div><!-- Subpage title end -->
     </div><!-- Page Banner end -->

     <!-- ts intro start -->
     <section class="ts-contact">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 mx-auto">
                 <h2 class="section-title text-center">
                    <span>Get Information</span>
                    Contact Information
                 </h2>
              </div><!-- col end-->
           </div>
           <div class="row">
              <div class="col-lg-4">
                 <div class="single-intro-text single-contact-feature">
                    <h3 class="ts-title">Tickets info</h3>
                    <p>
                       <strong>Name:</strong> Ronaldo König
                    </p>
                    <p>
                       <strong>Phone:</strong> 009-215-5595
                    </p>
                    <p>
                       <strong>Email:</strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ae3e4ece5caeff2ebe7fae6efa4e9e5e7">[email&#160;protected]</a>
                    </p>
                    <span class="count-number fa fa-paper-plane"></span>
                 </div><!-- single intro text end-->
                 <div class="border-shap left"></div>
              </div><!-- col end-->
              <div class="col-lg-4">
                 <div class="single-intro-text single-contact-feature">
                    <h3 class="ts-title">Partnerships info</h3>
                    <p>
                       <strong>Name:</strong> Ronaldo König
                    </p>
                    <p>
                       <strong>Phone:</strong> 009-215-5595
                    </p>
                    <p>
                       <strong>Email:</strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="640d0a020b24011c05091408014a070b09">[email&#160;protected]</a>
                    </p>
                    <span class="count-number fa fa-paper-plane"></span>
                 </div><!-- single intro text end-->
                 <div class="border-shap left"></div>
              </div><!-- col end-->
              <div class="col-lg-4">
                 <div class="single-intro-text single-contact-feature">
                    <h3 class="ts-title">Programme Details</h3>
                    <p>
                       <strong>Name:</strong> Ronaldo König
                    </p>
                    <p>
                       <strong>Phone:</strong> 009-215-5595
                    </p>
                    <p>
                       <strong>Email:</strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50393e363f103528313d203c357e333f3d">[email&#160;protected]</a>
                    </p>
                    <span class="count-number fa fa-paper-plane"></span>
                 </div><!-- single intro text end-->
                 <div class="border-shap left"></div>
              </div><!-- col end-->

           </div><!-- row end-->
        </div><!-- container end-->
        <div class="speaker-shap">
              <img class="shap2" src="images/shap/home_schedule_memphis1.png" alt="">
           </div>
     </section>
     <!-- ts contact end-->

     <section class="ts-contact-map no-padding">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12 no-padding">
                 <div class="mapouter">
                    <div class="gmap_canvas">
                               <!-- <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Park%20Street%2C%20Jacksonville%2C%20IL%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                   frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4238.075542978786!2d-0.14258530106536377!3d50.83163078652512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487585765dd0f7f3%3A0x5a144a31ef19ef9d!2sJurys+Inn+Brighton!5e0!3m2!1sen!2sbd!4v1541576429082" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                   <!-- <a href="https://www.pureblack.de">werbeagentur</a></div> -->
          
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section class="ts-contact-form">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 mx-auto">
                 <h2 class="section-title text-center">
                    <span>Have Questions?</span>
                    Send Message
                 </h2>
              </div><!-- col end-->
           </div>
           <div class="row">
              <div class="col-lg-8 mx-auto">
                 <form id="contact-form" class="contact-form" action="https://demo.themewinter.com/html/exhibz/contact-form.php" method="post">
                    <div class="error-container"></div>
                    <div class="row">
                       <div class="col-md-6">
                          <div class="form-group">
                             <input class="form-control form-control-name" placeholder="First Name" name="name" id="f-name"
                                type="text" required>
                          </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <input class="form-control form-control-name" placeholder="Last Name" name="name" id="l-name"
                                type="text" required>
                          </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <input class="form-control form-control-subject" placeholder="Subject" name="subject" id="subject"
                                required>
                          </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <input class="form-control form-control-email" placeholder="Email" name="email" id="email"
                                type="email" required>
                          </div>
                       </div>

                    </div>
                    <div class="form-group">
                       <textarea class="form-control form-control-message" name="message" id="message" placeholder="Your message...*"
                          rows="6" required></textarea>
                    </div>
                    <div class="text-center"><br>
                       <button class="btn" type="submit"> Send Message</button>
                    </div>
                 </form><!-- Contact form end -->
              </div>
           </div>
        </div>
        <div class="speaker-shap">
           <img class="shap1" src="images/shap/home_schedule_memphis2.png" alt="">
        </div>
       </section>

         <!-- ts footer area start-->
         @include('components.indexFooter')
         <!-- ts footer area end-->
</div>
@endsection