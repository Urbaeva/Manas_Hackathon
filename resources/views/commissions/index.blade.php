@extends('layouts.main')
@section('content')
    <div class="row">
        <!-- startFrom -->
        <!-- startFrom -->
        @foreach($applications as $application)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="cardFromForStudent">
                    <div class="profile-pic">
                        <img src="{{asset('storage/'.$application->user->image)}}" class="card-img-top" alt="#">
                    </div>
                    <div class="bottom">
                        <div class="content">
                            <span class="name">{{$application->user->name}}</span>
                            <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
                        </div>
                        <div class="bottom-bottom">
                            <div class="social-links-container">
                                <span class="name" style="color: white;font-size: 1.3rem;">91/100</span>
                            </div>
                            <a href="{{route('commission.check', $application->id)}}" class="button">Текшеруу</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach


        <div class="spaceFrom"></div>
    </div>
@endsection
