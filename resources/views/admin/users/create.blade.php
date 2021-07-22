@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Agent
                <small>Welcome to {{$comp}}</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Visitors</small>
                </div>
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                    <small class="col-white">Bounce Rate</small>
                </div>
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="zmdi zmdi-home"></i> {{$comp}}</a></li>
                    <li class="breadcrumb-item active">Add Agent</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Personal</strong> Information <small></small> </h2>
                        
                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('users.store')}}" files="true">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->companyid}}" name="companyid">
                            <input type="hidden" value="{{Auth::user()->companyinitials}}" name="companyinitials">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control" placeholder="Phone No.">
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="age" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <select name="gender" class="form-control show-tick">
                                    <option value="">-- Gender --</option>
                                    <option value="10">Male</option>
                                    <option value="20">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>
                        <h6 class="mt-4">Account Information</h6>
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="company" class="form-control" readonly="" id="inputCompany" value="{{$comp}}">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <select name="role_id" class="form-control show-tick">
                                    <option value="">-- Role --</option>
                                    <option value="2" >User</option>
                                    <option value="3" >Accountant</option>
                                    <option value="1" >Administrator</option>
                                </select>
                            </div>
                        
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            
                        </div>
                        <h6 class="mt-4">Social Information</h6>
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="facebook" class="form-control" placeholder="Facebook">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="google" class="form-control" placeholder="Google">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="linkedin" class="form-control" placeholder="Linkdin">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h6 class="mt-4">Upload Image</h6>

                                <div class="form-group mb-0">
                                    <input id="demo" type="file_id" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            <a href="{{route('users.index')}}" class="btn btn-primary btn-round">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scriptsc')


@endsection

@endsection