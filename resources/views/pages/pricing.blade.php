@extends('layouts.admin')

@section('content')
    @include('components.header')
    <div class="main-content">
<<<<<<< HEAD

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Form Xeditable</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Xeditable</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Inline Example</h4>
                                <p class="card-title-desc">This library allows you to create
                                    editable elements on your page. It can be used with any engine
                                    (bootstrap, jquery-ui, jquery only) and includes both popup and inline
                                    modes. Please try out demo to see how it works.</p>

                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th style="width: 50%;">Inline</th>
                                            <th>Examples</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Simple Text Field</td>
                                            <td>
                                                <a href="javascript: void(0);" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Empty text field, required</td>
                                            <td>
                                                <a href="javascript: void(0);" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Select, local array, custom display</td>
                                            <td>
                                                <a href="javascript: void(0);" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Combodate</td>
                                            <td>
                                                <a href="javascript: void(0);" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Textarea, buttons below. Submit by ctrl+enter</td>
                                            <td>
                                                <a href="javascript: void(0);" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </td>
                                        </tr>
    
                                        </tbody>
                                    </table>
                                </div>
                                

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
=======
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                @include('components/quickMenu')

                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-end mb-2 row">
                                    <!-- end col -->
                                    <div class="col-sm-auto">
                                        <div class="text-sm-end">
                                            <a class="btn btn-success btn-rounded" id="#addProject-btn">
                                                <i class="mdi mdi-plus me-1"></i> Add New Price
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table
                                            class="table project-list-table align-middle table-nowrap dt-responsive nowrap w-100 table-borderless"
                                            id="projectList-table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 60px">#</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="d-flex justify-content-between w-lg">
                                                        <div class="square-switch">
                                                            <input type="checkbox" id="square-switch1" switch="none"
                                                                checked />
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
                        <!-- end card --> 
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Publish Price</h5>

                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-12">Price</label>
                                    <div class="col-lg-10">
                                        <input id="taskname" name="taskname" type="text" class="form-control"
                                            placeholder="Enter Task Name...">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-12">Description</label>
                                    <div class="col-lg-10">
                                        <input id="taskname" name="taskname" type="text" class="form-control"
                                            placeholder="Enter Task Name...">
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
>>>>>>> f3aad89ea20df3fc0b7571575eea512a65373124

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
<<<<<<< HEAD

    </div>
=======
    </div>

>>>>>>> f3aad89ea20df3fc0b7571575eea512a65373124
    @include('components.footer')
    </div>
@endsection
