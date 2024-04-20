<div class="tab-pane fade" id="chang-pwd" role="tabpanel">
    <div class="container-fluid">
        <form action="{{ route('') }}" >
        <div class="row">
            <!-- startFrom -->
            @foreach($teachers as $teacher)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="checkbox-wrapper-16From">
                    <div class="flex flex-wrap justify-center items-center w-11/12 mx-auto select-none gap-2 max-w-[500px]">
                        <label class="checkbox-wrapper">
                            <label class="text-slate-400">
                                <input class="checkbox-input" type="checkbox">
                                <span class="checkbox-tile">
                                                        <div class="cardFrom">

        <div class="profile-pic">

            <img src="{{ asset('storage/'.$teacher->image) }}" class="card-img-top" alt="#">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">{{ $teacher->name }}</span>
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
            @endforeach
            <!-- EndFrom -->
            <div class="spaceFrom"></div>
            <!-- startFrom -->

            <!-- EndFrom -->
            <div class="spaceFrom"></div>
        </div>
        </form>
    </div>
</div>
