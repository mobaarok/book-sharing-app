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
                    <div class="heading mb-2">
                        <h5 class="float-left">Categroy List</h5>
                        <p class="text-right">
                            <a class="btn btn-primary " href="{{ route('category.create') }}">Create Category</a>
                        </p>
                    </div>
                    <div class="row ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sl = 1 @endphp
                                @foreach($category as $cat)
                                <tr>
                                    <th scope="row"> {{ $sl++ }} </th>
                                    <td> {{ $cat->category_name }} </td>
                                    <td> <a class="btn btn-secondary" href="">Edit</a> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
