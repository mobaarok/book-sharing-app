@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5>Update User Info</h5>
                    <form method="POST" action="{{ route('updateUserInfo') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input name="first_name" type="text" class="form-control" id="firstName"
                                    placeholder="First Name" value="{{ $user->first_name }}">
                                @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input name="last_name" type="text" class="form-control" id="lastName"
                                    placeholder="Last Name" value="{{ $user->last_name }}">
                                @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input name="mobile" type="text" class="form-control" id="mobile"
                                    placeholder="eg. 01816...." value="{{ $user->mobile }}">
                                @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" id="address"
                                    placeholder="123, St. Street" value="{{ $user->address }}">
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
