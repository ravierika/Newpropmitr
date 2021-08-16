@extends('layouts.dashboardprime')

@section('content')

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Agent Profile
                <small>Welcome to {{$compn}}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{$compn}}</a></li>
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
                                            <input type="file" class="ml-2" name="image" placeholder="Choose image" id="image" style="color:transparent;"/>
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
                    </div>                    
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <form method="POST" enctype="multipart/form-data" id="upload_image_formlogo" action="javascript:void(0)" >
                                @if(empty($user->companylogo))
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="float-md-left ml-2"> <img id="image_preview_containerlogo" src="{{ asset('storage/logoimages/logo.png') }}"
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
                                        <div class="float-md-left ml-2 "> <img id="image_preview_containerlogo" src="{{ asset('storage/logoimages/' .$user->companylogo) }}"
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
                                    <p>check commit</p>    
                                    

                                </div>     
                            </form>
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
                                    @error('currentpassword')
                                    <span class="invalid-feedback" role="alert" id="currentpasswordError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror  
                                
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert" id="passwordError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                        
                                </div>
                                <div class="form-group">
                                    <input id="confirmpassword" type="password" class="form-control @error('confirmpassword') is-invalid @enderror" placeholder="Confirm Password" name="confirmpassword" required autocomplete="confirmpassword">    
                                    @error('confirmpassword')
                                        <span class="invalid-feedback" role="alert" id="confirmpasswordError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                 
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Company</strong>Information</h2>
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
        $('#imagelogo').change(function(){
    
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#image_preview_containerlogo').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 

});

$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
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
              location.reload();
          },
          error: function(data){
              console.log(data);
              var response = JSON.parse(data.responseText);
              console.log(response);
          }
      });
  });
});


 
</script>
@endsection
@endsection