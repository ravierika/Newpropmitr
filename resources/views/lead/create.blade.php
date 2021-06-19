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
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add your Needs<small>Our Team will help you Purchase / Rent as per your need soonest...</small> </h2>
                        
                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('leads.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->company}}" name="company">

                            <h6 class="mt-2">Property Need</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="radio inlineblock m-r-45">
                                        <input type="radio" class="form-control" name="for" id="radio1" value="purchase" checked="">
                                        <label for="radio1">Purchase</label>
                                    </div>
                                    <div class="radio inlineblock m-r-45">
                                        <input type="radio" class="form-control" name="for" id="radio2" value="rent">
                                        <label for="radio2">Rent / Lease</label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="type" class="form-control show-tick ms select2" data-placeholder="Select">
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
                                
                                
                            </div>
                            <h6 class="mt-2">Property Location</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="city" id="city" placeholder="Enter City">                                </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="locality" id="locality" placeholder="Enter Locality">
                                    </div>
                                </div>
                                
                            </div>
                            <h6 class="mt-2">Client and Agent Relationship</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <a class = "ml-3" href="javascript:void(0)" data-toggle="modal" ,  id = "new-customer">Add New Client</a> <a class = "ml-5" href="/customers">My Clients</a>
                                        <input class="form-control mt-2" name="customer_id" id="cust" placeholder="Enter Client Name">                                
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class = "mt-4 form-control" id="multiple-checkboxes" multiple data-live-search="true" name="agent[]" required>
                                            @foreach($users as $user)
                                            <option value="{{$user->name}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <h6 class="">Property Preference</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <select name="bedrooms" class="form-control show-tick">
                                            <option value="">-- Bedrooms Required--</option>
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
                                        <select name="floorPreference" class="form-control show-tick">
                                            <option value="">-- Floor Preference--</option>
                                            <option value="No Preference" >No Preference</option>
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
                                            <option value="12" >12</option>  
                                            <option value="13" >13</option>  
                                            <option value="14" >14</option>  
                                            <option value="15" >15</option>  
                                            <option value="16" >16</option>  
                                            <option value="17" >17</option>                                          
                                        </select>                                
                                    </div>
                                </div>    
                            </div>
                            
                            <h6 class="mt-3">Availability plus End User</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <select name="availability" class="form-control show-tick">
                                            <option value="">-- Availability Preference--</option>
                                            <option value="Ready to Move In" >Ready to Move In</option>
                                            <option value="Under Construction" >Under Construction</option>

                                        </select>                                
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <select name="deliveryExpected" class="form-control show-tick disabled">
                                            <option value="">-- Expected Delivery --</option>
                                            <option value="Within 1 Year" >Within 1 Year</option>
                                            <option value="1-2 Years" >1-2 Years</option>
                                                                                
                                        </select>                                
                                    </div>
                                </div>    
                            </div>

                            

                                                        
                            <h6 class="mt-2">Budget Details</h6>
                            <div class="row clearfix mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" name="expectedPrice" class="form-control" placeholder="Current Budget">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <select name="timeFrame" class="form-control show-tick">
                                            <option value="">-- Payment Time Frame --</option>
                                            <option value="1 Months" >1 Months</option>
                                            <option value="2 Months" >2 Months</option>                                      
                                        </select>                                
                                    </div>
                                </div>
                                
                            </div>
                            <h2 class="card-inside-title">Other Reqirements</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="1" name="description" class="form-control no-resize" placeholder="Please type some required details"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                            
                            
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                    <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                                </div>
                                
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="crud-modal" tabindex="-1" aria-hidden="true" >
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title" id="customerCrudModal"></h4>
    </div>
    <div class="modal-body">
    <form name="custForm" action="{{ route('customers.store') }}" method="POST">
    <input type="hidden" name="cust_id" id="cust_id" >
    @csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Name:</strong>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name" onchange="validate()" >
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Email:</strong>
    <input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Phone:</strong>
        <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone" onchange="validate()" onkeypress="validate()">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-line">
            <strong>Client's Nature:</strong>
            <select name="nature" class="form-control show-tick" onchange="validate()">
                <option value="">-- Client's Nature --</option>
                <option value="End User">End User</option>
                <option value="Investor">Investor</option>
            </select>      
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Company Name:</strong>
            <input type="text" name="clientcompany" class="form-control" placeholder="Company Name" onchange="validate()">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Company's GST:</strong>
            <input type="text" name="gst" class="form-control" placeholder="Company's GST" onchange="validate()">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Submit</button>
    <a href="{{ route('leads.create') }}" class="btn btn-danger">Cancel</a>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>

     
   <script>
    error=false
    
    function validate()
    {
      if(document.custForm.name.value !='' && document.custForm.email.value !='' || document.custForm.phone.value !='' )
          document.custForm.btnsave.disabled=false
      else
        document.custForm.btnsave.disabled=true
    }
    </script>

@section('scriptsc')
<script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script> <!-- Select2 Js -->
<script src="{{URL::asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script> 
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

                    var sitesc = {!! $custff !!};
  
  var availableTagsc = sitesc;
  
    
    $("#cust").autocomplete
    ({
        
        source: function(request, response) 
        {
            var results = $.ui.autocomplete.filter(availableTagsc, request.term);
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

    $(document).ready(function () {
        
        /* When click New customer button */
        $('#new-customer').click(function () {
        $('#btn-save').val("create-customer");
        $('#customer').trigger("reset");
        $('#customerCrudModal').html("Add New Customer");
        $('#crud-modal').modal('show');
        });
        
        });
        
        $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
            buttonClass:'custom-select',
            nonSelectedText: 'Assign User/users',
            buttonWidth: '500px',  
          includeSelectAllOption: true,
          enableFiltering: true,
          
          
          
        });
    });   

</script>           
@endsection

@endsection

