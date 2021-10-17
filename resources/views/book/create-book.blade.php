@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h4>Please Fillup this data to donate your book</h4>

                    <form method="POST" action="{{ route('storebook') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bookName">Book Name</label>
                                <input name="book_name" type="text" class="form-control" id="bookName"
                                    placeholder="Book Name">
                                @error('book_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- emty col -->
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bookCategory">Book Category</label>
                                <select name="category" id="bookCategory" class="form-control">
                                    <option selected value=" ">Choose...</option>
                                    @foreach($category as $cat)
                                    <option value="{{ $cat->id }}"> {{ $cat->category_name }} </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="studyClass">Study Class(if have)</label>
                                <select name="study_class" id="studyClass" class="form-control">
                                    <option selected value=" ">Choose...</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="division">Division </label>
                                <select name="division" id="division" class="form-control">
                                    <option selected value=" ">Choose...</option>
                                    @foreach($divisions as $division)
                                    <option data-division_id="{{ $division->id}}"
                                        value="{{ $division->division_name }}"> {{ $division->division_name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('division')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="district"> District</label>
                                <select name="district" class="form-control" id="district">
                                    <option value="" selected>Select...</option>
                                </select>
                                @error('district')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="donorAddress"> Donor Present Address</label>
                                <input name="address" type="text" class="form-control" id="donorAddress"
                                    placeholder="1234 Main St">
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="donorName">Donated By</label>
                                <input name="donor_name" type="text" class="form-control" id="donorName"
                                    value="{{$user->name}}">
                                @error('donor_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input name="user_id" type="hidden" value="{{$user->id}}" hidden>
                            @error('user_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-6">
                                <label for="donorContactNumber">Donor Contact Number: </label>
                                <input name="contact_number" type="text" class="form-control" id="donorContactNumber"
                                    value="{{ $user->mobile }}">
                                @error('contact_number')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
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

@section('js-script')
<script>
    $(document).ready(function () {
        $('#division').on('change', function () {
            // var division_id = $('#division').val();
            var division_id = $('#division :selected').data('division_id');
            $('#district').empty().append('<option value="" selected>Select...</option>');
            var url = "{{route('getDistrictByDivisionId')}}"
            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    'division_id': division_id,
                },
                success: function (data) {
                    data.districts.forEach(element => {
                        $('#district').append('<option value=" ' + element.district_name + ' ">' + element.district_name + '</option>')
                    })
                }
            }); //ajax
        }); //on change
    });
</script>

@endsection
