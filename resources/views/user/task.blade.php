@extends('layouts.main')
@section('content')

    @foreach(auth()->user()->documents as $doc)
        <div class="iq-accordion career-style faq-style">
            <div class="card iq-accordion-block">
                <div class="active-faq clearfix" id="headingTwo">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12" data-toggle="modal" data-target="#modal{{$doc->id}}">
                                @if($doc->status == 0)
                                    <img width="50px" height="50px" src="{{asset('assets/warning.png')}}">
                                    <a class="collapsed"><span> {{$doc->document->name}} </span>
                                    </a>
                                @elseif($doc->status == 1)
                                    <img width="50px" height="50px" src="{{asset('assets/painding.png')}}">
                                    <a class="collapsed"><span> {{$doc->document->name}} </span>
                                    </a>
                                @elseif($doc->status == 2)
                                    <img width="50px" height="50px" src="{{asset('assets/tick.png')}}">
                                    <a class="collapsed"><span> {{$doc->document->name}} </span>
                                    </a>
                                @else
                                    <img width="50px" height="50px" src="{{asset('assets/error.png')}}">
                                    <a class="collapsed"><span> {{$doc->document->name}} </span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-xl" id="modal{{$doc->id}}" tabindex="-1" role="dialog"   aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
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
                                <form action="{{route('applicant.task.uploadDoc', $doc->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-0">
                                        <label for="colFormLabelLg" class="pb-0">{{$doc->document->name}}</label>
                                        <input type="file" class="form-control form-control-lg" id="colFormLabelLg" name="file">
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
