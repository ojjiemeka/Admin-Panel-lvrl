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

                                <form action="{{ route('sendMail') }}" method="post" enctype="multipart/form-data">m
                                    @csrf
                                    @method('GET')
                                    <div class="form-group row mb-4">
                                        <label for="recieverEmail" class="col-form-label col-lg-2">Reciever Email</label>
                                        <div class="col-lg-10">
                                            <input id="recieverEmail" name="reciever" type="text" class="form-control" placeholder="Enter Reciever Email...">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="recieverName" class="col-form-label col-lg-2">Reciever Name</label>
                                        <div class="col-lg-10">
                                            <input id="recieverName" name="recieverName" type="text" class="form-control" placeholder="Enter Reciever Name...">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="subject" class="col-form-label col-lg-2">Subject</label>
                                        <div class="col-lg-10">
                                            <input id="subject" name="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="body" class="col-form-label col-lg-2">Body</label>
                                        <div class="col-lg-10">
                                            <textarea id="body" name="body" class="form-control" rows="5" placeholder="Enter Body..."></textarea>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-lg-10">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Create New Invoice</h4>
                                <form action="{{ route('showInvoice') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group row mb-4">
                                                <label for="reciever" class="col-form-label col-lg-4">Reciever Email:</label>
                                                <div class="col-lg-8">
                                                    <input id="reciever" name="reciever" type="text" class="form-control" placeholder="Enter Reciever Email...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row mb-4">
                                                <label for="recieverName" class="col-form-label col-lg-4">Reciever Name:</label>
                                                <div class="col-lg-8">
                                                    <input id="recieverName" name="recieverName" type="text" class="form-control" placeholder="Enter Reciever Name...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group row mb-4">
                                                <label for="orderDate" class="col-form-label col-lg-4">Order Date:</label>
                                                <div class="col-lg-8">
                                                    <input id="orderDate" name="orderDate" type="date" class="form-control" placeholder="Enter Order Date...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row mb-4">
                                                <label for="invoiceNo" class="col-form-label col-lg-2">Invoice No:</label>
                                                <div class="col-lg-10">
                                                    <input id="invoiceNo" name="invoiceNo" type="text" class="form-control" placeholder="Enter Invoice No...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="address" class="col-form-label col-lg-2">Address:</label>
                                        <div class="col-lg-10">
                                            <textarea id="address" name="address" class="form-control" placeholder="Enter Address..."></textarea>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label for="item" class="form-label">Item:</label>
                                            <input type="text" id="item" class="form-control" placeholder="Enter Item...">
                                        </div>
                                        <div class="col-4">
                                            <label for="price" class="form-label">Price:</label>
                                            <input type="number" id="price" class="form-control" placeholder="Enter Price...">
                                        </div>
                                        <div class="col-2">
                                            <button type="button" onclick="addNewItem()" class="btn btn-primary mt-4">Add Item</button>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody id="item-table-body"></tbody>
                                        </table>
                                    </div>

                                    <div class="mt-4">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" id="add-item" class="btn btn-secondary">Create Invoice</button>
                                        </div>
                                    </div>

                                    <!-- Hidden input fields for items and prices -->
                                    <div id="hidden-inputs"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div> <!-- End Page-content -->
    </div>

    @include('components.footer')
    <script>
        function addNewItem() {
            var itemInput = document.getElementById('item');
            var priceInput = document.getElementById('price');

            var itemValue = itemInput.value.trim();
            var priceValue = priceInput.value.trim();

            if (itemValue !== '' && priceValue !== '') {
                var tableBody = document.getElementById('item-table-body');
                var newRow = tableBody.insertRow();
                var cell1 = newRow.insertCell(0);
                var cell2 = newRow.insertCell(1);
                cell1.textContent = itemValue;
                cell2.textContent = priceValue;

                // Create hidden input fields for item and price
                var hiddenInputs = document.getElementById('hidden-inputs');
                hiddenInputs.innerHTML += `<input type="hidden" name="item[]" value="${itemValue}">`;
                hiddenInputs.innerHTML += `<input type="hidden" name="price[]" value="${priceValue}">`;

                // Clear input fields after adding item
                itemInput.value = '';
                priceInput.value = '';
            } else {
                alert('Please enter both item and price.');
            }
        }
    </script>
@endsection
