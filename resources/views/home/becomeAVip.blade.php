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
                                 <span class="currency">$</span> 550
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p class="amount-progres-text"><i class='bx bx-package'></i> Access to exclusive celebrity news and updates.</p>
                              <p> <i class='bx bx-package'></i> Monthly newsletter with insider information.</p>
                              <p><i class='bx bx-package'></i> Ideal for: Casual fans who want regular updates on their favorite celebrities.</p>
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
                                 <span class="currency">$</span>850
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p class="amount-progres-text"><i class='bx bx-package'></i> Includes all Basic features, plus:</p>
                              <p> <i class='bx bx-package'></i> Exclusive behind-the-scenes content not available to the public.</p>
                              <p><i class='bx bx-package'></i> Priority access to celebrity events and meet-and-greets.</p>
                              <p><i class='bx bx-package'></i> Ideal for: Fans who want more behind-the-scenes access and opportunities to interact with celebrities.</p>
                              <div class="ts-progress">
                                 <div class="ts-progress-inner" style="width: 75%"></div>
                              </div>
                              <p class="ts-pricing-value">350/500</p>
                           </div>
                           <div class="promotional-code">
                              <p class="promo-code-text">Enter Promotional Code</p>
                              <a href="#popup_1" class="btn text-white pricing-btn view-speaker ts-image-popup" data-effect="mfp-zoom-in" data-price="850">Buy Ticket</a>
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
                                 <span class="currency">$</span>1250
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p> <i class='bx bx-package'></i> Includes all Gold features, plus:</p>
                              <p><i class='bx bx-package'></i> Virtual meet-and-greets with celebrities via video chat.</p>
                              <p><i class='bx bx-package'></i> Access to limited edition fan merchandise and collectibles.</p>
                              <p><i class='bx bx-package'></i> Ideal for: Superfans who want direct interactions with celebrities and access to exclusive fan merchandise.</p>
                              <div class="ts-progress">
                                 <div class="ts-progress-inner" style="width: 50%"></div>
                              </div>
                              <p class="ts-pricing-value">250/500</p>
                           </div>
                           <div class="promotional-code">
                              <p class="promo-code-text">Enter Promotional Code</p>
                              <a href="#popup_1" class="btn text-white pricing-btn view-speaker ts-image-popup" data-effect="mfp-zoom-in" data-price="1250">Buy Ticket</a>
                              <p class="vate-text">All prices exclude 25% VAT</p>
                           </div>
                        </div><!-- ts pricing box-->
                        <img class="pricing-dot1 " src="{{asset('eventBooking/images/pricing/dot.png')}}" alt="">
                     </div>
                  </div><!-- col end-->

                  <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-12 mx-auto">
                  
                           <div class="error-container"></div>
                           <form action="{{route('fancards.store')}}" method="post">
                              @csrf
                           <div class="row m-2 p-4">
                             <div>
                                 <h3 class="ts-title">
                                     Tell us about Yourself/Organization
                                 </h3>
                             </div>
                              
                             <input type="hidden" id="modalPrice" name="amount">

                              <div class="col-md-12">
                                 <div class="form-group">
                                     <label required for="date">Full Name</label>
                                    <input class="form-control form-control-name" placeholder="eg: Sylvester Stallone" name="full_name" id="f-name"
                                       type="text" required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <label required for="date">Job Title</label>
                                    <input class="form-control form-control-name" placeholder="Job Title" name="job_title" id="l-name"
                                       type="text" required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <label required for="date">Sex</label>
                                     <select required class="form-control" name="gender" id="" required>
                                         <option disabled selected>Select Gender*</option>
                                         <option value="M">
                                            Male
                                         </option>
                                         <option value="F">
                                            Female
                                         </option>
                                         <option value="Zombie">
                                            Specify in Decsription
                                         </option>
                                      </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <label required for="date">Phone number</label>
                                     <input class="form-control form-control-name" placeholder="Phone Number" name="phone_number" id="phone_number"
                                     type="text" pattern="\+\d{16}" title="Please enter a phone number in the format +12345678901"
                                     value="+"
                                     required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <label required for="date">Email</label>
                                    <input class="form-control form-control-name" placeholder="Email" name="email" id="l-name"
                                       type="text" required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <label required for="date">Address</label>
                                    <input class="form-control form-control-name" placeholder="Apt 123 Str 456" name="street_address" id="l-name"
                                       type="text" required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <label required for="date">Zip Code</label>
                                    <input class="form-control form-control-name" placeholder="eg: 10001" name="zip_code" id="l-name"
                                       type="text" id="numericInput" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <label required for="date">Country</label>
                                     <label for="formrow-inputState" class="form-label">Country</label>
                                     <select id="formrow-inputState" class="form-select" name="country">
                                        <option>Choose Country</option>
                                         @foreach ($countries as $countryName)
                                             <option>{{ $countryName }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                              </div>

                              <div class="text-center"><br>
                                 <button class="btn" type="submit"> Submit Request</button>
                             </div>
                             
                           </div>
                        </form>
                     </div>
                     </div><!-- row end-->
                 </div>
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

     <script>
      document.getElementById('phone_number').addEventListener('input', function(event) {
          this.value = this.value.replace(/[^\d+]/g, '');
      });
  </script>

<script>
   // Add event listener to the "Buy Ticket" button
   document.querySelectorAll('.pricing-btn').forEach(button => {
       button.addEventListener('click', function() {
           // Get the price value from the data-price attribute of the button
           const price = this.dataset.price;
           // Set the price value to the input field in the modal form
           document.getElementById('modalPrice').value = price;
       });
   });
</script>
@endsection