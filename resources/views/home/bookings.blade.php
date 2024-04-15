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

                            <div class="mb-3">
                                <img class="w-50" src="{{ asset($data->img) }}" alt="">
                                <div class="gold mt-4 mb-2">
                                    <i class='bx bx-md bxs-star'></i>
                                    <i class='bx bx-md bxs-star'></i>
                                    <i class='bx bx-md bxs-star'></i>
                                    <i class='bx bx-md bxs-star'></i>
                                    <i class='bx bx-md bxs-star'></i>
                                </div>
                                <div class="d-grid">
                                    <span class="gold mb-2 fw-bold">Born: {{$data->date_of_birth}}</span>
                                    <span class="gold mb-2 fw-bold">Country: {{$data->country}}</span>
                                </div>
                               <div class="d-flex fw-bold gold justify-content-evenly mb-2 ">
                               <div>Speaking & Appearance Fee:</div>
                                <span>Regular: $2,500</span>
                                <span>VIP: $4,450</span>
                                <span>Regular: $6,500</span>
                               </div>
                            </div>

                            <h3 class="ts-title">
                                Request Booking Information on <span class="gold">{{ $data->fullname }}</span>
                            </h3>

                            <h2 class="ts-title">
                                We are happy to assist you with your interest in booking Ben Robson . Please provide
                                details about your organization, the type of event, or the celebrity you would like to
                                secure, and an agent will be in touch shortly.
                            </h2>
                            <h4 class="text-danger">During normal business hours, we respond to most inquiries within 4
                                hours.</h4>


                        </div><!-- col end-->
                    </div><!-- row end-->
                    <form id="contact-form" class="contact-form" action="{{ route('bookings.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mx-auto mb-4">
                                <div class="error-container"></div>
                                <div>
                                    <div class="bookingCard p-4">
                                        <form action="{{ route('bookings.store') }}" method="post">
                                            <div class="align-items-center d-flex justify-content-between">
                                                <div>
                                                    <h3>Tell us about your event</h3>
                                                </div>
                                                @include('components.error')
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Celebrity:</label>
                                                        <input class="form-control form-control-name"
                                                            value="{{ $data->fullname }}" name="celebrity_name"
                                                            id="f-name" type="text" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label required for="date">Fan Card ID</label>
                                                        <input class="form-control form-control-name"
                                                            placeholder="eg: abc1234" name="fanID" id="f-name"
                                                            type="text" maxlength="8" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Event Date:</label>
                                                        <input class="form-control form-control-name" name="event_date"
                                                            id="l-name" type="date" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date">Approximate Budget</label>
                                                        <select required class="form-control" name="approx_budget"
                                                            id="" required>
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
                                                        <select required class="form-control" name="event_type"
                                                            id="" required>
                                                            <option disabled selected>Select Event Type</option>
                                                            <option value="Birthday">Birthday</option>
                                                            <option value="Meet and Greet">Meet and Greet</option>
                                                            <option value="Convention/Trade Show">Convention/Trade Show
                                                            </option>
                                                            <option value="Cooking Demo">Cooking Demo</option>
                                                            <option value="Endorsement/Spokesperson">
                                                                Endorsement/Spokesperson</option>
                                                            <option value="Funeral">Funeral</option>
                                                            <option value="Musical Performance">Musical Performance</option>
                                                            <option value="Personal Appearance">Personal Appearance</option>
                                                            <option value="Satellite Media Tour">Satellite Media Tour
                                                            </option>
                                                            <option value="Speaking Engagement">Speaking Engagement</option>
                                                            <option value="Virtual Event">Virtual Event</option>
                                                            <option value="Wedding">Wedding</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label required for="date">Nearest Landmark</label>
                                                        <input class="form-control form-control-name"
                                                            placeholder="eg: Airport" name="nearest_airport" id="l-name"
                                                            type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label required for="date">Event Location</label>
                                                        <input class="form-control" type="text" name="location"
                                                            placeholder="e.g Atlanta, Seattle *" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label required for="date">Additional Information</label>
                                                <textarea class="form-control form-control-message" name="additional_info" id="message"
                                                    placeholder="Your message...*" rows="6" required></textarea>
                                            </div>

                                            <div class="text-center"><br>
                                                <button class="btn" type="submit"> Submit Request</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
