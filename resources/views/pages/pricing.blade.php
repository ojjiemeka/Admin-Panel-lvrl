@extends('layouts.admin')

@section('content')
    @include('components.header')
    <div class="main-content">
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

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>

    @include('components.footer')
    </div>
@endsection
