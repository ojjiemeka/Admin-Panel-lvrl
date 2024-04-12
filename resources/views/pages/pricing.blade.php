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
                                            @foreach ($prices as $key => $price)
                                                <tr>
                                                    <td data-field="id" style="width: 80px">{{ $key + 1 }}</td>
                                                    <td>{{$price->amount}}</td>
                                                    <td>{{$price->desc}}</td>
                                                    <td>
                                                        @if (($price->status == 1))
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">Inactive</span>                                      
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
                                                            <a class="bx bx-sm bxs-edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $price->id }}"></a>
                                                        </div>
                                                        <div class="modal fade bs-example-modal-center" id="editModal{{ $price->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit Info</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('prices.update', $price->id) }}" method="POST" enctype="file">
                                                                            @csrf
                                                                             @method('PUT')
                                                                             <div class="form-group row mb-3">
                                                                                <label for="amount" class="col-form-label col-lg-12">Amount</label>
                                                                                <div class="col-lg-10">
                                                                                    <input id="taskname" name="amount" type="text" class="form-control"
                                                                                        value="{{$price->amount}}">
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
                                                                                        <label for="formrow-inputState" class="form-label">Description</label>
                                                                                        <select id="formrow-inputState" class="form-select" name="desc">
                                                                                            <option>Selected: {{$price->desc}}</option>
                                                                                            <option>fancard</option>
                                                                                            <option>subscription</option>
                                                                                        </select>
                                                                                    </div>
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
                                                            <a class="bx bx-sm bx-trash text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $price->id  }}"></a>
                                                        </div>
                                                        
                                                        <div class="modal fade" id="deleteModal{{ $price->id  }}">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Delete</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete {{ $price->amount }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary light btn-sm"
                                                                            data-bs-dismiss="modal">Close</button>
                                    
                                                                        <form action="{{ route('prices.destroy', $price->id ) }}" method="POST">
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
                        <!-- end card --> 
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Publish Pricing</h5>
                                <form action="{{route('prices.store')}}" method="post">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label for="amount" class="col-form-label col-lg-12">Amount</label>
                                        <div class="col-lg-10">
                                            <input id="taskname" name="amount" type="text" class="form-control"
                                                placeholder="Enter Amount...">
                                        </div>
                                    </div>
    
                                    {{-- <div class="form-group row mb-4">
                                        <label for="desc" class="col-form-label col-lg-12">Description</label>
                                        <div class="col-lg-10">
                                            <input id="taskname" name="desc" type="text" class="form-control"
                                                placeholder="Enter Task Name...">
                                        </div>
                                    </div> --}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="formrow-inputState" class="form-label">Description</label>
                                                <select id="formrow-inputState" class="form-select" name="desc">
                                                    <option>Select Type</option>
                                                    <option>fancard</option>
                                                    <option>subscription</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>
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
    </div>
        @include('components.footer')
    </div>
@endsection
