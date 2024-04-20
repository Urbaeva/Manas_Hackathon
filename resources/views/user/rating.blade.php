@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Rating of  {{ $post->name }} </h4>
                        </div>
                        <div class="header-action">
                            <i data-toggle="collapse" data-target="#table-1" aria-expanded="false">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Score</th>
                                <th scope="col">Faculty</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post->applications as $application)
                                <tr>
                                    <th scope="row">{{ $application->user->id }}</th>
                                    <td>{{ $application->user->name }}</td>
                                    <td>scoresaaa</td>
                                    <td>{{ $application->post->faculty->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
