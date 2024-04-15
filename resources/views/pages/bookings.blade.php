@extends('layouts.admin')

@section('content')
    @include('components.header')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        @include('components/quickMenu')

                        <!-- end page title -->

                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Fan Card Subscription</h4>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end mb-2 row">
                                            <!-- end col -->
                                            <div class="col-sm-auto">
                                                {{-- <div class="text-sm-end">
                                            <a class="btn btn-success btn-rounded" id="#addBooking">
                                                <i class="mdi mdi-plus me-1"></i> Bookings
                                            </a>
                                        </div> --}}
                                        
                                                <div class="modal fade bs-example-modal-center"
                                                    id="editModal" tabindex="-1" role="dialog"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Booking</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action=""
                                                                    method="POST" enctype="file">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group row mb-3">
                                                                        <label for="amount"
                                                                            class="col-form-label col-lg-12">Celebrity</label>
                                                                        <div class="col-lg-10">
                                                                            <input id="taskname" name="amount"
                                                                                type="text" class="form-control"
                                                                                value="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row mb-3">
                                                                        <label for="desc"
                                                                            class="col-form-label col-lg-12">Eevnt
                                                                            Date</label>
                                                                        <div class="col-lg-10">
                                                                            <input id="taskname" name="event_date"
                                                                                type="text" class="form-control"
                                                                                placeholder="Enter Task Name...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="date">Approximate
                                                                                    Budget</label>
                                                                                <select required class="form-control"
                                                                                    name="approx_budget" id=""
                                                                                    required>
                                                                                    <option>Selected:
                                                                                        
                                                                                    </option>
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
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="date">Event Type</label>
                                                                            <select required class="form-control"
                                                                                name="event_type" id="" required>
                                                                                <option disabled selected>Select Event Type
                                                                                </option>
                                                                                <option value="Birthday">Birthday</option>
                                                                                <option value="Meet and Greet">Meet and
                                                                                    Greet</option>
                                                                                <option value="Convention/Trade Show">
                                                                                    Convention/Trade Show</option>
                                                                                <option value="Cooking Demo">Cooking Demo
                                                                                </option>
                                                                                <option value="Endorsement/Spokesperson">
                                                                                    Endorsement/Spokesperson</option>
                                                                                <option value="Funeral">Funeral</option>
                                                                                <option value="Musical Performance">Musical
                                                                                    Performance</option>
                                                                                <option value="Personal Appearance">Personal
                                                                                    Appearance</option>
                                                                                <option value="Satellite Media Tour">
                                                                                    Satellite Media Tour</option>
                                                                                <option value="Speaking Engagement">Speaking
                                                                                    Engagement</option>
                                                                                <option value="Virtual Event">Virtual Event
                                                                                </option>
                                                                                <option value="Wedding">Wedding</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label required for="date">Event
                                                                                Location</label>
                                                                            <input class="form-control" type="text"
                                                                                name="location"
                                                                                placeholder="e.g Atlanta, Georgia *" />
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label required for="date">Additional
                                                                    Information</label>
                                                                <textarea class="form-control form-control-message" name="message" id="message" placeholder="Your message...*"
                                                                    rows="6" required></textarea>
                                                            </div>

                                                            <div>
                                                                <button type="submit"
                                                                    class="btn btn-primary w-md">Update</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table
                                                class="table project-list-table align-middle table-nowrap dt-responsive nowrap w-100 table-borderless"
                                                id="projectList-table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 60px">#</th>
                                                        <th scope="col">Fan ID</th>
                                                        <th scope="col">Full Name</th>
                                                        <th scope="col">Phonenumber</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($fanInfo as $key => $fanInfo)
                                                        <tr>
                                                            <td data-field="id" style="width: 80px">{{ $key + 1 }}
                                                            </td>
                                                            <td>{{ $fanInfo->fanID }}</td>
                                                            <td>{{ $fanInfo->full_name }}</td>
                                                            <td>{{ $fanInfo->phone_number }}</td>
                                                            <td>{{ $fanInfo->email }}</td>
                                                            <td>
                                                                @if ($fanInfo->status == 1)
                                                                    <span class="badge bg-success">Active</span>
                                                                @else
                                                                    <span class="badge bg-danger">Inactive</span>
                                                                @endif
                                                            </td>
                                                            <td class="d-flex justify-content-between w-lg">
                                                                <div class="square-switch">
                                                                    <input type="checkbox"
                                                                        id="square-switch{{ $key + 1 }}"
                                                                        switch="none" checked />
                                                                    <label for="square-switch{{ $key + 1 }}"
                                                                        data-on-label="On" data-off-label="Off"></label>
                                                                </div>
                                                                <div>
                                                                    <a class="bx bx-sm bxs-edit" data-bs-toggle="modal"
                                                                        data-bs-target="#editModal"></a>
                                                                </div>

                                                                <div class="modal fade bs-example-modal-center"
                                                                    id="editModal" tabindex="-1"
                                                                    role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Edit Info</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action=""
                                                                                    method="POST" enctype="file">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <div class="form-group row mb-3">
                                                                                        <label for="amount"
                                                                                            class="col-form-label col-lg-12">Amount</label>
                                                                                        <div class="col-lg-10">
                                                                                            <input id="taskname"
                                                                                                name="amount"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                value="">
                                                                                        </div>
                                                                                    </div>

                                                                                    {{-- <div class="form-group row mb-3">
                                                                                <label for="desc" class="col-form-label col-lg-12">Description</label>
                                                                                <div class="col-lg-10">
                                                                                    <input id="taskname" name="desc" type="text" class="form-control"
                                                                                        placeholder="Enter Task Name...">
                                                                                </div>
                                                                            </div> --}}

                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="mb-3">
                                                                                                <label
                                                                                                    for="formrow-inputState"
                                                                                                    class="form-label">Description</label>
                                                                                                <select
                                                                                                    id="formrow-inputState"
                                                                                                    class="form-select"
                                                                                                    name="desc">
                                                                                                    <option>Selected:
                                                                                                    </option>
                                                                                                    <option>fancard</option>
                                                                                                    <option>subscription
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div>
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary w-md">Update</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div>
                                                                
                                                                <div>
                                                                    <a class="bx bx-sm bx-trash text-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#deleteModal"></a>
                                                                </div>

                                                                <div class="modal fade"
                                                                    id="deleteModal">
                                                                    <div class="modal-dialog modal-dialog-centered"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Delete</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal">
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Are you sure you want to delete
                                                                                    
                                                                                </p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary light btn-sm"
                                                                                    data-bs-dismiss="modal">Close</button>

                                                                                <form
                                                                                    action="{{route('fancards.destroy',$fanInfo->id)}}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger btn-sm">
                                                                                        Delete
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Bookings</h4>

                            </div>
                        </div>

                        @foreach($bookingsInfo as $booking)
                        <div class="col-xl-4 col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="text-lg-center">
                                                <div class="avatar-sm me-3 mx-lg-auto mb-3 mt-1 float-start float-lg-none">
                                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary font-size-16">
                                                        <a class="bx bx-sm bx-trash text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $booking->id  }}"></a>
                                                    </span>
                                                    

                                                    <div class="modal fade" id="deleteModal{{ $booking->id  }}">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to delete {{ $fullName}}'s Booking for
                                                                        <br>
                                                                        <span>Celeb: {{ $booking->celebrity_name  }}</span>
                                                                        <br>
                                                                        <span>Event Type: {{ $booking->event_type  }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary light btn-sm"
                                                                        data-bs-dismiss="modal">Close</button>
                                
                                                                    <form action="{{ route('bookings.destroy', $booking->id ) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="mb-1 font-size-15 text-truncate">{{ $booking->celebrity_name }}</h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div>
                                                <a href=""
                                                    class="d-block text-primary text-decoration-underline mb-2">Fan ID: 
                                                    {{$booking->fanID}}</a>
                                                <h5 class="text-truncate">{{$fullName}}</h5>
                                                <h5 class="text-truncate mb-4 mb-lg-5">{{$booking->event_type}}</h5>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-3">
                                                        <h5 class="font-size-14" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Amount"><i
                                                                class="bx bx-money me-1 text-muted"></i> {{$booking->approx_budget}}</h5>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <h5 class="font-size-14" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Due Date"><i
                                                                class="bx bx-calendar me-1 text-muted"></i> {{$booking->event_date}}</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                        
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
        </div>
        @include('components.footer')
    </div>
@endsection
