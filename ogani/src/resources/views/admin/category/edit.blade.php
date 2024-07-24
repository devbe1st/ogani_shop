@extends('layouts.admin')
@section('title', 'Create Category')
@section('content')
    <div class="col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Edit Category</h2>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="needs-validation" action="{{ route('admin.category.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="">Category Name</label>
                            <input type="text" name="category_name" class="form-control" required placeholder="Enter category name" value="{{ $category->category_name }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" value="">
                        </div> 
                        <img src="{{ asset('storage/' . $category->image) }}" width="200px" class="m-1 rounded" alt=""> 
                    </div>
                    <button class="btn btn-success text-white mt-2" type="submit">Update</button>
                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.card -->
    </div> <!-- /.col -->
@endsection
