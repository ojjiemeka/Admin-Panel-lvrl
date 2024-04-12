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
                    @foreach ($celebs as $key => $celeb)
                    <div class="col-lg-4 col-md-6">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="{{ $celeb->img }}"alt="">
                                <a class="view-speaker ts-image-popup">
                                    <i class="icon icon-plus">
                                    </i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title">
                                    {{-- <a href="#" class=" booking-link" data-fullname="{{ $celeb->fullname }}" data-img="{{ $celeb->img }}">{{ $celeb->fullname }}</a> --}}
                                    <form action="{{ route('bookings', $celeb->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="b-none">{{ $celeb->fullname }}</button>
                                    </form>
                                </h3>
                                <p>
                                    {{ $celeb->category }}
                                </p>
                            </div>
                        </div>
                    </div> <!-- col end-->
                    @endforeach
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

     {{-- <script>
        // JavaScript to handle clicking on the booking link
        document.querySelectorAll('.booking-link').forEach(link => {
            link.addEventListener('click', function() {
                const fullname = this.getAttribute('data-fullname');
                const img = this.getAttribute('data-img');
                // Make an AJAX request to the bookings route
                fetch('{{ route("bookings") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ fullname: fullname, img: img })
                })
                .then(response => {
                    // Handle the response as needed
                    if (response.ok) {
                        // Redirect to the bookings page
                        window.location.href = '{{ route("bookings") }}';
                    } else {
                        // Handle error response
                        console.error('Error:', response.statusText);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script> --}}
@endsection