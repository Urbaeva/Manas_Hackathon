<div class="tab-pane fade" id="emailandsms" role="tabpanel">
    <div class="row">
        @foreach($applications as $application)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="cardFromForStudent">
                    <div class="profile-pic">
                        <img src="{{ asset('storage/' . $application->user->image) }}" class="card-img-top" alt="#">
                    </div>
                    <div class="bottom">
                        <div class="content">
                            <span class="name">{{$application->user->name}}</span>
                            <span class="about-me">{{$application->user->email}}</span>
                        </div>
                        <div class="bottom-bottom">
                            <div class="social-links-container">

                            </div>
                            <a class="button" href="{{ route('application.show', $application->id) }}">Маалымат</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>
