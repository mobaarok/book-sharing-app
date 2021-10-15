@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- filetr -->
            <div class="card">
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card border-0">
                <div class="card-body">
                    <!-- book list loop -->
                    <div class="row">

                        <!-- book start -->
                        @foreach($books as $book)
                        <div class="col-md-4 mt-3">
                            <div class="card border-0 shadow">
                                <img class="m-auto" src="book-demo.png" width="150px" height="150px" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $book->book_name }} </h5>
                                    <p>Donate by:
                                        <span> <a href="#"> {{ $book->donor->name }} </a> </span>
                                    </p>
                                    <p class="card-text">
                                     This book in   {{ $book->category->category_name }} . More,
                                        <span> <a href="{{ route('singlebook', $book->slug) }}"> See Details</a> </span>
                                    </p>
                                    <div class="">
                                        <p class="text-center">
                                            <a href="#" class="btn btn-primary">Get Book</a>
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
    </div>
</div>

@endsection
