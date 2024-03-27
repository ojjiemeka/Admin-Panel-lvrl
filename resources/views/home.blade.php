@extends('layouts.admin')

@section('content')
    @include('components.header')
    @include('components.topNav')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Exchange</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crypto</a></li>
                                    <li class="breadcrumb-item active">Exchange</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-grow-1 align-self-center">
                                        <div class="text-muted">
                                            <h5>Henry wells</h5>
                                            <p class="mb-1">henrywells@abc.com</p>
                                            <p class="mb-0">Id no: #SK0234</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet me-1"></i> <span class="d-none d-sm-inline-block">Wallet Balance <i class="mdi mdi-chevron-down"></i></span></button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                            <div class="dropdown-item-text">
                                                <div>
                                                    <p class="text-muted mb-2">Available Balance</p>
                                                    <h5 class="mb-0">$ 9148.23</h5>
                                                </div>
                                            </div>

                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item" href="#">
                                                BTC : <span class="float-end">1.02356</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                ETH : <span class="float-end">0.04121</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                LTC : <span class="float-end">0.00356</span>
                                            </a>

                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item text-primary text-center" href="#">
                                                Learn more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="card-title">Active Celebs</h4>
                                    <i class="bx bx-md bxs-user-plus"></i>
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
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">1</td>
                                                <td data-field="name">David McHenry</td>
                                                <td data-field="age">24</td>
                                                <td data-field="gender">Male</td>
                                                <td cl>
                                                    <i class="bx bx-sm bxs-bulb text-success"></i>
                                                </td>
                                                <td class="d-flex justify-content-between w-lg">
                                                    <div class="square-switch">
                                                        <input type="checkbox" id="square-switch1" switch="none" checked />
                                                        <label for="square-switch1" data-on-label="On"
                                                            data-off-label="Off"></label>
                                                    </div>
                                                    <div>
                                                        <i class="bx bx-sm bxs-edit"></i>
                                                    </div>
                                                    <div>
                                                        <i class="bx bx-sm bx-trash text-danger"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-id="2">
                                                <td data-field="id">2</td>
                                                <td data-field="name">Frank Kirk</td>
                                                <td data-field="age">22</td>
                                                <td data-field="gender">Male</td>
                                                <td style="width: 100px">
                                                    <i class="bx bx-sm bxs-bulb text-secondary"></i>
                                                </td>
                                                <td class="d-flex justify-content-between w-lg">
                                                    <div class="square-switch">
                                                        <input type="checkbox" id="square-switch1" switch="none" checked />
                                                        <label for="square-switch1" data-on-label="On"
                                                            data-off-label="Off"></label>
                                                    </div>
                                                    <div>
                                                        <i class="bx bx-sm bx-trash text-danger"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Quick Add</h4>

                                <form>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Celeb Name">
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date of Birth</label>
                                                <div class="docs-datepicker">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control docs-date" name="date"
                                                            placeholder="Pick a date" autocomplete="off">
                                                        <button type="button"
                                                            class="btn btn-secondary docs-datepicker-trigger"
                                                            disabled>
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
                                                <select id="formrow-inputState" class="form-select">
                                                    <option selected>Choose...</option>
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
                                                <select id="formrow-inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-inputState" class="form-label">Category</label>
                                                <select id="formrow-inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label">Bio</label>
                                            <div>
                                                <textarea required class="form-control" rows="3"></textarea>
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
