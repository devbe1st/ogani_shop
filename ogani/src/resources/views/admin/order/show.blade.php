@extends('layouts.admin')
@section('title', 'Order Details')
@section('content')
    <h2 class="mb-2 page-title">Order Details</h2>
    <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <!-- table -->
                    <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ 1 }}</td>
                                <td>{{ 82362 }}</td>
                                <td>{{ "Strawbery" }}</td>
                                <td><img src="{{ asset('user/img/product/product-4.jpg') }}" alt="" class="rounded object-fit-cover" width="100px" height="100px"></td>
                                <td>${{ 62 }}</td>
                                <td>{{ 6 }}</td>
                                <td>${{ 372 }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- simple table -->
    </div> <!-- end section -->
@endsection
