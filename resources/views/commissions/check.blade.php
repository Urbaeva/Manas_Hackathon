@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <li class="d-flex align-items-center mb-3">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <br>
                            @dd($application->exams)
                            <div class="about_img"><img class="avatar-100 rounded" src="{{asset('storage/'.$application->user->image)}}" alt="#" data-original-title="" title=""></div>
                        </div>
                        <br></br>
                        <div class="col-md-12">
                            <div class="fresh_taital">
                                <h5>  Fresh any</h5></div>
                            <p class="ipsum_text"><dd class="col-sm-9">Variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedvariations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</dd></p>
                            <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                    </div>
                    <br></br>
                    <div class="col-md-6">
                        <br></br>
                        <img src="../assets/images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image">
                        <ul class="list-unstyled p-0 m-0 row">
                            <li class="col-lg-4 col-md-6 col-sm-6 mt-2"><img src="../assets/images/page-img/10.jpg" class="img-thumbnail w-100 img-fluid rounded" alt="Responsive image"></li>
                            <li class="col-lg-4 col-md-6 col-sm-6 mt-2"><img src="../assets/images/page-img/11.jpg" class="rounded w-100 img-fluid rounded" alt="Responsive image"></li>
                            <li class="col-lg-4 col-md-6 col-sm-6 mt-2"><img src="../assets/images/page-img/12.jpg" class="rounded w-100 img-fluid rounded" alt="Responsive image"></li>
                        </ul>
                        <div class="fresh_taital">


                            <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                </li>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="email">Баа коюу:</label>
                            <input type="number" class="form-control" id="email1">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Ой пикир:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Сактоо</button>
                    </form>
                    <br></br>
                </div></div>
        </div>
    </div>
@endsection
