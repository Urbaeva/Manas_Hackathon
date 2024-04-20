@extends('layouts.main')
@section('content')
    <style>
        .hint {
            color: #6c757d;
            font-size: 0.875em;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="header-action">
                        <i data-toggle="collapse" data-target="#form-element-6" aria-expanded="false">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-element-6">
                        <div class="card"></div>
                    </div>
                    <form action="{{route('applicant.apply.store', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach($post->documents as $document)
                            <div class="form-group">
                                <label for="exampleInputEmail2">{{$document->name}}</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" aria-describedby="nameHint{{$post->id}}" id="customFile" name="{{$document->id}}" {{$document->pivot->priority == 1 ? 'required' : ''}}>
                                    <label class="custom-file-label" for="customFile"></label>
                                    <div id="nameHint{{$post->id}}" class="hint">{{$document->description}}</div>
                                    @if($document->pivot->priority == 0)
                                        <div id="nameHint{{$post->id}}" class="hint">{{\Carbon\Carbon::parse($document->pivot->deadline)->format('d.m.Y') . " Чейин жүктөө зарыл"}}</div>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary mr-2">{{__('main.Apply')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
