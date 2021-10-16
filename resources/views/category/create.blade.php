@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5>Create Category</h5>

                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="categoryName">Category Name</label>
                                <input name="category_name" type="text" class="form-control" id="categoryName"
                                    placeholder="Book Name">
                                @error('category_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

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
