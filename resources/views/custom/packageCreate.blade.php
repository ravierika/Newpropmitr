@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Leads
                <small>Welcome to {{$compn}}</small>
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
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="zmdi zmdi-home"></i> {{$compn}}</a></li>
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
                        <h2><strong>Package</strong> Information <small></small> </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('users.store')}}" files="true">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->companyid}}" name="companyid">
                            <input type="hidden" value="{{Auth::user()->companyinitials}}" name="companyinitials">
                            <input type="hidden" name="userid">
                            <h6 class="mt-4">Client Information</h6>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="triptype">{{ __('Client Name') }}<a class = "ml-5" href="javascript:void(0)" data-toggle="modal" , id = "new-customer">Add New Client</a> <a class = "ml-5" href="/customers">My Clients</a></label>
                                    <input id="cust" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{ old('Client_Name') }}" required autocomplete="Client_Name" placeholder="Enter Client Name">

                                    @error('Client_Name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="mobile"><span class="red ml-3">*</span> <span>Phone</span></label>
                                    <input id="mobile" type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="mobile" required autocomplete="mobile" value="{{ old('mobile') }}">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert" id="mobileError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="email"><span class="red ml-3">*</span> <span>Email</span></label>
                                    <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" required autocomplete="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="hotel w-100 row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="city"><span class="red ml-3">*</span> <span>Cities of World</span></label>
                                        <input onchange="checkCity()" id="city" type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Cities of World" required autocomplete="city" value="{{ old('city') }}">
                                        @error('city')
                                        <span class="invalid-feedback" role="alert" id="fromError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="check"><span class="red ml-3">*</span> <span>Check In </span></label>
                                        <input id="check" type="date" name="check" class="form-control @error('check') is-invalid @enderror" placeholder="Check In" required autocomplete="check" value="{{ old('check') }}">
                                        @error('check')
                                        <span class="invalid-feedback" role="alert" id="checkError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="checkout"><span class="red ml-3">*</span> <span>Check Out </span></label>
                                        <input id="checkout" type="date" name="checkout" class="form-control @error('checkout') is-invalid @enderror" placeholder="Check out" required autocomplete="checkout" value="{{ old('checkout') }}">
                                        @error('checkout')
                                        <span class="invalid-feedback" role="alert" id="returnError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Number of Adults</span></label>
                                        <input id="adult" type="number" name="adult" class="form-control @error('adult') is-invalid @enderror" placeholder="Number of Adults" required autocomplete="adult" value="{{ old('adult') }}">
                                        @error('adult')
                                        <span class="invalid-feedback" role="alert" id="adultError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Number of Kids</span></label>
                                        <input id="kids" type="number" name="kids" value="0" class="form-control @error('kids') is-invalid @enderror" placeholder="Number of Kids" required autocomplete="kids" value="{{ old('kids') }}">
                                        @error('kids')
                                        <span class="invalid-feedback" role="alert" id="kidsError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="rooms"><span class="red ml-3">*</span> <span>Number of Rooms</span></label>
                                        <input id="rooms" type="number" name="rooms" class="form-control @error('rooms') is-invalid @enderror" placeholder="Number of Rooms" required autocomplete="rooms" value="{{ old('rooms') }}">
                                        @error('rooms')
                                        <span class="invalid-feedback" role="alert" id="roomsError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <label class="d-flex align-items-center" for="bed"><span class="red ml-3">*</span> <span>Occupancy</span></label>
                                    <select name="bed" class="form-control show-tick" value="{{ old('bed') }}">
                                        <option value="">-- Occupancy --</option>
                                        <option value="single">Single</option>
                                        <option value="double">Double</option>
                                        <option value="triple">Triple</option>
                                        <option value="quadruple">Quadruple</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="roomsRate"><span class="red ml-3">*</span> <span>Room rate per Night</span></label>
                                        <input id="roomsRate" type="number" name="roomsRate" class="form-control @error('rooms') is-invalid @enderror" placeholder="Room rate per Night" required autocomplete="roomsRate" value="{{ old('roomsRate') }}">
                                        @error('roomsRate')
                                        <span class="invalid-feedback" role="alert" id="roomsRateError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="numberOfNight"><span class="red ml-3">*</span> <span>Number of Night</span></label>
                                        <input id="numberOfNight" type="number" name="numberOfNight" class="form-control @error('rooms') is-invalid @enderror" placeholder="Number of Night" required autocomplete="numberOfNight" value="{{ old('numberOfNight') }}">
                                        @error('numberOfNight')
                                        <span class="invalid-feedback" role="alert" id="numberOfNightError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="packageUpload"><span class="red ml-3">*</span> <span>Upload Package</span></label>
                                        <input id="packageUpload" type="file" name="packageUpload" class="form-control @error('rooms') is-invalid @enderror" placeholder="Upload Package" required autocomplete="packageUpload" value="{{ old('packageUpload') }}">
                                        @error('packageUpload')
                                        <span class="invalid-feedback" role="alert" id="packageUploadError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="d-flex align-items-center" for="hotel"><span class="ml-3"></span> <span>Hotel Rating</span></label>
                                    <select name="hotel" class="form-control show-tick" value="{{ old('hotel') }}">
                                        <option value="">-- Hotel Rating --</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label class="d-flex align-items-center" for="bed"><span class="ml-3"></span> <span>Bed Configuration</span></label>
                                    <select name="bed" class="form-control show-tick" value="{{ old('bed') }}">
                                        <option value="">-- Bed Configuration --</option>
                                        <option value="double">Double</option>
                                        <option value="twin">Twin</option>
                                    </select>
                                </div>







                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Remarks</span></label>
                                        <textarea id="remarks" type="text" name="remarks"class="form-control" placeholder="Remarks"  value="{{ old('remarks') }}"></textarea>
                                    </div>
                                </div>

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
<script src="{{URL::asset('assets/js/leads.js')}}"></script>

@endsection

@endsection
