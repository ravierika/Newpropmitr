@extends('layouts.dashboardprime')

@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property List
                <small>{{$comp}}</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                
                <a href="properties/create" class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" role="button">
                    <i class="zmdi zmdi-minus mt-2"></i>
                </a>
                <a href="properties/create" class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" role="button">
                    <i class="zmdi zmdi-plus mt-2"></i>
                </a>
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
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Property ID</th>
                                        <th>Property</th>
                                        <th>City</th>
                                        <th>Location</th>
                                        <th>Beds</th>
                                        <th>sq. ft</th>
                                        <th>Agent</th>
                                        <th>Sale/Rent</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($properties as $property)  
                                        <tr>
                                            <td>{{$property->id}}</td>
                                            <td><a href="{{route('properties.edit', $property->id)}}"> {{$property->description}}</a></td>
                                            <td>{{$property->city}}</td>
                                            <td>{{$property->locality}}</td>
                                            <td>{{$property->bedrooms}} BHK</td>
                                            <td>{{$property->carpetArea}} ft2</td>
                                            <td>{{$property->agent}}</td>
                                            <td><span class="badge badge-primary mb-0">{{$property->for}}</span></td>
                                            <td>₹ {{$property->expectedPrice}}</td>
                                        </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 


@section('scripts')
<script src="{{URL::asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>


@endsection

@endsection

