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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <li class="d-flex align-items-center mb-3">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <br>

                            <div class="about_img"><img class="avatar-100 rounded" src="{{asset('storage/'.$application->user->image)}}" alt="#" data-original-title="" title=""></div>
                        </div>
                        <br></br>
                        <div class="col-md-12">
                            <div class="fresh_taital">
                                <h5> {{$application->user->name}}</h5></div>
                            <p class="ipsum_text"><dd class="col-sm-9">Мен Манас университетинин компьютердик Инженердик факультетин бүтүрүп жатам.
                                    Мен республикалык тесттен жакшы балл алдым, ошондуктан мен учурда окуп жаткан университетке грант алдым.
                                    Мектепте окуп жүргөндө физика жана математика сабактарына кызыгып, ар кандай мелдештерге катышчумун.
                                    Бирок мен программалоону улантууну чечтим. Анткени бүгүнкү күндө дээрлик бардык инновациялык ачылыштар маалыматтык технологиялар жаатында болот.
                                    Жасалма интеллектти кантип түзүүгө кызыкдармын.
                                    Университетте Мен python, c, c, java, c# сыяктуу көптөгөн программалоо тилдерин изилдеп, Windows жана Linux операциялык тутумдары менен иштедим.

                                    Ошондой эле иш тажрыйбам бар. Эки жылдан бери илим тармагында эмгектенип келем, азыр илим тармагында эмгектенем.</dd></p>
                            <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                    </div>
                    <br></br>
                    <div class="col-md-6">
                        <br></br>
                        <label for="image1">
                            <img src="{{asset('storage/'.$application->user->exams->first()->exam_file)}}" class="card-img" alt="#">
                        </label>
                        <input type="checkbox" id="image1" class="image-checkbox">
                        <div class="enlarged-image">
                            <label for="image1" class="close-button">&times;</label>
                            <img src="{{asset('storage/'.$application->user->exams->first()->exam_file)}}" alt="Enlarged Image">
                        </div>
                        <ul class="list-unstyled p-0 m-0 row">
                            <li class="col-lg-4 col-md-6 col-sm-6 mt-2">
                                <label for="image1">
                                    <img src="{{asset('storage/'.$application->user->exams->first()->exam_file)}}" class="card-img" alt="#">
                                </label>
                                <input type="checkbox" id="image1" class="image-checkbox">
                                <div class="enlarged-image">
                                    <label for="image1" class="close-button">&times;</label>
                                    <img src="{{asset('storage/'.$application->user->exams->first()->exam_file)}}" class="img-thumbnail w-100 img-fluid rounded" alt="Responsive image">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 mt-2">
                                <label for="image1">
                                    <img src="{{asset('storage/'.$application->user->exams->first()->exam_file)}}" class="card-img" alt="#">
                                </label>
                                <input type="checkbox" id="image1" class="image-checkbox">
                                <div class="enlarged-image">
                                    <label for="image1" class="close-button">&times;</label>
                                    <img src="{{asset('storage/'.$application->user->exams->first()->exam_file)}}" class="img-thumbnail w-100 img-fluid rounded" alt="Responsive image">
                                </div>                            </li>
                            <li class="col-lg-4 col-md-6 col-sm-6 mt-2">
                                <img src="{{asset('storage/'.$application->user->exams->first()->exam_file)}}" class="rounded w-100 img-fluid rounded" alt="Responsive image"></li>
                        </ul>
                        <div class="fresh_taital">


                            <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                </li>
                <div class="col-md-6">
                    <form action="{{route('commission.storeCheck', $application->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Баа коюу:</label>
                            <input type="number" class="form-control" id="email1" name="score">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Ой пикир:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Сактоо</button>
                    </form>
                    <br></br>
                </div></div>
        </div>
    </div>
@endsection
