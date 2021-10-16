@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h5>All Book You Share to Donate</h5>
                    <div class="row">

                        <!-- book start -->
                        @foreach($books as $book)
                        <div class="col-md-4 mt-3">
                            <div class="card border-0 shadow">
                                <img class="m-auto" src="{{ asset('book-demo.png') }}" width="150px" height="150px"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $book->book_name }} </h5>
                                    <p class="card-text">
                                        This book in {{ $book->category->category_name }} . More,
                                        <span> <a href="{{ route('singlebook', $book->slug) }}"> See Details</a> </span>
                                    </p>
                                    <div class="">
                                        <p class="text-center">
                                            <a href="{{ route('editbook', $book->slug) }}"
                                                class="btn btn-primary">Edit</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- book end -->

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="mb-5">
                        <h5 class="float-left">Profile</h5>
                        <a class="btn btn-primary btn-sm float-right" href="{{ route('editUserInfo') }}">Edit</a>
                    </div>
                    <h5 style="clear: both;"> Name: {{ $user->fullName() ?? 'None' }} </h5>
                    <p>Mobile: {{ $user->mobile ?? 'None' }}</p>
                    <p>Email: {{ $user->email ?? 'None' }}</p>
                    <p>Address: {{ $user->address ?? 'None' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
