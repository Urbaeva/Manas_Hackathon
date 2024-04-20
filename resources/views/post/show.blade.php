@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-edit-list usr-edit">
                        <ul class="iq-edit-profile d-flex nav nav-pills">
                            <li class="col-md-3 p-0"> <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Жарыя маалыматы
                                </a> </li>
                            <li class="col-md-3 p-0"> <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Комиссия тандоо
                                </a> </li>
                            <li class="col-md-3 p-0"> <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                    Катталгандар
                                </a> </li>
                            <li class="col-md-3 p-0"> <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                    Документтер
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="iq-edit-list-data">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Маалымат</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-12">
                                            <div class="profile-img-edit">
                                                <div class="crm-profile-img-edit"> <img class="crm-profile-pic rounded-circle avatar-100" src="../assets/images/user/1.jpg" alt="profile-pic">
                                                    <div class="crm-p-image bg-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg> <input class="file-upload" type="file" accept="image/*"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row align-items-center">
                                        <div class="form-group col-sm-6"> <label for="fname">Аталышы:</label> <input type="text" class="form-control" id="fname" value="Barry" disabled> </div>
                                        <div class="form-group col-sm-6"> <label for="lname">Факультет:</label> <input type="text" class="form-control" id="lname" value="Программдык инженерия" disabled> </div>
                                        <div class="form-group col-sm-6"> <label for="lname">Орун саны:</label> <input type="text" class="form-control" id="lname" value="10" disabled> </div>
                                        <div class="form-group col-sm-6"> <label for="uname">Дата:</label> <input type="text" class="form-control" id="uname" value="20.04.2024-14.05.2024" disabled> </div>
                                        <div class="form-group col-sm-6"> <label for="cname">City:</label> <input type="text" class="form-control" id="cname" value="Atlanta" disabled> </div>

                                    </div> <button type="submit" class="btn btn-primary">Очуруу</button> </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- startFrom -->
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="checkbox-wrapper-16From">
                                        <div class="flex flex-wrap justify-center items-center w-11/12 mx-auto select-none gap-2 max-w-[500px]"> <label class="checkbox-wrapper">

                                                <label class="text-slate-400">
                                                    <input class="checkbox-input" type="checkbox">
                                                    <span class="checkbox-tile">
               <div class="cardFrom">

        <div class="profile-pic">

            <img src="../assets/images/page-img/card.jpg" class="card-img-top" alt="#">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">My Name</span>
                <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
            </div>
           <div class="bottom-bottom">
            <div class="social-links-container">


            </div>
           </div>
        </div>
    </div>
    </span>
                                                </label> </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- EndFrom -->
                                <div class="spaceFrom"></div>
                                <!-- startFrom -->
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="checkbox-wrapper-16From">
                                        <div class="flex flex-wrap justify-center items-center w-11/12 mx-auto select-none gap-2 max-w-[500px]"> <label class="checkbox-wrapper">

                                                <label class="text-slate-400">
                                                    <input class="checkbox-input" type="checkbox">
                                                    <span class="checkbox-tile">
               <div class="cardFrom">

        <div class="profile-pic">

            <img src="../assets/images/page-img/card.jpg" class="card-img-top" alt="#">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">My Name</span>
                <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
            </div>
           <div class="bottom-bottom">
            <div class="social-links-container">


            </div>
           </div>
        </div>
    </div>
    </span>
                                                </label> </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- EndFrom -->
                                <div class="spaceFrom"></div>
                            </div>
                            <!-- buttonCom -->
                            <!-- <div class="row">
                              <button type="submit" class="buttonFrom">Сактоо</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                        <div class="row">
                            <!-- startFrom -->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="cardFromForStudent">
                                    <div class="profile-pic">
                                        <img src="../assets/images/page-img/card.jpg" class="card-img-top" alt="#">
                                    </div>
                                    <div class="bottom">
                                        <div class="content">
                                            <span class="name">My Name</span>
                                            <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
                                        </div>
                                        <div class="bottom-bottom">
                                            <div class="social-links-container">

                                            </div>
                                            <button class="button">Маалымат</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- EndFrom -->
                            <div class="spaceFrom"></div>
                            <!-- startFrom -->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="cardFromForStudent">
                                    <div class="profile-pic">
                                        <img src="../assets/images/page-img/card.jpg" class="card-img-top" alt="#">
                                    </div>
                                    <div class="bottom">
                                        <div class="content">
                                            <span class="name">My Name</span>
                                            <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
                                        </div>
                                        <div class="bottom-bottom">
                                            <div class="social-links-container">

                                            </div>
                                            <button class="button">Маалымат</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- EndFrom -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="manage-contact" role="tabpanel">

                        <div class="checkbox-wrapper-16From">
                            <div class="card">

                                <label class="checkbox-wrapper">
                                    <input class="checkbox-input" type="checkbox">
                                    <span class="checkbox-tile">

                    <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                        <h4 class="card-title">PDF</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <h6 class="card-title">Description</h4>
                    </div>

</span>
                                </label>
                            </div>
                        </div>


                        <div class="checkbox-wrapper-16From">
                            <div class="card">

                                <label class="checkbox-wrapper">
                                    <input class="checkbox-input" type="checkbox">
                                    <span class="checkbox-tile">

                    <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                        <h4 class="card-title">Сурот</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <h6 class="card-title">Description</h4>
                    </div>

</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
