@extends('layouts.admin')

@section('content')
    @include('components.header')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


              @include('components/quickMenu')


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Create New Mail</h4>
                                <form action="{{route('sendMail')}}" class="outer-repeater"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('GET')
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div data-repeater-item class="outer">
                                            <div class="form-group row mb-4">
                                                <label for="taskname" class="col-form-label col-lg-2">Reciever Email</label>
                                                <div class="col-lg-10">
                                                    <input id="taskname" name="reciever" type="text" class="form-control" placeholder="Enter Reciever Email...">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="taskname" class="col-form-label col-lg-2">Reciever Name</label>
                                                <div class="col-lg-10">
                                                    <input id="taskname" name="recieverName" type="text" class="form-control" placeholder="Enter Reciever Email...">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="taskname" class="col-form-label col-lg-2">Subject</label>
                                                <div class="col-lg-10">
                                                    <input id="taskname" name="subject" type="text" class="form-control" placeholder="Enter Task Name...">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label col-lg-2">Body</label>
                                                <div class="col-lg-10">
                                                    <textarea id="taskdesc-editor" name="body" class="form-control" rows="5" name="area"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-lg-10">
                                            <button type="submit" class="btn btn-primary">Create Task</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-10">
                                    <a class="btn btn-success" href="{{route('sendMail')}}"> send amil</a>
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
