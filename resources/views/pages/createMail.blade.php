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
                            <h4 class="mb-sm-0 font-size-18">Create Task</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                                    <li class="breadcrumb-item active">Create Task</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

              @include('components/quickMenu')


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Create New Mail</h4>
                                <form class="outer-repeater"  method="post">
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div data-repeater-item class="outer">
                                            <div class="form-group row mb-4">
                                                <label for="taskname" class="col-form-label col-lg-2">Subject</label>
                                                <div class="col-lg-10">
                                                    <input id="taskname" name="taskname" type="text" class="form-control" placeholder="Enter Task Name...">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label col-lg-2">Body</label>
                                                <div class="col-lg-10">
                                                    <textarea id="taskdesc-editor" class="form-control" rows="5" name="area"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row justify-content-end">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary">Create Task</button>
                                    </div>
                                </div>

                            </div>
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
