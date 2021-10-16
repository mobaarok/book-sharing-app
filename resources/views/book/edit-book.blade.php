@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h4>Edit Book Info</h4>

                    <form method="POST" action="{{ route('updatebook', $book->slug) }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bookName">Book Name</label>
                                <input name="book_name" type="text" class="form-control" id="bookName"
                                    placeholder="Book Name" value="{{$book->book_name }}">
                                @error('book_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bookCategory">Book Category</label>
                                <select name="category" id="bookCategory" class="form-control">
                                    <option value=" ">Choose...</option>
                                    <option selected value="{{ $book->category->id }}"> {{ $book->category->category_name }} </option>
                                    @foreach($category as $cat)
                                    <option value="{{ $cat->id }}"> {{ $cat->category_name }} </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="donorAddress"> Donor Present Address</label>
                            <input name="donor_address" type="text" class="form-control" id="donorAddress"
                                placeholder="1234 Main St" >
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="donorName">Donated By</label>
                                <input name="donor_name" type="text" class="form-control" id="donorName"
                                    value="{{$book->donor->name}}">
                            </div>
                            <input name="user_id" type="hidden" value="{{$book->donor->id}}" hidden>

                            <div class="form-group col-md-6">
                                <label for="donorContactNumber">Donor Contact Number: </label>
                                <input type="text" class="form-control" id="donorContactNumber">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
