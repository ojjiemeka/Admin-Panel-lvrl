@extends('layouts.welcome')

@section('content')
    <div id="site">

        <input type="checkbox" name="mobile-nav-toggle" id="mobileNavToggle" class="mobile-nav-toggle-box hidden" />

        @include('components.indexHeader')

        <div class="body-inner">
         <!-- banner start-->
         <!-- banner end-->
         <div id="page-banner-area" class="page-banner-area">
             <!-- Subpage title start -->
            
          </div><!-- Page Banner end -->
    
          <section id="ts-speakers" class="ts-speakers speaker-classic mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title text-center">
                            Meet Top Celebrities
                        </h2>
                    </div><!-- col end-->
                </div><!-- row end-->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="{{ asset('eventBooking/images/speakers/speaker2.jpg') }}"
                                    alt="">
                                <a href="#popup_2" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="#">Melisa Lundryn</a></h3>
                                <p>
                                    Lead Designer, Payol
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_2" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="{{ asset('eventBooking/images/speakers/speaker2.jpg') }}"
                                            alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <div class="mb-2">
                                            <i class='bx bxs-star gold'></i>
                                        <i class='bx bxs-star gold'></i>
                                        <i class='bx bxs-star gold'></i>
                                        <i class='bx bxs-star gold'></i>
                                        <i class='bx bxs-star gold'></i>
                                        </div>
                                        <span class="speakder-designation">Born</span>
                                        <span class="speakder-designation">Country</span>
                                        <div class="widget asq-form">
                                            <form action="#" method="POST"  class="ts-form">
                                               <input type="text" class="form-control" name="name" placeholder="Your Name" id="ts_contact_name">
                                               <input type="email" class="form-control" name="email" placeholder="Your Email" id="ts_contact_email">
                                               <textarea name="massage" placeholder="Your Question" id="x_contact_massage" class="form-control message-box"
                                                  cols="30" rows="10"></textarea>
                                               <div class="ts-btn-wraper">
                                                  <input type="submit" class="btn" id="ts_contact_submit" value="SEND QUESTION">
                                               </div>
                                            </form>
                                         </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                    <div class="col-lg-3 col-md-6">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="{{ asset('eventBooking/images/speakers/speaker3.jpg') }}"
                                    alt="">
                                <a href="#popup_3" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="#">Agaton Johnsson</a></h3>
                                <p>
                                    Developer Expert
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_3" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="{{ asset('eventBooking/images/speakers/speaker3.jpg') }}"
                                            alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                       <div>
                                        <span class="speakder-designation">Actor</span>
                                        <span class="speakder-designation">Comedian</span>
                                       </div>
                                        <a href="{{route('bookings')}}" class="bookTxt">Book Now</a>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div>  <!-- col end-->
                </div><!-- row end-->
            </div><!-- container end-->

            <!-- shap img-->
            <div class="speaker-shap">
                <img class="shap1" src="{{ asset('eventBooking/images/shap/home_speaker_memphis1.png') }}"
                    alt="">
                <img class="shap2" src="{{ asset('eventBooking/images/shap/home_speaker_memphis2.png') }}"
                    alt="">
            </div>
            <!-- shap img end-->
        </section>
 
           <!-- ts footer area start-->
        @include('components.indexFooter')
        <!-- ts footer area end-->
     </div>
@endsection