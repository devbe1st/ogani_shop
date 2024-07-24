@extends('layouts.admin')
@section('title', 'Product List')
@section('content')
    <h2 class="mb-2 page-title">Product List</h2>
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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Quantity</th>
                                <th>Categories</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $stt = 1;
                            @endphp
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td><img src="{{ asset('storage/' . $product->image) }}" width="100px" height="100px" class="rounded object-cover" alt=""></td>
                                <td>${{ formatCurrency($product->price) }}</td>
                                <td>{{ formatCurrency($product->discount) }}%</td>
                                <td>{{ formatCurrency($product->quantity) }}</td>
                                <td>{{ $product->category->category_name }}</td>
                                <td>
                                    <form action="{{ route('admin.product.update-status', ['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" value="{{ $product->status }}" name="status">
                                        <button class="btn"><span class="fe fe-23 fe-{{ translateClassStatusCustom($product->status) }}" style="font-size: 20px"></span></button>
                                    </form>
                                </td>
                                <td>
                                <div class="d-flex" style="gap:10px">
                                    <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-success text-white">Edit</a>
                                    <form action="{{ route('admin.product.destroy', ['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-white" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                                </td>
                            </tr>
                            @php
                                $stt++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- simple table -->
    </div> <!-- end section -->
@endsection
