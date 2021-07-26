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
                            <div class="col-md-3 mb-2 text-center">

                            <form method="POST" enctype="multipart/form-data" id="upload_image_form" action="javascript:void(0)" >
                                @if(empty($user->file))
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2"> <img id="image_preview_container" src="{{ asset('storage/profileimages/avatar-1577909_640.png') }}"
                                            alt="preview image" style="max-height: 90px; max-width: 90px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" class="ml-2" name="image" placeholder="Choose image" id="image" style="color:transparent;"/>
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                @else
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2"> <img id="image_preview_container" src="{{ asset('storage/profileimages/' .$user->file) }}"
                                            alt="preview image" style="max-height: 120px; max-width: 120px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" class="ml-3" name="image" placeholder="Choose image" id="image" style="color:transparent;"/>
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="col-md-12 ml-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>



                                </div>
                            </form>

                            </div>
                            <div class="col-md-9 mb-2 pl-4">
                                <h2 class="mb-1"><strong>{{$name}}</strong></h2>
                                <p class="mb-3 author_info">Web Developer</p>

                                <p class="mb-0 author_info">795 Folsom Ave, Suite 600</p>
                                <p class="mb-0 author_info">San Francisco, CARDGE 94107</p>
                                <div class="social_link">
                                    <a title="facebook" href="" target="_blank" class=" waves-effect waves-block"> <i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                                    <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-behance"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 mb-2 text-center">

                            <form method="POST" enctype="multipart/form-data" id="upload_image_formlogo" action="javascript:void(0)" >
                                @if(empty($user->companylogo))
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2"> <img id="image_preview_containerlogo" src="{{ asset('storage/logoimages/logo.png') }}"
                                            alt="preview image" style="height: 90px; width: 95px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" class="ml-2" name="imagelogo" placeholder="Choose image" id="imagelogo" style="color:transparent;"/>
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                @else
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2 "> <img id="image_preview_containerlogo" src="{{ asset('storage/logoimages/' .$user->companylogo) }}"
                                            alt="preview image" style="height: 90px; width: 95px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" class="ml-2" name="image" placeholder="Choose image" id="imagelogo" style="color:transparent;"/>
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="col-md-12 ml-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>



                                </div>
                            </form>

                            </div>
                            <div class="col-md-9 mb-2">
                                <div class="row icofont-company-icon">

                                    <div class="col-sm-4 border-right">
                                        <div class="view text-center my-3">
                                            <i class="zmdi zmdi-camera col-amber"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                                            <small>Shots View</small>
                                        </div>
                                        <div class="view text-center my-3">
                                            <i class="zmdi zmdi-account text-success"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                            <small>Profile Views</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 border-right">
                                        <div class="view text-center my-3">
                                            <i class="zmdi zmdi-thumb-up col-blue"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                            <small>Likes</small>
                                        </div>
                                        <div class="view text-center my-3">
                                            <i class="zmdi zmdi-desktop-mac text-info"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="251" data-speed="1000" data-fresh-interval="700">251</h5>
                                            <small>Website View</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 border-right">
                                        <div class="view text-center my-3">
                                            <i class="zmdi zmdi-comment-text col-red"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                            <small>Comments</small>
                                        </div>
                                        <div class="view text-center my-3">
                                            <i class="zmdi zmdi-attachment text-warning"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="52" data-speed="1000" data-fresh-interval="700">52</h5>
                                            <small>Attachment</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
                        <form method="POST" enctype="multipart/form-data" id="update_user" action="javascript:void(0)" >
                            @csrf
                        <div class="tab-pane body active" id="about">
                            <small class="text-muted">Email address: </small>
                            <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter Your Email">
                            <hr>
                            <small class="text-muted">Age: </small>
                            <input type="number" name="age" value="{{$user->age}}" class="form-control" placeholder="Enter Your Email">
                            <p>{{Auth::user()->age}}</p>
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <input type="number" name="mobile" value="{{$user->mobile}}" class="form-control" placeholder="Enter Your Email">
                            <p>{{Auth::user()->mobile}}</p>
                            <hr>

                            <small class="text-muted">Role: </small>
                            <p class="m-b-0">{{$role}}</p>

                        </div>
                        <div class="col-md-12 ml-2 mb-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>


                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                            </div>
                            <form method="POST" enctype="multipart/form-data" id="update_user_password" action="javascript:void(0)" >
                                @csrf
                            <div class="body">
                                <div class="form-group">
                                    <input id="currentpassword" type="password" name="currentpassword" class="form-control @error('currentpassword') is-invalid @enderror" placeholder="Current Password" required autocomplete="currentpassword">
                                    <span class="passError red" id="currentPassError"></span>
                                    {{-- @error('currentpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror --}}

                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="password">
                                    <span class="passError red" id="passError"></span>
                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                                <div class="form-group">
                                    <input id="confirmpassword" type="password" class="form-control @error('confirmpassword') is-invalid @enderror" placeholder="Confirm Password" name="confirmpassword" required autocomplete="confirmpassword">
                                    {{-- @error('confirmpassword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                    <span class="passError red" id="confirmPassError"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
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
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">

    $(document).ready(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#image').change(function(){

            let reader = new FileReader();
            reader.onload = (e) => {
              $('#image_preview_container').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

        });

        $('#upload_image_form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type:'POST',
                url: "{{ route("save.photo") }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    location.reload();
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $('#imagelogo').change(function(){

      let reader = new FileReader();
      reader.onload = (e) => {
        $('#image_preview_containerlogo').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);

  });

  $('#upload_image_formlogo').submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);

      $.ajax({
          type:'POST',
          url: "{{ route("save.logo") }}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {
              this.reset();
              location.reload();
          },
          error: function(data){
              console.log(data);
          }
      });
  });
});

$(document).ready(function (e) {

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });


  $('#update_user').submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);

      $.ajax({
          type:'POST',
          url: "{{ route("user.update", $user->id) }}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {
              this.reset();
              location.reload();
          },
          error: function(data){
              console.log(data);
          }
      });
  });

  $('#update_user_password').submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);

      $.ajax({
          type:'POST',
          url: "{{ route("user.update.password", $user->id) }}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {
              this.reset();
            //location.reload();

            swal("Greate","Your Password Is Changed","success",{
                button:"OK",
            })
          },
          error: function(data){
            //   console.log(data);
            if(data.responseJSON){
                console.log(data);
                const currentPassError = document.getElementById('currentPassError');
                currentPassError.innerText = data.responseJSON.errors.currentpassword[0];

                const confirmPassError = document.getElementById('confirmPassError');
                confirmPassError.innerText = data.responseJSON.errors.confirmpassword[0];

                const passError = document.getElementById('passError');
                passError.innerText = data.responseJSON.errors.password[0];
            }
          }
      });
  });
});



</script>
@endsection
@endsection
