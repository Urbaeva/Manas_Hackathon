@extends('layouts.main')
@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="width: 377px; height: 410px;">
                    <img style="width: 377px; height: 251px;" src="{{asset('storage/'.$post->faculty->image)}}"
                         class="card-img-top" alt="#">
                    <div class="card-body">
                        <h4 class="card-title">{{$post->name}}</h4>
                        <p class="card-text">{{$post->description}}</p>
                        <a href="{{route('applicant.apply', $post->id)}}"
                           class="btn btn-primary">{{__('main.Apply')}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
