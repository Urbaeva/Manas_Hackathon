@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Маалымат киргизуу</h4>
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
                        <div class="card"><kbd class="bg-dark"><pre id="form-input" class="text-white">
                            <code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputText1&#x22;&#x3E;Input Text &#x3C;/label&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputText1&#x22; value=&#x22;Mark Tech&#x22;
         placeholder=&#x22;Enter Name&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputEmail2&#x22;&#x3E;Email Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputEmail2&#x22; value=&#x22;markTech@gmail.com&#x22;
         placeholder=&#x22;Enter Email&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputNumber3&#x22;&#x3E;Number Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;number&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputNumber3&#x22; value=&#x22;123456&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputPassword4&#x22;&#x3E;Password Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputPassword4&#x22; value=&#x22;example123&#x22;
         placeholder=&#x22;Enter Password&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputText1">ФИО </label>
                            <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" value="markTech@gmail.com"
                                   placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber3">Телефон</label>
                            <input type="number" class="form-control" id="exampleInputNumber3" value="996990406020">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Сурот жуктоо</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Жонотуу</button>
                        <!-- <button type="submit" class="btn bg-danger">Cancel</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
