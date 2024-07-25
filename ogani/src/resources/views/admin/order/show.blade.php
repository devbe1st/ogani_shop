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
                            @php
                                $stt = 1;
                            @endphp
                            @foreach ($orderDetails as $details)
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $details->order->order_number }}</td>
                                <td>{{ $details->product->product_name }}</td>
                                <td><img src="{{ asset('storage/' . $details->product->image) }}" alt="" class="rounded object-fit-cover" width="100px" height="100px"></td>
                                <td>${{ formatCurrency($details->price) }}</td>
                                <td>{{ formatCurrency($details->quantity) }}</td>
                                <td>${{ formatCurrency($details->total) }}</td>
                            </tr>
                            @php
                                $stt ++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- simple table -->
    </div> <!-- end section -->
@endsection
