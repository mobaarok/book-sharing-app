@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="displa">
                আপনার পুরাতন বই কি বাসায় অবহেলায় পড়ে আছে?
            </h1>
            <h3>
                আপনার বই কাজে লাগতে পারে দরিদ্র ছাত্রদের
            </h3>
            <hr class="my-4">
            <p>আপনার ছোট্ট একটু উদ্বেগ এগিয়ে নিয়ে যেতে পারে আমাদের ছাত্র দের শিক্ষা কে</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">এখনই দান করুন আপনার বই</a>
            </p>
        </div>
    </div>
<h2>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i>
                Facebook</a>
        </div>
    </div>
</h2>


@endsection
