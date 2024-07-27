@extends('layouts.admin')
@section('title', 'User Profile')
@section('content')
<div class="col-12 col-lg-10 col-xl-8">
    <h2 class="h3 mb-4 page-title">{{ ($user->role->name == 'user') ? 'Profile' : 'Setting' }}</h2>
    <div class="my-4"><form>
            <div class="row mt-5 align-items-center">
                <div class="col-md-3 text-center mb-5">
                    <div class="avatar avatar-xl">
                        <img src="{{ (!empty($user->avatar)) ? $user->avatar : asset('admin/assets/images/profile-default.png') }}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h4 class="mb-1">{{ $user->name }}</h4>
                            <p class="small mb-3"><span class="badge badge-dark">{{ $user->email }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" value="{{ $user->name }}" {{ checkRoleEditInformationUser(auth()->user()->id, $user->id) }}>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" class="form-control" value="{{ $user->phone ?? "" }}" {{ checkRoleEditInformationUser(auth()->user()->id, $user->id) }}>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="{{ $user->email }}" {{ checkRoleEditInformationUser(auth()->user()->id, $user->id) }}>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="{{ $user->address ?? "" }}" {{ checkRoleEditInformationUser(auth()->user()->id, $user->id) }}>
            </div>
            @if ($user->role->name == 'admin' && auth()->user()->id === $user->id)
            <hr class="my-4">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputPassword4">Old Password</label>
                        <input type="password" class="form-control" id="inputPassword5">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword5">New Password</label>
                        <input type="password" class="form-control" id="inputPassword5">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword6">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword6">
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="mb-2">Password requirements</p>
                    <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following
                        requirements: </p>
                    <ul class="small text-muted pl-4 mb-0">
                        <li> Minimum 8 character </li>
                        <li>At least one special character</li>
                        <li>At least one number</li>
                        <li>Can’t be the same as a previous password </li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Change</button>
            @endif
        </form>
    </div> <!-- /.card-body -->
</div> <!-- /.col-12 -->
@endsection
