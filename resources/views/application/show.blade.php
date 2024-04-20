@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Application</h4>

                        </div>
                        <div class="header-action">
                            <i data-toggle="collapse" data-target="#datatable-1" aria-expanded="false">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body">
                        show
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
