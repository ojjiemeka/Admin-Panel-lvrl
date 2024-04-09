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
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="section-title text-center">
                            Meet Your Favourite Celebrities
                        </h2>

                        <h3 class="ts-title">
                            Request Booking Information on <span class="gold">Armin</span>
                        </h3>
                        <h2 class="ts-title">
                            We are happy to assist you with your interest in booking Ben Robson . Please provide details about your organization, the type of event, or the celebrity you would like to secure, and an agent will be in touch shortly.
                        </h2>
                        <h4 class="text-danger">During normal business hours, we respond to most inquiries within 4 hours.</h4>

    
                    </div><!-- col end-->
                </div><!-- row end-->
                <form id="contact-form" class="contact-form" action="https://demo.themewinter.com/html/exhibz/contact-form.php" method="post">
                <div class="row">
                    <div class="col-lg-6 mx-auto">   
                        <div class="error-container"></div>
                         <div>
                            <div class="bookingCard p-4">
                                <div>
                                    <h3>Tell us aboutyour event</h3>                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                           <label for="">Celebrity:</label>
                                          <input class="form-control form-control-name" placeholder="Celebrity" name="celebrity_name" id="f-name"
                                             type="text" required>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                        <label for="">Event Date:</label>
                                          <input class="form-control form-control-name" name="event_date" id="l-name"
                                             type="date" required>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                        <label for="date">Approximate Budget</label>
                                        <select required class="form-control" name="approx_budget" id="" required>
                                            <option disabled selected>Select Talent Budget *</option>
                                            <option value="$10,000 - $20,000">
                                               $10,000 - $20,000
                                            </option>
                                            <option value="$20,000 - $30,000">
                                               $20,000 - $30,000
                                            </option>
                                            <option value="$30,000 - $50,000">
                                               $30,000 - $50,000
                                            </option>
                                            <option value="$50,000 - $100,000">
                                               $50,000 - $100,000
                                            </option>
                                            <option value="$100,000 - $500,000">
                                               $100,000 - $500,000
                                            </option>
                                            <option value="$500,000 and above">
                                               $500,000 and above
                                            </option>
                                         </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                        <label for="date">Event Type</label>
                                        <select required class="form-control" name="event_type" id="" required>
                                           <option disabled selected>Select Event Type</option>
                                           <option value="Birthday">Birthday</option>
                                           <option value="Meet and Greet">Meet and Greet</option>
                                           <option value="Convention/Trade Show">Convention/Trade Show</option>
                                           <option value="Cooking Demo">Cooking Demo</option>
                                           <option value="Endorsement/Spokesperson">Endorsement/Spokesperson</option>
                                           <option value="Funeral">Funeral</option>
                                           <option value="Musical Performance">Musical Performance</option>
                                           <option value="Personal Appearance">Personal Appearance</option>
                                           <option value="Satellite Media Tour">Satellite Media Tour</option>
                                           <option value="Speaking Engagement">Speaking Engagement</option>
                                           <option value="Virtual Event">Virtual Event</option>
                                           <option value="Wedding">Wedding</option>
                                        </select>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                        <label required for="date">Event Location</label>
                                        <input class="form-control" type="text" name="location" placeholder="e.g Atlanta, Georgia *" />
                                       </div>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label required for="date">Additional Information</label>
                                    <textarea class="form-control form-control-message" name="message" id="message" placeholder="Your message...*"
                                       rows="6" required></textarea>
                                 </div>
                            </div>
                         </div>
                    </div>
                    <div class="col-lg-6 mx-auto">
                        
                          <div class="error-container"></div>
                          <div class="row bookingCard">
                            <div>
                                <h3 class="ts-title">
                                    Tell us about Yourself/Organization
                                </h3>
                            </div>
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
                                   <input class="form-control form-control-name" placeholder="Phone Number" name="phone_number" id="l-name"
                                      type="text" required>
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
                                      type="text" required>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label required for="date">Country</label>
                                   <input class="form-control form-control-name" placeholder="Country" name="country" id="l-name"
                                      type="text" required>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label required for="date">Nearest Landmark</label>
                                   <input class="form-control form-control-name" placeholder="eg: Airport" name="nearest_airport" id="l-name"
                                      type="text" required>
                                </div>
                             </div>
                          </div>
                    </div>
                    <div class="text-center"><br>
                        <button class="btn" type="submit"> Submit Request</button>
                     </div>
                </div>
            </form><!-- Contact form end -->
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