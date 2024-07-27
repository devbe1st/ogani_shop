@extends('layouts.admin')
@section('title', 'Edit Product')
@section('content')
    <div class="col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Edit Product</h2>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="needs-validation" action="{{ route('admin.product.update', ['id' => $product->id ]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" class="form-control" required placeholder="Enter product name" value="{{ $product->product_name }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control" required placeholder="Enter price" value="{{ $product->price }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Discount</label>
                            <input type="number" name="discount" class="form-control" placeholder="Enter discount" value="{{ $product->discount }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('storage/' . $product->image) }}" width="200px" class="m-1 rounded mt-3" alt=""> 
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" class="form-control" required placeholder="Enter quantity" value="{{ $product->quantity }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <option value="{{ $product->category_id }}">{{ $product->category->category_name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Information</label>
                            <textarea name="information" id="information" cols="30" rows="10">
                                {{ $product->information }}
                            </textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10">
                                {{ $product->description }}
                            </textarea>
                        </div>
                    </div>
                    <button class="btn btn-success text-white" type="submit"><i class="fe fe-check-circle fe-12"></i> Update</button>
                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.card -->
    </div> <!-- /.col -->
@endsection
