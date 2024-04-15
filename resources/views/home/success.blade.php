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
    
          <section id="ts-speakers" class="ts-speakers speaker-classic">
            <div class="container">

                <div class="row">
                   <div class="col-lg-6 mx-auto">
                      <div class="error-page text-center">
                         <div class="error-code">
                            <img class="w-100" src="{{asset('eventBooking/images/email-sent.png')}}" alt="">
                         </div>
                         <div class="error-message">
                            <h3>Form Submitted</h3>
                         </div>
                         <div class="error-body">
                            An email will be sent to you shortly<br>
                            <a  href="/" class="btn text-white">Click to go Back</a>
                         </div>
                      </div>
                   </div>
                </div><!-- Content row -->
             </div><!-- Container end -->
        </section>
 
           <!-- ts footer area start-->
        @include('components.indexFooter')
        <!-- ts footer area end-->
     </div>

@endsection