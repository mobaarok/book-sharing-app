@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                                <img class="m-auto" src="{{ asset('book-demo.png') }}" width="150px" height="150px" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                        <h4> {{ $book->book_name }} </h4>
                        <h5> Donated By, {{ $book->donor->name }} </h5>
                        <p> In category of,  {{ $book->category->category_name }} </p>
                        <a class="btn btn-info" href="#">Get It Now</a>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
