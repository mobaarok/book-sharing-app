@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('message'))
    <div class="alert alert-{{ session('messageType')}}" role="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="m-auto" src="{{ asset('book-demo.png') }}" width="150px" height="150px"
                                alt="Card image cap">
                        </div>
                        <div class="col-md-8">
                            <h4> {{ $book->book_name }} </h4>
                            <h5> Donated By, {{ $book->donor->name }} </h5>
                            <p> In category of, {{ $book->category->category_name }} </p>
                            <a class="btn btn-info" href="#">Get It Now</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@if($isNotRequested == true)
    <div class="row mt-3">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5>Request for book</h5>
                    <form method="POST" action="{{ route('bookWantedRequest') }}">
                        @csrf
                        <input type="hidden" name="book_id" value="{{$book->id}}" hidden>
                        @error('book_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <input type="hidden" name="donor_user_id" value="{{$book->donor->id}}" hidden>
                        @error('donor_user_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <input type="hidden" name="receiver_user_id" value="{{ $recevier_user->id }}" hidden>
                        @error('receiver_user_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="receiver_need">Your Need</label>
                                <input name="receiver_need" type="text" class="form-control" id="receiverNeed"
                                    placeholder="need">
                                <small id="receierNeedHelp" class="form-text">Why you request for free book insted of
                                    buying book. Please Tell us the reason shrotly.</small>

                                @error('receiver_need')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="receiver_study">Which class do you read in?</label>
                                <input name="receiver_study" type="text" class="form-control" id="receiver_study"
                                    placeholder="need">
                                @error('receiver_study')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobile">Your Mobile Number</label>
                                <input name="receiver_contact_number" type="text" class="form-control" id="mobile"
                                    placeholder="eg. 01816...." value="{{ $recevier_user->mobile }}">
                                @error('receiver_contact_number')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input name="receiver_address" type="text" class="form-control" id="address"
                                    placeholder="123, St. Street" value="{{ $recevier_user->address }}">
                                @error('receiver_address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description(optional)</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif


    <!-- wanted list -->
    <div class="row mt-3">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm mt-3">
                <div class="card-body">
                    <h3>All Request...</h3>
                    @foreach($book->wantedUser as $wantedRequest)
                    <div class="card border-0 shadow-sm bg-light mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4> Request of {{ $wantedRequest->fullname() }} </h4>
                                    <p>Mobile: {{ $wantedRequest->pivot->receiver_contact_number }} </p>
                                </div>
                                <div class="col-md-8">
                                    <h5> {{ $wantedRequest->pivot->receiver_need }} </h5>
                                    <p> Address: {{ $wantedRequest->pivot->receiver_address}} </p>
                                    <p> Des: {{ $wantedRequest->pivot->description }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
