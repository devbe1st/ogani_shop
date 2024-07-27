@extends('layouts.admin')
@section('title', 'User List')
@section('content')
    <div class="col-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">User List</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-3">
                    <div class="card shadow mb-4">
                        <div class="card-body text-center">
                            <div class="avatar avatar-lg mt-4">
                                <a href="">
                                    <img src="{{ (!empty($user->avatar)) ? $user->avatar : asset('admin/assets/images/profile-default.png') }}" alt="..." class="avatar-img rounded-circle">
                                </a>
                            </div>
                            <div class="card-text my-2">
                                <strong class="card-title my-0">{{ $user->name }} </strong>
                                <p class="small text-muted mb-0">{{ $user->email }}</p>
                                <p class="small"><span class="badge badge-light font-weight-bold text-uppercase border text-{{ translateClassRoleAccount($user->role->name) }}">{{ $user->role->name }}</span></p>
                            </div>
                        </div> <!-- ./card-text -->
                        <div class="card-footer">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <small>
                                        <span class="dot dot-lg bg-{{ translateClassDisableAccount($user->email_verified_at) }} mr-1"></span> {{ checkDisableAccount($user->email_verified_at) }} </small>
                                </div>
                                <div class="col-auto">
                                    <div class="file-action">
                                        <button type="button"
                                            class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu m-2">
                                            <a class="dropdown-item" href="{{ route('admin.user.show', ['id' => $user->id]) }}">
                                                <i class="fe fe-meh fe-12 mr-4"></i>
                                                Profile
                                            </a>
                                            @if ($user->disable === 0)
                                                <a class="dropdown-item" href="{{ route('admin.user.update-disable', ['id' => $user->id ]) }}">
                                                    <i class="fe fe-lock fe-12 mr-4"></i>
                                                    Disable
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{ route('admin.user.update-disable', ['id' => $user->id ]) }}">
                                                    <i class="fe fe-unlock fe-12 mr-4"></i>
                                                    Active
                                                </a>
                                            @endif
                                            <a class="dropdown-item" href="{{ route('admin.user.destroy', ['id' => $user->id]) }}" onclick="return confirm('Are you sure?')">
                                                <i class="fe fe-delete fe-12 mr-4"></i>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.card-footer -->
                    </div>
                </div> <!-- .col -->
            @endforeach
            <div class="col-md-9">
            </div> <!-- .col -->
        </div> <!-- .row -->
    </div> <!-- .col-12 -->
@endsection
