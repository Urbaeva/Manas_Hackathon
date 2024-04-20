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
    @foreach($applications as $application)
        <div class="iq-accordion career-style faq-style">
            <div class="card iq-accordion-block">
                <div class="active-faq clearfix" id="headingTwo">
                    <div class="container-fluid">
                        <div class=" d-flex justify-content-between">
                            <div class="col-sm-6" data-toggle="modal" data-target="#modal{{$application->id}}">
                                <img width="50px" height="50px" style="border-radius: 4px;"
                                     src="{{asset('storage/'.$application->user->image)}}">
                                <a class="collapsed"><span> {{$application->user->name}} </span>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <label for="image1"> <img width="40px" height="40px" src="{{ asset('storage/'.$application->user->exams[0]->exam_file) }}"
                                        class="card-img" alt="#"/>
                                </label>
                                <input type="checkbox" id="image1" class="image-checkbox"/>
                                <div class="enlarged-image"><label for="image1" class="close-button">&times;</label>
                                    <img src="{{ asset('storage/'.$application->user->exams[0]->exam_file) }}"
                                         alt="Enlarged Image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-xl" id="modal{{$application->id}}" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{$application->user->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="collapse" id="form-element-7">
                                    <div class="card"></div>
                                </div>
                                <form action="{{route('exam.store', $application->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-0">
                                        <label for="exam_file">Upload exam file</label><br/>
                                        <input class="mt-1" type="file" name="exam_file" id="exam_file">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-4 mt-4">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
