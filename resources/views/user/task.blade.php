@extends('layouts.main')
@section('content')
    <button type="button" class="btn btn-primary mt-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button>
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"   aria-hidden="true">
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
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Input Size</h4>
                            </div>
                            <div class="header-action">
                                <i data-toggle="collapse" data-target="#form-element-7" aria-expanded="false">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="collapse" id="form-element-7">
                                <div class="card"></div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="colFormLabelSm">Small</label>
                                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm"
                                           placeholder="form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="colFormLabel">Default</label>
                                    <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="colFormLabelLg" class="pb-0">Large</label>
                                    <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                                           placeholder="form-control-lg">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Input Size</h4>
                            </div>
                            <div class="header-action">
                                <i data-toggle="collapse" data-target="#form-element-7" aria-expanded="false">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="collapse" id="form-element-7">
                                <div class="card"></div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="colFormLabelSm">Small</label>
                                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm"
                                           placeholder="form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="colFormLabel">Default</label>
                                    <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="colFormLabelLg" class="pb-0">Large</label>
                                    <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                                           placeholder="form-control-lg">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
