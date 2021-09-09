@extends('layouts.dashboardprime')

@section('content')


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property Add
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
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{$comp}}</a></li>
                    <li class="breadcrumb-item active">Property</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 pr-0">
                <div class="filter-card">
                    <div class="row">
                        <div class="col-1 validation_container">
                            <span class="validation"><span class="active"></span></span>
                            <span class="line"></span>
                            <span class="validation"><span id="val1"></span></span>
                            <span class="line"></span>
                            <span class="validation"><span id="val2"></span></span>
                            <span class="line"></span>
                            <span class="validation"><span id="val3"></span></span>
                            <span class="line"></span>
                            <span class="validation"><span id="val4"></span></span>
                        </div>
                        <div class="validation_title">
                            <h6 onclick="propertiesRender('basic_detail','create_render')">Basic Details</h6>
                            <p><span>Step 1</span></p>
                            <h6 onclick="propertiesRender('location','create_render')">Location Details</h6>
                            <p><span>Step 2</span></p>
                            <h6 onclick="propertiesRender('feature','create_render')">Property Profile</h6>
                            <p><span>Step 3</span></p>
                            <h6 onclick="propertiesRender('price','create_render')">Pricing & Others</h6>
                            <p><span>Step 4</span></p>
                            <h6 onclick="propertiesRender('image','create_render')">Photos</h6>
                            <p><span>Step 5</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add your Property<small>It will do wonders...</small> </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('properties.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->company}}" name="company">
                            <input type="hidden" value="{{Auth::user()->name}}" name="agent">

                            <div id="basic_detail"  class="create_render">

                            <h6 class="mt-2">Property Information</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="radio inlineblock m-r-45">
                                        <input type="radio" class="form-control" name="for" id="radio1" value="sale" checked="">
                                        <label for="radio1">For Sale</label>
                                    </div>
                                    <div class="radio inlineblock m-r-45">
                                        <input type="radio" class="form-control" name="for" id="radio2" value="rent">
                                        <label for="radio2">For Rent</label>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select id="typeOfProperty" onchange="propertyType()" name="type" class="form-control show-tick ms select2" data-placeholder="Select">
                                            <option value="">-- Property Type --</option>
                                            <optgroup label="Residential">
                                                <option value="FA">Flat/Apartment</option>
                                                <option value="RH">Residential House</option>
                                                <option value="V">Villa</option>
                                                <option value="BL">Builder Floor</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="RLP">Residential Land/Plot</option>
                                                <option value="PH">Penthouse</option>
                                                <option value="SA">Studio Apartment</option>
                                            </optgroup>
                                            <optgroup label="Commercial">
                                                <option value="COS">Commercial Office Space</option>
                                                <option value="OIT">Office in IT Park/SEZ</option>
                                                <option value="CS">Commercial Shop</option>
                                                <option value="CSR">Commercial Showroom</option>
                                                <option value="CL">Commercial Land</option>
                                                <option value="WG">Warehouse/Godown</option>
                                                <option value="IL">Industrial Land</option>
                                                <option value="IB">Industrial Building</option>
                                                <option value="IS">Industrial Shed</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" onclick="propertiesRender('location','create_render', true,['val1'])" type="submit" class="btn btn-primary btn-round">Next</a>
                                </div>
                            </div>
                        </div>

                        <div id="location" class="create_render create_render_active">

                            <h6 class="mt-2">Property Location</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="city"><span class="red ml-3">*</span> <span>Enter City</span></label>
                                        <input class="form-control" name="city" id="city" placeholder="Enter City">                                </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="locality"><span class="red ml-3">*</span> <span>Enter Locality</span></label>
                                        <input class="form-control" name="locality" id="locality" placeholder="Enter Locality">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" onclick="propertiesRender('feature','create_render', true,['val1','val2'])" type="submit" class="btn btn-primary btn-round">Next</a>
                                    <a href="javascript:void(0)" onclick="propertiesRender('basic_detail','create_render', false, ['val1'])" type="submit" class="btn btn-default btn-round btn-simple">Previous</a>
                                </div>
                            </div>
                        </div>

                        <div id="feature"  class="create_render create_render_active">
                            <h2 class="card-inside-title">Property Address</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="1" name="address" class="form-control no-resize" placeholder="Please type the Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="comercial_offece_space"></div>
                            <div id="comercial_offece_space2"></div>

                            <h6 class="mt-4">Property features </h6>
                            <div id="toggleContent">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-line">
                                        <label class="d-flex align-items-center" for="bedrooms"><span class="red ml-3">*</span> <span>Bedrooms</span></label>
                                        <select name="bedrooms" class="form-control show-tick">
                                            <option value="">-- Bedrooms --</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="5+" >5+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-line">
                                        <label class="d-flex align-items-center" for="bathrooms"><span class="red ml-3">*</span> <span>Bathrooms</span></label>
                                        <select name="bathrooms" class="form-control show-tick">
                                            <option value="">-- Bathrooms --</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="5+" >5+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <label class="d-flex align-items-center" for="balconies"><span class="red ml-3">*</span> <span>Balconies</span></label>
                                        <select name="balconies" class="form-control show-tick">
                                            <option value="">-- Balconies --</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="5+" >5+</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <label class="d-flex align-items-center" for="furnishing"><span class="red ml-3">*</span> <span>Furnished Status</span></label>
                                        <select name="furnishing" class="form-control show-tick">
                                            <option value="">-- Furnished Status --</option>
                                            <option value="1" >Fully Furnished</option>
                                            <option value="2" >Semi-Furnished</option>
                                            <option value="3" >Un-Furnished</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="propertyOnFloor"><span class="red ml-3">*</span> <span>Floor Number</span></label>
                                        <select name="propertyOnFloor" class="form-control show-tick">
                                            <option value="">-- Floor Number --</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                            <option value="9" >9</option>
                                            <option value="10" >10</option>
                                            <option value="11" >11</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="totalFloors"><span class="red ml-3">*</span> <span>Total Floors</span></label>
                                        <select name="totalFloors" class="form-control show-tick">
                                            <option value="">-- Total Floors --</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                            <option value="9" >9</option>
                                            <option value="10" >10</option>
                                            <option value="11" >11</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                            </div>

                            <h6 class="mt-1">Area Details </h6>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="carpetArea"><span class="red ml-3">*</span> <span>Carpet Area</span></label>
                                        <input type="text" name="carpetArea" class="form-control" placeholder="Carpet Area">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <label class="d-flex align-items-center" for="areaUnitc"><span class="red ml-3">*</span> <span>Area Unit</span></label>
                                        <select name="areaUnitc" class="form-control show-tick">
                                            {{-- <option value="">-- Area Unit --</option> --}}
                                            <option value="1" >Sq-ft</option>
                                            <option value="2" >Sq-mt</option>
                                            <option value="3" >Sq-yrd</option>
                                            <option value="4" >Acre</option>
                                            <option value="5" >Bhiga</option>
                                            <option value="5+" >Hectare</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="superArea"><span class="red ml-3">*</span> <span>Super Area</span></label>
                                        <input type="text" name="superArea" class="form-control" placeholder="Super Area">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <label class="d-flex align-items-center" for="areaUnits"><span class="red ml-3">*</span> <span>Area Unit</span></label>
                                        <select name="areaUnits" class="form-control show-tick">
                                            {{-- <option value="">-- Area Unit --</option> --}}
                                            <option value="1" >Sq-ft</option>
                                            <option value="2" >Sq-mt</option>
                                            <option value="3" >Sq-yrd</option>
                                            <option value="4" >Acre</option>
                                            <option value="5" >Bhiga</option>
                                            <option value="5+" >Hectare</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <h6 class="mt-2">Property Availability</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="radio inlineblock m-r-25">
                                        <input type="radio" name="availability" class="custom-control-input sssss" id="radio4" value="rtm" checked="">
                                        <label for="radio4">Ready to Move</label>
                                    </div>
                                    <div class="radio inlineblock m-r-25">
                                        <input type="radio" name="availability" class="custom-control-input sssss" id="radio5" value="UC">
                                        <label for="radio5">Under Construction</label>
                                    </div>

                                </div>

                            </div>

                            <div class="row clearfix mt-3" id="replace">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="ageOfConstruction"><span class="red ml-3">*</span> <span>AGE of Construction</span></label>
                                        <select name="ageOfConstruction" class="form-control show-tick">
                                            {{-- <option value="">-- AGE of Construction --</option> --}}
                                            <option value="New" >New Construction</option>
                                            <option value="<5" >Less than 5 Years</option>
                                            <option value="5-10" >5 to 10 Years</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" onclick="propertiesRender('price','create_render', true,['val1','val2','val3'])" type="submit" class="btn btn-primary btn-round">Next</a>
                                    <a href="javascript:void(0)" onclick="propertiesRender('location','create_render',false,['val2','val3','val4'])" type="submit" class="btn btn-default btn-round btn-simple">Previous</a>
                                </div>
                            </div>
                        </div>
                        <div id="price" class="create_render create_render_active">
                            <h6 class="mt-2">Price Details</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="expectedPrice"><span class="red ml-3">*</span> <span>Expected Price</span></label>
                                        <input type="number" name="expectedPrice" class="form-control" placeholder="Expected Price">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="tokenMoney"><span class="red ml-3">*</span> <span>Token Amount</span></label>
                                        <input type="number" name="tokenMoney" class="form-control" placeholder="Token Amount">
                                    </div>
                                </div>

                            </div>
                            <h2 class="card-inside-title">Property Description <span class="red">*</span></h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="1" name="description" class="form-control no-resize" placeholder="Please type some description to highlight your property"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" onclick="propertiesRender('image','create_render', true,['val1','val2','val3','val4'])" type="submit" class="btn btn-primary btn-round">Next</a>
                                    <a href="javascript:void(0)" onclick="propertiesRender('feature','create_render',false,['val3','val4'])" type="submit" class="btn btn-default btn-round btn-simple">Previous</a>
                                </div>
                            </div>
                        </div>
                        <div id="image" class="create_render create_render_active">
                            <div class="row clearfix">
                                <div class="col-sm-10">
                                    <h6 class="mt-4">Upload Images</h6>

                                    <div class="form-group mb-0">
                                        <div class="input-images-1" style="padding-top: .5rem;">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                    <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                                </div>
                                    <a href="javascript:void(0)" onclick="propertiesRender('price','create_render',false,['val4'])" type="submit" class="btn btn-primary btn-round no_back">Previous</a>
                                </div>

                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('scriptsc')
<script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script> <!-- Select2 Js -->
<script src="{{URL::asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>
<script src="{{URL::asset('assets/js/render.js')}}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="{{URL::asset('dist/image-uploader.min.js')}}"></script>


<script>
    $(document).ready( function()
			{

				var sitesc = {!! $localff !!};
				var availableTagsc = sitesc;
					$("#locality").autocomplete
					({

						source: function(request, response)
						{
							var results = $.ui.autocomplete.filter(availableTagsc, request.term);
							console.log(results);
							response(results.slice(0, 5));
						},
						change: function( event, ui ) {
						val = $(this).val();
						exists = $.inArray(val,availableTagsc);
						if (exists<0) {
						$(this).val("");
						return false;
						}
						}

					});

			});



			$(document).ready( function()
			{
					var sitesct = {!! $cityff !!};
					var availableTagsc = sitesct;
					$("#city").autocomplete
					({

						source: function(request, response)
						{
							var results = $.ui.autocomplete.filter(availableTagsc, request.term);
							console.log(results);
							response(results.slice(0, 5));
						},
						change: function( event, ui ) {
						val = $(this).val();
						exists = $.inArray(val,availableTagsc);
						if (exists<0) {
						$(this).val("");
						return false;
						}
						}

					});
				});



    let result = document.querySelector('#replace');
                        document.body.addEventListener('change', function (e) {
                            if (e.target.classList.contains('sssss')) {
                        let target = e.target;
                        let message;
                        console.log(target);
                        switch (target.id) {
                            case 'radio4':
                                message = '<div class="col-sm-6"> <div class="form-group"> <select name="ageOfConstruction" class="form-control show-tick"> <option value="">-- AGE of Construction --</option> <option value="New" >New Construction</option> <option value="<5" >Less than 5 Years</option> <option value="5-10" >5 to 10 Years</option> </select> </div> </div>';
                                break;
                            case 'radio5':
                                message = '<div class="col-sm-6"> <div class="form-line"> <select name="possessionMonth" class="form-control show-tick"> <option value="">-- Available from Month --</option> <option value="1" >January</option> <option value="2" >February</option> <option value="3" >March</option> </select> </div> </div> <div class="col-sm-6"> <div class="form-line"> <select name="possessionYear" class="form-control show-tick"> <option value="">-- Available from Year --</option> <option value="2021" >2021</option> <option value="2022" >2022</option> </select> </div></div> ';
                                break;

                        }
                        document.getElementById("replace").innerHTML = message;
                            }
                    });

                    $('.input-images-1').imageUploader({


                    });

</script>
@endsection

@endsection

