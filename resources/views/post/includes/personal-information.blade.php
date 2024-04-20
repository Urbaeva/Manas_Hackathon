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
                            <div class="crm-profile-img-edit"> <img class="crm-profile-pic rounded-circle avatar-100" src="{{ asset('storage/'.$post->faculty->image  ) }}" alt="profile-pic">
                                <div class="crm-p-image bg-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg> <input class="file-upload" type="file" accept="image/*"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" row align-items-center">
                    <div class="form-group col-sm-6"> <label for="fname">{{ __('main.name') }}:</label> <input type="text" class="form-control" id="fname" value="{{ $post->name }}" disabled> </div>
                    <div class="form-group col-sm-6"> <label for="lname">{{ __('main.Faculty') }}:</label> <input type="text" class="form-control" id="lname" value="{{ $post->faculty->name }}" disabled> </div>
                    <div class="form-group col-sm-6"> <label for="lname">{{ __('main.place') }}:</label> <input type="text" class="form-control" id="lname" value="10" disabled> </div>
                    <div class="form-group col-sm-6"> <label for="uname">Дата:</label> <input type="text" class="form-control" id="uname" value="20.04.2024-14.05.2024" disabled> </div>
                    <div class="form-group col-sm-6"> <label for="cname">City:</label> <input type="text" class="form-control" id="cname" value="Atlanta" disabled> </div>

                </div> <button type="submit" class="btn btn-primary">Очуруу</button> </form>
        </div>
    </div>
</div>
