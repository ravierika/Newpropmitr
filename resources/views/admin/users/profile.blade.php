@extends('layouts.dashboardprime')

@section('content')

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Agent Profile
                <small>Welcome to {{$comp}}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{$comp}}</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="../assets/images/profile_av.jpg" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>{{$name}}</strong></h4>
                                <span class="job_post">{{$role}}</span>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="{{$twitter}}"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="Facebook" href="{{$facebook}}"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="Instagram" href="{{$insta}}"><i class="zmdi zmdi-instagram "></i></a>
                                </p>
                                <div>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-round"><i class="zmdi zmdi-edit mr-2"></i>Edit Profile</a>
                                </div>
                                
                            </div>                
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-camera col-amber"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                                <small>Shots View</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-thumb-up col-blue"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                <small>Likes</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-comment-text col-red"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                <small>Comments</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-account text-success"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                <small>Profile Views</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-desktop-mac text-info"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="251" data-speed="1000" data-fresh-interval="700">251</h5>
                                <small>Website View</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-attachment text-warning"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="52" data-speed="1000" data-fresh-interval="700">52</h5>
                                <small>Attachment</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <small class="text-muted">Email address: </small>
                            <p>{{Auth::user()->email}}</p>
                            <hr>
                            <small class="text-muted">Age: </small>
                            <p>{{Auth::user()->age}}</p>
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>{{Auth::user()->mobile}}</p>
                            <hr>
                            <small class="text-muted">Role: </small>
                            <p class="m-b-0">{{$role}}</p>
                        </div>
                                              
                    </div>
                </div>
                
                
                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                                <button class="btn btn-info btn-round">Save Changes</button>                               
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <input id="procheck1" type="checkbox">
                                            <label for="procheck1">Profile Visibility For Everyone</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck2" type="checkbox">
                                            <label for="procheck2">New task notifications</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck3" type="checkbox">
                                            <label for="procheck3">New friend request notifications</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection