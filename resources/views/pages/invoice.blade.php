@extends('layouts.admin')

@section('content')
    @include('components.header')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                @include('components/quickMenu')
                <div class="row">

                    <div class="d-print-none mb-3">
                        <form action="{{ route('sendInvoice') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('GET')
                            <input type="hidden" name="data" value="{{ json_encode($data) }}">
                            <button type="submit" class="btn btn-primary w-md waves-effect waves-light">Send Invoice</button>
                        </form>
                    </div>
                    

                    <div id="invoice" class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <h4 class="float-end font-size-16">Order # {{ $data['invoiceNo'] }}
                                </h4>
                                <div class="auth-logo mb-4">
                                    <div id="logoWrapper" class="title-logo-wrapper"
                                        data-content-field="site-title">

                                    </div>
                                    <img src="http://images.squarespace-cdn.com/content/v1/60e54653e526b236351f2f2f/366dd1ba-6834-4742-b9f7-3e73988ba398/E360+Logo.png?format=1500w"
                                        alt="Entertainment 360" class="bg-dark" height="30" />
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        {{ $data['recieverName'] }}<br>
                                        {{ $data['address'] }}
                                    </address>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <address>
                                        <strong>Shipped To:</strong><br>
                                        {{ $data['recieverName'] }}<br>
                                        {{ $data['address'] }}
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mt-3">
                                    <address>
                                        <strong>Payment Method:</strong><br>
                                        Cashapp/Venmo<br>
                                        {{ $data['reciever'] }}
                                    </address>
                                </div>
                                <div class="col-sm-6 mt-3 text-sm-end">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        {{ $data['orderDate'] }}<br><br>
                                    </address>
                                </div>
                            </div>
                            <div class="py-2 mt-3">
                                <h3 class="font-size-15 fw-bold">Order summary</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-nowrap">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;">No.</th>
                                            <th>Item</th>
                                            <th class="text-end">Price</th>
                                            <th style="width: 70px;">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody id="order-summary">
                                        <!-- Iterate over items and prices -->
                                        @foreach($data['item'] as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td> <!-- Displaying 1-based index -->
                                                <td>{{ $item }}</td>
                                                <td class="text-end">{{ $data['price'][$index] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6 text-sm-end">
                                    <address>
                                        <strong>Total:</strong><br>
                                        <h4 class="m-0" id="totalAmount">${{ number_format(array_sum($data['price']), 2) }}</h4>
                                    </address>
                                </div>
                            </div>

                        </div>
                    </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
      
        

    </div>
    @include('components.footer')
    </div>
@endsection
