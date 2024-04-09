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
                            <div class="card-body" id="addMenu">
                                <h4 class="card-title mb-4">Quick Add</h4>

                                <form>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input"
                                            placeholder="Enter Celeb Name">
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
                                                <select id="formrow-inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>M</option>
                                                    <option>F</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="formrow-inputState" class="form-label">Country</label>
                                                <select id="formrow-inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    @foreach ($countries as $countryName)
                                                        <option>{{ $countryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Multiple Select</label>

                                                <select class="select2 form-control select2-multiple"
                                                    multiple="multiple" data-placeholder="Choose ...">
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
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
