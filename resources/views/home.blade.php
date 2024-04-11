@extends('layouts.admin')

@section('content')
    @include('components.header')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @include('components/quickMenu')
                <!-- end row -->

                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="card-title">Active Celebs</h4>
                                    <a href="#addMenu">
                                        <i class="bx bx-md bxs-user-plus"></i>
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($celebsList as $key => $celeb)
                                                <tr data-id="{{ $key + 1 }}">
                                                    <td data-field="id" style="width: 80px">{{ $key + 1 }}</td>
                                                    <td data-field="name">{{ $celeb->fullname }}</td>
                                                    <td data-field="gender">{{ $celeb->gender }}</td>
                                                    <td data-field="age">{{ $calculateAge($celeb->date_of_birth) }}</td>
                                                    <td>
                                                        @if ($celeb->status == 1)
                                                            <i class="bx bx-sm bxs-bulb text-success"></i>
                                                        @else
                                                            <i class="bx bx-sm bxs-bulb text-secondary"></i>
                                                        @endif
                                                    </td>
                                                    <td class="d-flex justify-content-between w-lg">
                                                        <div class="square-switch">
                                                            <input type="checkbox" id="square-switch{{ $key + 1 }}"
                                                                switch="none" checked />
                                                            <label for="square-switch{{ $key + 1 }}" data-on-label="On"
                                                                data-off-label="Off"></label>
                                                        </div>
                                                        <div>
                                                            <a class="bx bx-sm bxs-edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $celeb->id }}"></a>
                                                        </div>
                                                        <div class="modal fade bs-example-modal-center" id="editModal{{ $celeb->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit Info</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('celebs.update', $celeb->id) }}" method="POST" enctype="file">
                                                                            @csrf
                                                                             @method('PUT')
                                                                            <div class="mb-3">
                                                                                <label for="formrow-firstname-input" class="form-label">Full Name</label>
                                                                                <input type="text" name="fullname" class="form-control"
                                                                                    id="formrow-firstname-input" value="{{ $celeb->fullname }}">
                                                                            </div>
                                        
                                                                            <div class="row">
                                        
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="date" class="form-label">Date of Birth</label>
                                                                                        <div class="docs-datepicker">
                                                                                            <div class="input-group">
                                                                                                <input type="date" class="form-control docs-date"
                                                                                                    name="date_of_birth" value="{{ $celeb->date_of_birth }}"
                                                                                                    autocomplete="off">
                                                                                            </div>
                                                                                            <div class="docs-datepicker-container"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="formrow-inputState" class="form-label">Gender</label>
                                                                                        <select id="formrow-inputState" class="form-select" name="gender">
                                                                                            <option>{{$celeb->gender}}</option>
                                                                                            <option>M</option>
                                                                                            <option>F</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                        
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="formrow-inputState" class="form-label">Country</label>
                                                                                        <select id="formrow-inputState" class="form-select" name="country">
                                                                                            <option selected>{{$celeb->country}}</option>
                                                                                            @foreach ($countries as $countryName)
                                                                                                <option>{{ $countryName }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="formrow-firstname-input" class="form-label">Category</label>
                                                                                        <input type="text" class="form-control" name="category"
                                                                                            id="formrow-firstname-input" value="{{ $celeb->category }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                        
                                                                            <div class="row">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Bio</label>
                                                                                    <div>
                                                                                        <input required class="form-control" value="{{ $celeb->bio }}" name="bio">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                        
                                                                            <div class="row">
                                                                                <div class="mb-3 col-lg-2">
                                                                                    <label for="resume">Resume</label>
                                                                                    <input type="file" class="form-control" id="resume">
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <button type="submit" class="btn btn-primary w-md">Update</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div>

                                                        <div>
                                                            <a class="bx bx-sm bx-trash text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $celeb->id  }}"></a>
                                                        </div>
                                                        
                                                        <div class="modal fade" id="deleteModal{{ $celeb->id  }}">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Delete</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete {{ $celeb->fullname }}'s profile ?
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary light btn-sm"
                                                                            data-bs-dismiss="modal">Close</button>
                                    
                                                                        <form action="{{ route('celebs.destroy', $celeb->id ) }}" method="POST">
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
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body" id="addMenu">
                                <h4 class="card-title mb-4">Quick Add</h4>

                                <form action="{{ route('celebs.store') }}" method="POST" enctype="file">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Full Name</label>
                                        <input type="text" name="fullname" class="form-control"
                                            id="formrow-firstname-input" placeholder="Enter Celeb Name">
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date of Birth</label>
                                                <div class="docs-datepicker">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control docs-date"
                                                            name="date_of_birth" placeholder="Pick a date"
                                                            autocomplete="off">
                                                        <button type="button"
                                                            class="btn btn-secondary docs-datepicker-trigger" disabled>
                                                            <i class="mdi mdi-calendar" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="docs-datepicker-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-inputState" class="form-label">Gender</label>
                                                <select id="formrow-inputState" class="form-select" name="gender">
                                                    <option>Choose...</option>
                                                    <option>M</option>
                                                    <option>F</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-inputState" class="form-label">Country</label>
                                                <select id="formrow-inputState" class="form-select" name="country">
                                                    <option selected>Choose...</option>
                                                    @foreach ($countries as $countryName)
                                                        <option>{{ $countryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Category</label>
                                                <input type="text" class="form-control" name="category"
                                                    id="formrow-firstname-input" placeholder="Enter Celeb Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label">Bio</label>
                                            <div>
                                                <textarea required class="form-control" name="bio" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-lg-2">
                                            <label for="resume">Resume</label>
                                            <input type="file" class="form-control" id="resume">
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Create</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
    </div>
    @include('components.footer')
    </div>
@endsection
