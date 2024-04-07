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
    
          <section class="ts-pricing gradient">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <h2 class="section-title white">
                        Become A VIP
                     </h2>
                  </div><!-- section title end-->
               </div><!-- col end-->
               <!-- row end-->
               <div class="row">
                  <div class="col-lg-4">
                     <div class="pricing-item disebled">
                        <img class="pricing-dot " src="{{asset('eventBooking/images/pricing/dot.png')}}" alt="">
                        <div class="ts-pricing-box">
   
                           <div class="ts-pricing-header">
                              <h2 class="ts-pricing-name">Early Bird</h2>
                              <h3 class="ts-pricing-price">
                                 <span class="currency">$</span>219
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p class="amount-progres-text">Available tickets for this price</p>
                              <div class="ts-progress">
                                 <div class="ts-progress-inner" style="width: 100%"></div>
                              </div>
                              <p class="ts-pricing-value">500/500</p>
                           </div>
                           <div class="promotional-code">
                              <p class="promo-code-text">Enter Promotional Code</p>
                              <a href="#" class="btn pricing-btn">Sold Out</a>
                              <p class="vate-text">All prices exclude 25% VAT</p>
                           </div>
                        </div><!-- ts pricing box-->
                        <img class="pricing-dot1 " src="{{asset('eventBooking/images/pricing/dot.png')}}" alt="">
                     </div>
                  </div><!-- col end-->
                  <div class="col-lg-4">
                     <div class="pricing-item">
                        <img class="pricing-dot " src="{{asset('eventBooking/images/pricing/dot.png')}}" alt="">
                        <div class="ts-pricing-box">
                           <span class="big-dot"></span>
                           <div class="ts-pricing-header">
                              <h2 class="ts-pricing-name">Regular</h2>
                              <h3 class="ts-pricing-price">
                                 <span class="currency">$</span>399
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p class="amount-progres-text">Available tickets for this price</p>
                              <div class="ts-progress">
                                 <div class="ts-progress-inner" style="width: 75%"></div>
                              </div>
                              <p class="ts-pricing-value">350/500</p>
                           </div>
                           <div class="promotional-code">
                              <p class="promo-code-text">Enter Promotional Code</p>
                              <a href="#" class="btn pricing-btn">Buy Ticket</a>
                              <p class="vate-text">All prices exclude 25% VAT</p>
                           </div>
                        </div><!-- ts pricing box-->
                        <img class="pricing-dot1 " src="{{asset('eventBooking/images/pricing/dot.png')}}" alt="">
                     </div>
                  </div><!-- col end-->
                  <div class="col-lg-4">
                     <div class="pricing-item">
                        <img class="pricing-dot " src="{{asset('eventBooking/images/pricing/dot.png')}}" alt="">
                        <div class="ts-pricing-box">
                           <span class="big-dot"></span>
                           <div class="ts-pricing-header">
                              <h2 class="ts-pricing-name">Platinum</h2>
                              <h3 class="ts-pricing-price">
                                 <span class="currency">$</span>699
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p class="amount-progres-text">Available tickets for this price</p>
                              <div class="ts-progress">
                                 <div class="ts-progress-inner" style="width: 50%"></div>
                              </div>
                              <p class="ts-pricing-value">250/500</p>
                           </div>
                           <div class="promotional-code">
                              <p class="promo-code-text">Enter Promotional Code</p>
                              <a href="#" class="btn pricing-btn">Buy Ticket</a>
                              <p class="vate-text">All prices exclude 25% VAT</p>
                           </div>
                        </div><!-- ts pricing box-->
                        <img class="pricing-dot1 " src="{{asset('eventBooking/images/pricing/dot.png')}}" alt="">
                     </div>
                  </div><!-- col end-->
               </div>
            </div><!-- container end-->
            <div class="speaker-shap">
               <img class="shap2" src="{{asset('eventBooking/images/shap/pricing_memphis1.png')}}" alt="">
            </div>
         </section>
 
           <!-- ts footer area start-->
        @include('components.indexFooter')
        <!-- ts footer area end-->
     </div>
@endsection