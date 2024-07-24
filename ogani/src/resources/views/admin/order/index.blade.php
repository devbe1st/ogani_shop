@extends('layouts.admin')
@section('title', 'Order List')
@section('content')
    <h2 class="mb-2 page-title">Order List</h2>
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
                                <th>User</th>
                                <th>Order Code</th>
                                <th>Total</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ 1 }}</td>
                                <td>{{ "Trần Quang Nghĩa" }}</td>
                                <td>{{ 823645 }}</td>
                                <td>${{ 9999 }}</td>
                                <td>{{ "MoMo" }}</td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><div class="dot dot-lg bg-success"></div></div>
                                        <div>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><div class="dot dot-lg bg-warning"></div> Processing</a>
                                                <a class="dropdown-item" href="#"><div class="dot dot-lg bg-primary"></div> Delivering</a>
                                                <a class="dropdown-item" href="#"><div class="dot dot-lg bg-success"></div> Completed</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('admin.order.show', ['id' => 1]) }}">View</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- simple table -->
    </div> <!-- end section -->
@endsection
