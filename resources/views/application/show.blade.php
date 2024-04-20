@extends('layouts.main')
@section('content')
    <style>
        .enlarged-image {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Полупрозрачный черный фон */
            z-index: 9999; /* На переднем плане */
            justify-content: center;
            align-items: center;
        }

        .enlarged-image img {
            max-width: 90%; /* Ограничение максимальной ширины */
            max-height: 90%; /* Ограничение максимальной высоты */
        }

        .image-checkbox {
            display: none;
        }

        .image-checkbox:checked + .enlarged-image {
            display: flex;
        }

        .close-button {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
            cursor: pointer;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Application</h4>

                        </div>
                        <div class="header-action">
                            <a href="{{route('application.completeAll', $application->id)}}" class="btn btn-outline-success rounded-pill mt-2 mr-2">Толук бойдон кабыл алуу</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @foreach($application->user->documents as $document)
                            <div class="col-md-12 col-lg-12">
                                <div class="card mb-2">
                                    <div class="row no-gutters">
                                        <div class="col-md-6 col-lg-2">
                                            <label for="image1">
                                                <img src="{{ asset('storage/'.$document->file_path) }}" class="card-img" alt="#">
                                            </label>
                                            <input type="checkbox" id="image1" class="image-checkbox">
                                            <div class="enlarged-image">
                                                <label for="image1" class="close-button">&times;</label>
                                                <img src="{{ asset('storage/'.$document->file_path) }}" alt="Enlarged Image">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-8">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$document->document->name}}</h4>
                                                <p class="card-text">{{$document->document->description}}</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                <div class="d-flex justify-content-end">
                                                    @if($document->status == 1)
                                                    <a href="{{route('application.completeDoc', $document->id)}}" class="btn btn-outline-success rounded-pill mt-2 mr-2">Кабыл алуу</a>
                                                    <a href="{{route('application.rejectDoc', $document->id)}}" class="btn btn-outline-danger rounded-pill mt-2">Жараксыз деп табуу</a>
                                                    @elseif($document->status == 2)
                                                        <img width="50px" height="50px" src="{{asset('assets/tick.png')}}">
                                                    @else
                                                        <img width="50px" height="50px" src="{{asset('assets/error.png')}}">
                                                    @endif
                                                </div>
                                            </div>
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
    <script>
        // function goToPage(id)
        // {
        //     location.href = `/posts/show/${id}`;
        //     console.log(id);
        //
        // }
    </script>
@endsection
