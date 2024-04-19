@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Add new faculty</h4>
                    </div>
                </div>
                <div class="card-body w-50">
                    <form action="{{ route('faculty.store') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name_tr">Name turkish</label>
                                <input type="text" class="form-control" name="name_tr" id="name_tr"
                                       value="{{ old('name_tr') }}">
                                @error('name_tr')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description" id="description"
                                       value="{{ old('description') }}">
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description_tr">Description turkish</label>
                                <input type="text" class="form-control" name="description_tr" id="description_tr"
                                       value="{{ old('description_tr') }}">
                                @error('description_tr')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="{{ route('faculty.index') }}" type="button" class="btn bg-danger">Cancel</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
