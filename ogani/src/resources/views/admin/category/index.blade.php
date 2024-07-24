@extends('layouts.admin')
@section('title', 'Category List')
@section('content')
    <h2 class="mb-2 page-title">Category List</h2>
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $stt = 1;
                            @endphp
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td><img src="{{ asset('storage/' . $category->image ) }}" width="100px" height="100px" class="rounded object-cover" alt=""></td>
                                <td>
                                    <form action="{{ route('admin.category.update-status', ['id' => $category->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" value="{{ $category->status }}" name="status">
                                        <button class="btn"><span class="fe fe-23 fe-{{ translateClassStatusCustom($category->status) }}" style="font-size: 20px"></span></button>
                                    </form>
                                </td>
                                <td>
                                    <div class="d-flex" style="gap:10px">
                                        <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-success text-white">Edit</a>
                                        <form action="{{ route('admin.category.destroy', ['id' => $category->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-white" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
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
