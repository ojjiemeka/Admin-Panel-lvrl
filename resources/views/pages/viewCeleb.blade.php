@extends('layouts.admin')

@section('content')
    @include('components.header')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

              @include('components/quickMenu')

                <div class="row">
                    @foreach ($celebsList as $key => $celeb)
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-4">
                                        <div class="avatar-md">
                                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                                <img src="assets/images/companies/img-1.png" alt="" height="30">
                                                hi
                                            </span>
                                        </div>
                                    </div>


                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-15"><a href="javascript: void(0);"
                                                class="text-dark">{{ $celeb->fullname }}</a></h5>
                                        <p class="text-muted mb-4">{{ $celeb->bio }}</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-top">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-3">
                                        <span class="badge bg-success">{{ $celeb->status }}</span>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <i class= "bx bx-calendar me-1"></i> {{ $calculateAge($celeb->date_of_birth) }}
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <i class= "bx bx-comment-dots me-1"></i> {{ $celeb->category }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection
