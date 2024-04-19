@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Form Grid</h4>
                    </div>
                    <div class="header-action">
                        <i data-toggle="collapse" data-target="#form-element-2" aria-expanded="false">
                            <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('faculty.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">{{ __('main.name') }}</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">{{ __('main.description') }}</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                           value="{{ old('description') }}">
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="name_tr">{{ __('main.name_tr') }}</label>
                                    <input type="text" class="form-control" name="name_tr" id="name_tr"
                                           value="{{ old('name_tr') }}">
                                    @error('name_tr')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description_tr">{{ __('main.description_tr') }}</label>
                                    <input type="text" class="form-control" name="description_tr" id="description_tr"
                                           value="{{ old('description_tr') }}">
                                    @error('description_tr')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="{{ route('faculty.index') }}" type="button" class="btn bg-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
