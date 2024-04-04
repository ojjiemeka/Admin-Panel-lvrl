@extends('layouts.welcome')

@section('content')
<div class="body-inner">
    <!-- Header start -->
    
    <!--/ Header end -->

    <!-- banner start-->
    @include('components.indexHeader')
    <!-- banner end-->

    <section class="hero-area banner-6">
      <div class="banner-item">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="banner-content-wrap">
                     <h2 class="sub-title">#The leading startup event</h2>
                     <h2 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                         Greater <br> than Avatars
                     </h2>
                     <div class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                         <div class="icon">
                              <img src="{{asset('exhibz/images/shap/Shape-1.png')}}" alt="">   
                         </div>
                           <h3>Gotham Hall, 1356 Broadway, NY 10018, USA</h3>
                     </div>
                     <!-- Countdown end -->
                     <div class="ts-count-down">
                         <div class="countdown clearfix">
                             <div class="counter-item">
                                 <span class="days">00</span>
                                 <div class="smalltext">Days</div>
                                 <b>:</b>
                             </div>
                             <div class="counter-item">
                                 <span class="hours">00</span>
                                 <div class="smalltext">Hours</div>
                                 <b>:</b>
                             </div>
                             <div class="counter-item">
                                 <span class="minutes">00</span>
                                 <div class="smalltext">Minutes</div>
                                 <b>:</b>
                             </div>
                             <div class="counter-item">
                                 <span class="seconds">00</span>
                                 <div class="smalltext">Seconds</div>
                             </div>
                         </div>
                     </div>
                     <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                             <a href="#" class="btn">Buy Ticket</a>
                             <a href="#" class="btn btn-ticket"> <i class="fa fa-plus-circle" aria-hidden="true"></i> ADD TO CALENDAR</a>
                     </div>

                  </div>
                  <!-- Banner content wrap end -->
               </div><!-- col end-->
            </div><!-- row end-->
         </div>
         <!-- Container end -->
      </div>
   </section>

    <!-- ts-exprience start -->
    <section class="ts-exprience">
          <div class="container">
              <div class="row justify-content-center text-center">
                  <div class="col-lg-8">
                      <div class="ts-exprience-content">
                          <h2 class="sub-title">The Experience</h2>
                          <h2>To create something exceptional, your mindset must be relentlessly focused on the smallest detail.</h2>
                      </div>
                  </div><!-- col end -->
              </div>
              <!-- row end -->
              <div class="scroll-image">
                  <div class="ts-scroll-image image-a scrollme">
                      <div class="animateme" data-when="span" data-from="0" data-to="1" data-translatey="-500" data-translatex="-350"> 
                          <img src="images/gallery/img_1.png" alt="">
                      </div>
                  </div>

                  <div class="ts-scroll-image image-b scrollme">
                      <div class="animateme" data-when="span" data-from="0" data-to="1" data-translatex="600"> 
                          <img src="images/gallery/img_2.png" alt="">
                      </div>
                  </div>
                  <div class="ts-scroll-image image-c scrollme">
                      <div class="animateme" data-when="span" data-from="0" data-to="1" data-translatex="-600"> 
                          <img src="images/gallery/img_3.png" alt="">
                      </div>
                  </div>
                  <div class="ts-scroll-image image-d scrollme">
                      <div class="animateme" data-when="span" data-from="0" data-to="1" data-translatey="600"> 
                          <img src="images/gallery/img_4.png" alt="">
                      </div>
                  </div>
                  <div class="ts-scroll-image image-e scrollme">
                      <div class="animateme" data-when="span" data-from="0" data-to="1" data-translatey="-350" data-translatex="400"> 
                          <img src="images/gallery/img_5.png" alt="">
                      </div>
                  </div>
              </div>
          </div>
    </section>
    <!-- end ts-exprience -->

  <!-- ts funfact start-->
  <section class="ts-funfact" style="background-image: url('../')">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                  <h3 class="funfact-num"><span class="counterUp" data-counter="43">43</span>+</h3>
                  <h4 class="funfact-title">Our Visionary
                      Speakers</h4>
                  </div>
              </div><!-- col end-->
              <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                  <h3 class="funfact-num"><span class="counterUp" data-counter="62">62</span></h3>
                  <h4 class="funfact-title">International Sponsors</h4>
                  </div>
              </div><!-- col end-->
              <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                  <h3 class="funfact-num"><span class="counterUp" data-counter="28">28</span>+</h3>
                  <h4 class="funfact-title">Workshops
                      We offer</h4>
                  </div>
              </div><!-- col end-->
              <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                  <h3 class="funfact-num"><span class="counterUp" data-counter="950">950</span>+</h3>
                  <h4 class="funfact-title">Event
                      Participants</h4>
                  </div>
              </div><!-- col end-->
          </div><!-- row end-->
      </div><!-- container end-->
  </section>
  <!-- ts funfact end-->

  <!-- ts speaker start-->
  <section id="ts-speakers" class="ts-speakers speaker-classic" style="background-image:url(images/speakers/speaker_bg.png)">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 mx-auto">
               <h2 class="section-title text-center">
                  <span>Listen to the</span>
                  Event Speakers
               </h2>
            </div><!-- col end-->
         </div><!-- row end-->
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker1.jpg" alt="">
                     <a href="#popup_1" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Fredric Martinsson</a></h3>
                     <p>
                        Founder, Edilta
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="images/speakers/speaker1.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                           <p>
                              World is committed to making participation in the event a harass ment free experience
                              for everyone, regardless of level experience gender, gender identity and expression
                           </p>
                           <h4 class="session-name">
                              Sessions by David
                           </h4>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                10.30 - 11.30 am
                                          </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                   10.30 - 11.30 am
                                             </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="ts-speakers-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div><!-- ts-speaker-popup-content end-->
                     </div><!-- col end-->
                  </div><!-- row end-->
               </div><!-- popup end-->
            </div> <!-- col end-->
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker2.jpg" alt="">
                     <a href="#popup_2"  class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
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
                           <img src="images/speakers/speaker2.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                           <p>
                              World is committed to making participation in the event a harass ment free experience
                              for everyone, regardless of level experience gender, gender identity and expression
                           </p>
                           <h4 class="session-name">
                              Sessions by David
                           </h4>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="ts-speakers-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div><!-- ts-speaker-popup-content end-->
                     </div><!-- col end-->
                  </div><!-- row end-->
               </div><!-- popup end-->
            </div> <!-- col end-->
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker3.jpg" alt="">
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
                           <img src="images/speakers/speaker3.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                           <p>
                              World is committed to making participation in the event a harass ment free experience
                              for everyone, regardless of level experience gender, gender identity and expression
                           </p>
                           <h4 class="session-name">
                              Sessions by David
                           </h4>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="ts-speakers-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div><!-- ts-speaker-popup-content end-->
                     </div><!-- col end-->
                  </div><!-- row end-->
               </div><!-- popup end-->
            </div> <!-- col end-->
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker4.jpg" alt="">
                     <a href="#popup_4" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Rebecca Henrikon</a></h3>
                     <p>
                        Founder, Cards
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_4" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="images/speakers/speaker4.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                           <p>
                              World is committed to making participation in the event a harass ment free experience
                              for everyone, regardless of level experience gender, gender identity and expression
                           </p>
                           <h4 class="session-name">
                              Sessions by David
                           </h4>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="ts-speakers-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div><!-- ts-speaker-popup-content end-->
                     </div><!-- col end-->
                  </div><!-- row end-->
               </div><!-- popup end-->
            </div> <!-- col end-->
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker5.jpg" alt="">
                     <a href="#popup_5" class="view-speaker  ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Fredric Martinsson</a></h3>
                     <p>
                        Founder, Edilta
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_5" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="images/speakers/speaker5.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                           <p>
                              World is committed to making participation in the event a harass ment free experience
                              for everyone, regardless of level experience gender, gender identity and expression
                           </p>
                           <h4 class="session-name">
                              Sessions by David
                           </h4>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="ts-speakers-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div><!-- ts-speaker-popup-content end-->
                     </div><!-- col end-->
                  </div><!-- row end-->
               </div><!-- popup end-->
            </div> <!-- col end-->
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker6.jpg" alt="">
                     <a href="#popup_6" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Lundryn Melisa </a></h3>
                     <p>
                        Lead Designer, Payol
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_6" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="images/speakers/speaker1.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                           <p>
                              World is committed to making participation in the event a harass ment free experience
                              for everyone, regardless of level experience gender, gender identity and expression
                           </p>
                           <h4 class="session-name">
                              Sessions by David
                           </h4>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="ts-speakers-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div><!-- ts-speaker-popup-content end-->
                     </div><!-- col end-->
                  </div><!-- row end-->
               </div><!-- popup end-->
            </div> <!-- col end-->
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker7.jpg" alt="">
                     <a href="#popup_7" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Johnsson Agaton </a></h3>
                     <p>
                        Developer Expert
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_7" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="images/speakers/speaker7.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                           <p>
                              World is committed to making participation in the event a harass ment free experience
                              for everyone, regardless of level experience gender, gender identity and expression
                           </p>
                           <h4 class="session-name">
                              Sessions by David
                           </h4>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="speaker-session-info">
                                    <h4>Day 1</h4>
                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                    <p>
                                       Marketing Matters
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="ts-speakers-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                        </div><!-- ts-speaker-popup-content end-->
                     </div><!-- col end-->
                  </div><!-- row end-->
               </div><!-- popup end-->
            </div> <!-- col end-->

            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="images/speakers/speaker8.jpg" alt="">
                     <a href="#" class="view-speaker">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Henrikon Rebecca </a></h3>
                     <p>
                        Founder, Cards
                     </p>
                  </div>
               </div>
            </div> <!-- col end-->
         </div><!-- row end-->
      </div><!-- container end-->

      <!-- shap img-->
      <div class="speaker-shap">
         <img class="shap1" src="images/shap/home_speaker_memphis1.png" alt="">
         <img class="shap2" src="images/shap/home_speaker_memphis2.png" alt="">
      </div>
      <!-- shap img end-->
  </section>
  <!-- ts speaker end-->

  <!-- ts experience start-->
  <section id="ts-experiences" class="ts-experiences">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 no-padding">
                  <div class="exp-img" style="background-image:url(images/cta_img.jpg)">
                  </div>
              </div><!-- col end-->
              <div class="col-lg-6 no-padding align-self-center">
                  <div class="ts-exp-wrap">
                  <div class="ts-exp-content">
                      <h2 class="column-title">
                          <span>Get Experience</span>
                          Shift your perspective on
                          digital business
                      </h2>
                      <p>
                          How  you transform your business as technology, consumer, habits industry dynamic s change? Find out from those leading the charge.
                      </p>
                  </div>
                  </div>

              </div><!-- col end-->
          </div><!-- row end-->
      </div><!-- container fluid end-->
  </section>
  <!-- ts experience end-->


  <!-- ts schedule start-->
  <section class="ts-schedule">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mx-auto">
                  <h2 class="section-title">
                  <span>Schedule Details</span>
                  Event Schedules
                  </h2>
                  <div class="ts-schedule-nav">
                  <ul class="nav nav-tabs justify-content-center" role="tablist">
                      <li class="nav-item">
                          <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                              <h3>5th June</h3>
                              <span>Friday</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="" href="#date2" title="Click Me" role="tab" data-toggle="tab">        <h3>6th June</h3>
                              <span>Saturday</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="" href="#date3" title="Click Me" role="tab" data-toggle="tab">
                              <h3>7th June</h3>
                              <span>Sunday</span>
                          </a>
                      </li>
                  </ul>
                  <!-- Tab panes -->
                  </div>
              </div><!-- col end-->

          </div><!-- row end-->
          <div class="row">
              <div class="col-lg-12">
                  <div class="tab-content schedule-tabs schedule-tabs-item">
                  <div role="tabpanel" class="tab-pane active" id="date1">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker1.jpg" alt="">
                              <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                              <h3 class="schedule-slot-title">Marketing Matters</h3>
                              <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker2.jpg" alt="">
                              <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                              <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                              <h4 class="schedule-slot-name">@ Johnsson Agaton</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker3.jpg" alt="">
                              <span class="schedule-slot-time">12.30 - 01.30 PM</span>
                              <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                              <h4 class="schedule-slot-name">@ Lundryn Melisa</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                              <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                              <h3 class="schedule-slot-title">Human Centered Design</h3>
                              <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                      </div><!-- row end-->
                      <div class="schedule-listing-btn">
                          <a href="#" class="btn">More Details</a>
                      </div>
                  </div><!-- tab pane end-->

                  <div role="tabpanel" class="tab-pane" id="date2">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker5.jpg" alt="">
                              <span class="schedule-slot-time">02.30 - 03.30 PM</span>
                              <h3 class="schedule-slot-title">Marketing Matters</h3>
                              <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker6.jpg" alt="">
                              <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                              <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                              <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker7.jpg" alt="">
                              <span class="schedule-slot-time">04.30 - 05.30 PM</span>
                              <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                              <h4 class="schedule-slot-name">@ Melisa Lundryn</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker8.jpg" alt="">
                              <span class="schedule-slot-time">05.30 - 06.30 PM</span>
                              <h3 class="schedule-slot-title">Human Centered Design</h3>
                              <h4 class="schedule-slot-name">@ Agaton Johnsson</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                      </div><!-- row end-->
                      <div class="schedule-listing-btn">
                          <a href="#" class="btn">More Details</a>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="date3">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker1.jpg" alt="">
                              <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                              <h3 class="schedule-slot-title">Marketing Matters</h3>
                              <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker2.jpg" alt="">
                              <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                              <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                              <h4 class="schedule-slot-name">@ Hall Building</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker3.jpg" alt="">
                              <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                              <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                              <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                          <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                              <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                              <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                              <h3 class="schedule-slot-title">Human Centered Design</h3>
                              <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                              <p>
                                  How you transform your business technolog consumer habits industry dynamics change
                                  Find out from those leading the charge How you
                              </p>
                              </div>
                          </div><!-- col end-->
                      </div><!-- row end-->
                      <div class="schedule-listing-btn">
                          <a href="#" class="btn">More Details</a>
                      </div>
                  </div>
                  </div>

              </div>
          </div>
      </div><!-- container end-->
  </section>
  <!-- ts schedule end-->

       
  <!-- ts pricing start-->
  <section class="ts-pricing ts-pricing-bg">
      <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2 class="section-title white">
                  <span>Pricing Plans</span>
                  Get your Ticket
              </h2>
          </div><!-- section title end-->
      </div><!-- col end-->
      <!-- row end-->
      <div class="row">
          <div class="col-lg-4">
              <div class="ts-pricing-item">
                  <div class="ts-pricing-header">
                  <i class="icon-pricing-1Asset-1"></i>
                  <h2 class="ts-pricing-name">Early Bird</h2>
                  <h3 class="ts-pricing-price">
                      <img class="currency" src="images/pricing/dollar.png" alt="">
                      <span>39.9</span>
                  </h3>
                  </div>
                  <p>
                  How you transform your business as technology, consumer, habits industrys dynamic
                  </p>
                  <a href="#" class="btn">Sold Out</a>
              </div>
          </div><!-- col end-->
          <div class="col-lg-4">
              <div class="ts-pricing-item active">
                  <div class="ts-pricing-header">
                  <i class="icon-pricing-2Asset-2"></i>
                  <h2 class="ts-pricing-name">Regular</h2>
                  <h3 class="ts-pricing-price">
                      <img class="currency" src="images/pricing/dollar.png" alt="">
                      <span>59.9</span>
                  </h3>
                  </div>
                  <p>
                  How you transform your business as technology, consumer, habits industrys dynamic
                  </p>
                  <a href="#" class="btn">Buy Ticket</a>
              </div>
          </div><!-- col end-->
          <div class="col-lg-4">
              <div class="pricing-item">
                  <div class="ts-pricing-item">
                  <div class="ts-pricing-header">
                      <i class="icon-pricing-3Asset-3"></i>
                      <h2 class="ts-pricing-name">Platinum</h2>
                      <h3 class="ts-pricing-price">
                          <img class="currency" src="images/pricing/dollar.png" alt="">
                          <span>99.9</span>
                      </h3>
                  </div>
                  <p>
                      How you transform your business as technology, consumer, habits industrys dynamic
                  </p>
                  <a href="#" class="btn">Buy Ticket</a>
                  </div>
              </div>
          </div><!-- col end-->
      </div>
      </div><!-- container end-->
      <div class="speaker-shap">
      <img class="shap2" src="images/shap/pricing_memphis1.png" alt="">
      </div>
  </section>
  <!-- ts pricing end-->


  <!-- ts blog start-->
  <section class="ts-blog section-bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="section-title">
                  <span>Info Update</span>
                  Latest News
                  </h2>
              </div><!-- col end-->
          </div><!-- row end-->
          <div class="row">
              <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                  <div class="post-media post-image">
                      <a href="#"><img src="images/blog/blog1.jpg" class="img-fluid" alt=""></a>
                  </div>

                  <div class="post-body">
                      <div class="post-meta">
                          <span class="post-author">
                          <a href="#">BY Admin</a>
                          </span>

                          <div class="post-meta-date">
                              October 8, 2018
                          </div>
                      </div>
                      <div class="entry-header">
                          <h2 class="entry-title">
                              <a href="#">Check upcoming Events</a>
                          </h2>
                      </div><!-- header end -->

                      <div class="entry-content">
                          <p>How you transform your business asap technology, consumer,</p>
                      </div>

                      <div class="post-footer">
                          <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                      </div>

                  </div><!-- post-body end -->
                  </div><!-- post end-->
              </div><!-- col end-->
              <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="post">
                  <div class="post-media post-image">
                      <a href="#"><img src="images/blog/blog2.jpg" class="img-fluid" alt=""></a>
                  </div>

                  <div class="post-body">
                      <div class="post-meta">
                          <span class="post-author">
                              <a href="#">BY Admin</a>
                              </span>

                          <div class="post-meta-date">
                              October 8, 2018
                          </div>
                      </div>
                      <div class="entry-header">
                          <h2 class="entry-title">
                              <a href="#">Adding a New Digital</a>
                          </h2>
                      </div><!-- header end -->

                      <div class="entry-content">
                          <p>How you transform your business asap technology, consumer,</p>
                      </div>

                      <div class="post-footer">
                          <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                      </div>

                  </div><!-- post-body end -->
                  </div><!-- post end-->
              </div><!-- col end-->
              <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                  <div class="post">
                  <div class="post-media post-image">
                      <a href="#"><img src="images/blog/blog3.jpg" class="img-fluid" alt=""></a>
                  </div>

                  <div class="post-body">
                      <div class="post-meta">
                          <span class="post-author">
                                  <a href="#">BY Admin</a>
                              </span>

                          <div class="post-meta-date">
                              October 8, 2018
                          </div>
                      </div>
                      <div class="entry-header">
                          <h2 class="entry-title">
                              <a href="#">West Elm At Evantor</a>
                          </h2>
                      </div><!-- header end -->

                      <div class="entry-content">
                          <p>How you transform your business asap technology, consumer,</p>
                      </div>

                      <div class="post-footer">
                          <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                      </div>

                  </div><!-- post-body end -->
                  </div><!-- post end-->
              </div><!-- col end-->
          </div><!-- row end-->
      </div><!-- container end-->
      <!-- shap image-->
      <div class="speaker-shap">
          <img class="shap2" src="images/shap/news_memphis2.png" alt="">
          <img class="shap1" src="images/shap/news_memphis1.png" alt="">
      </div>
  </section>
  <!-- ts blog end-->

  <!-- ts sponsors start-->
  <section class="ts-intro-sponsors" style="background-image: url(images/sponsors/sponsor_img.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h2 class="section-title white">
                  <span>Who helps us</span>
                  Our Sponsors
               </h2><!-- section title end-->
            </div><!-- col end-->
         </div><!-- row end-->
         <div class="row">
            <div class="col-lg-12">
               <div class="sponsors-logo text-center">
                  <a href="#"><img src="images/sponsors/sponsor1.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor2.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor3.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor4.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor5.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor6.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor7.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor8.png" alt=""></a>
                  <a href="#"><img src="images/sponsors/sponsor9.png" alt=""></a>
                  <div class="sponsor-btn text-center">
                     <a href="#" class="btn">Become a Sponsor</a>
                  </div>
               </div><!-- sponsors logo end-->
            </div><!-- col end-->
         </div><!-- row end-->
      </div><!-- container end-->
  </section>
  <!-- ts sponsors end-->

    <!-- ts map direction start-->
    <section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
          <div class="container">
             <div class="row">
                <div class="col-lg-5">
                   <h2 class="column-title">
                      <span>Reach us</span>
                      Get Direction to the
                      Event Hall
                   </h2>
 
                   <div class="ts-map-tabs">
                      <ul class="nav" role="tablist">
                         <li class="nav-item">
                            <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Venue</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Time</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#references" role="tab" data-toggle="tab">How to get there</a>
                         </li>
                      </ul>
 
                      <!-- Tab panes -->
                      <div class="tab-content direction-tabs">
                         <div role="tabpanel" class="tab-pane active" id="profile">
                            <div class="direction-tabs-content">
                               <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                               <p class="derecttion-vanue">
                                  1Hd- 50, 010 Avenue, NY 90001<br/>
                                              United States
                                        </p>
                                  <div class="row">
                                     <div class="col-md-6">
                                        <div class="contact-info-box">
                                           <h3>Tickets info </h3>
                                           <p><strong>Name:</strong> Ronaldo König</p>
                                           <p><strong>Phone:</strong> 009-215-5595</p>
                                           <p><strong>Email: </strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="375e59515877524f565a475b521954585a">[email&#160;protected]</a></p>
                                        </div>
 
                                     </div>
                                     <div class="col-md-6">
                                        <div class="contact-info-box">
                                           <h3>Programme Details </h3>
                                           <p><strong>Name:</strong> Ronaldo König</p>
                                           <p><strong>Phone:</strong> 009-215-5595</p>
                                           <p><strong>Email: </strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ce5e2eae3cce9f4ede1fce0e9a2efe3e1">[email&#160;protected]</a></p>
                                        </div>
                                     </div>
                                  </div><!-- row end-->
                            </div><!-- direction tabs end-->
                         </div><!-- tab pane end-->
                         <div role="tabpanel" class="tab-pane fade" id="buzz">
                            <div class="direction-tabs-content">
                               <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                               <p class="derecttion-vanue">
                                  1Hd- 50, 010 Avenue, NY 90001<br/>
                                                    United States
                                              </p>
                                  <div class="row">
                                     <div class="col-md-6">
                                        <div class="contact-info-box">
                                           <h3>Tickets info </h3>
                                           <p><strong>Name:</strong> Ronaldo König</p>
                                           <p><strong>Phone:</strong> 009-215-5595</p>
                                           <p><strong>Email: </strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d44434b426d48554c405d4148034e4240">[email&#160;protected]</a></p>
                                        </div>
 
                                     </div>
                                     <div class="col-md-6">
                                        <div class="contact-info-box">
                                           <h3>Programme Details </h3>
                                           <p><strong>Name:</strong> Ronaldo König</p>
                                           <p><strong>Phone:</strong> 009-215-5595</p>
                                           <p><strong>Email: </strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5dcdbd3daf5d0cdd4d8c5d9d09bd6dad8">[email&#160;protected]</a></p>
                                        </div>
                                     </div>
                                  </div><!-- row end-->
                            </div><!-- direction tabs end-->
                         </div>
                         <div role="tabpanel" class="tab-pane fade" id="references">
                            <div class="direction-tabs-content">
                               <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                               <p class="derecttion-vanue">
                                  1Hd- 50, 010 Avenue, NY 90001<br/>
                                                    United States
                                              </p>
                                  <div class="row">
                                     <div class="col-md-6">
                                        <div class="contact-info-box">
                                           <h3>Tickets info </h3>
                                           <p><strong>Name:</strong> Ronaldo König</p>
                                           <p><strong>Phone:</strong> 009-215-5595</p>
                                           <p><strong>Email: </strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b02050d042b0e130a061b070e45080406">[email&#160;protected]</a></p>
                                        </div>
 
                                     </div>
                                     <div class="col-md-6">
                                        <div class="contact-info-box">
                                           <h3>Programme Details </h3>
                                           <p><strong>Name:</strong> Ronaldo König</p>
                                           <p><strong>Phone:</strong> 009-215-5595</p>
                                           <p><strong>Email: </strong> <a href="https://demo.themewinter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e9eee6efc0e5f8e1edf0ece5aee3efed">[email&#160;protected]</a></p>
                                        </div>
                                     </div>
                                  </div><!-- row end-->
                            </div><!-- direction tabs end-->
                         </div>
                      </div>
 
                   </div><!-- map tabs end-->
 
                </div><!-- col end-->
                <div class="col-lg-6 offset-lg-1">
                   <div class="ts-map">
                      <div class="mapouter">
                         <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9028133968723!2d-73.99208268505396!3d40.74216397932861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a4119ce269%3A0x9dec0c979b575972!2sEataly+NYC+Flatiron!5e0!3m2!1sen!2sbd!4v1541577288827"></iframe>
                         </div>
 
                      </div>
                   </div>
                </div>
             </div><!-- col end-->
          </div><!-- container end-->
          <div class="speaker-shap">
             <img class="shap1" src="images/shap/Direction_memphis3.png" alt="">
             <img class="shap2" src="images/shap/Direction_memphis2.png" alt="">
             <img class="shap3" src="images/shap/Direction_memphis4.png" alt="">
             <img class="shap4" src="images/shap/Direction_memphis1.png" alt="">
          </div>
       </section>
       <!-- ts map direction end-->
 
       <!-- ts footer area start-->
       @include('components.indexFooter')
       <!-- ts footer area end-->
    </div>
    
@endsection