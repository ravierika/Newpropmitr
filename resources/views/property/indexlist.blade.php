@extends('layouts.dashboardprime')

@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Properties Listing
                <small>Welcome to {{$comp}}</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                
                <a href="/properties/create" class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" role="button">
                    <i class="zmdi zmdi-plus mt-2"></i>
                </a>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{$comp}}</a></li>
                    <li class="breadcrumb-item active">Properties</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @foreach($properties as $property)  
        <div class="card mb-3" style="max-width: 900px;">
            <div class="row no-gutters ml-3">
                        
                <div class="col-md-4 mt-3 mb-3">
                    <?php  $property_images = json_decode($property->images);?>
                    @if(empty($property_images))
                    <img class="img-thumbnail img-fluid" src="{{URL::asset('property_images/Property Image.jpg') }}" alt="img" style="width:290px;height:190px;">
                    <a href="#" class="stretched-link"></a> 
                    @else
                    <img class="img-thumbnail img-fluid" src="{{URL::asset('property_images/'. $property_images[0]) }}" alt="img" style="width:290px;height:190px;">
                    <a href="{{route('properties.show', $property->id)}}" class="stretched-link"></a> 
                    @endif
                </div>
             
              <div class="col-md-8">
                <div class="card-body">
                  <div class="price_details">  
                    <span class="price">
                    <span class="card-title">₹ {{$property->expectedPrice}} {{$property->prange}}</span>
                    </span>  
                    <span class="price">
                        <span class="card-title">₹ {{$property->expectedPrice}} {{$property->prange}}</span>
                        </span>    
                </div>
                  <p class="card-bhk mt-2"><small class="">{{$property->bedrooms}} BHK {{$property->type}} in {{$property->locality}},  {{$property->city}}</small></p>
                  <p class="card-text">{{$property->description}}</p>
                    <div class="d-flex justify-content-between mt-3 p-3 bg-light">
                        <a href="#" title="{{$property->areaUnitc}}"><i class="zmdi zmdi-view-dashboard mr-2"></i><span>{{$property->carpetArea}}</span></a>
                        <a href="#" title="Bedroom"><i class="zmdi zmdi-hotel mr-2"></i><span>{{$property->bedrooms}}</span></a>
                        <a href="#" title="Parking space"><i class="zmdi zmdi-car-taxi mr-2"></i><span>2</span></a>
                    </div>
                    <a href="{{route('properties.show', $property->id)}}" class="stretched-link"></a>

                </div>
              </div>
            </div>
        </div>
        @endforeach

        {{ $properties->links() }}
    </div>
</section>

@section('scripts')
<script src="{{URL::asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>


@endsection

@endsection