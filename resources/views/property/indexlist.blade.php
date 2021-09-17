@extends('layouts.propertyFilter')

@section('content')
<section class="content">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12">
          <h2>
            Property view
            <small>Welcome to Oreo</small>
          </h2>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
          <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
            <div
              class="sparkline"
              data-type="bar"
              data-width="97%"
              data-height="25px"
              data-bar-Width="2"
              data-bar-Spacing="5"
              data-bar-Color="#fff"
            >
              3,2,6,5,9,8,7,9,5,1,3,5,7,4,6
            </div>
            <small class="col-white">Visitors</small>
          </div>
          <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
            <div
              class="sparkline"
              data-type="bar"
              data-width="97%"
              data-height="25px"
              data-bar-Width="2"
              data-bar-Spacing="5"
              data-bar-Color="#fff"
            >
              1,3,5,7,4,6,3,2,6,5,9,8,7,9,5
            </div>
            <small class="col-white">Bounce Rate</small>
          </div>
          <button
            class="
              btn btn-white btn-icon btn-round
              hidden-sm-down
              float-right
              ml-3
            "
            type="button"
          >
            <i class="zmdi zmdi-plus"></i>
          </button>
          <ul class="breadcrumb float-md-right">
            <li class="breadcrumb-item">
              <a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a>
            </li>
            <li class="breadcrumb-item active">Property</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-4">
        hello world
        @foreach($properties as $property)
      <div class="row clearfix">
        <div class="col-lg-10 col-md-10">
          <div class="card">
            <div
              class="
                card-content
                row-basis
                d-flex
                justify-content-between
                align-items-center
                p-2
              "
            >
            <?php  $property_images = json_decode($property->images);?>
                @if(empty($property_images))
                    <div class="card-img-wrap w-md-25">
                        <img
                        src="{{URL::asset('property_images/1623993899.WhatsApp Image 2021-02-21 at 3.19.01 PM.jpeg') }}"
                        class="card-img"
                        alt=""
                        />
                    </div>
                @else
                <div class="card-img-wrap w-md-25">
                    <img
                    src="{{URL::asset('property_images/'. $property_images[0]) }}"
                    class="card-img"
                    alt=""
                    />
                </div>
                @endif
              <div class="card-body w-md-75">
                <div class="card-text-top">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-1 fw-bold">
                      ₹ {{$property->expectedPrice}} {{$property->prange}}
                    </p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-3 fw-bold">
                      {{$property->bedrooms}} BHK {{$property->type}} for {{$property->for}} in {{$property->locality}},  {{$property->city}}
                    </p>

                    <a href="{{route('properties.show', $property->id)}}" class="stretched-link"></a>

                  </div>
                </div>

                <div class="price-section">
                  <div class="small_detail my-2">
                    <div class="row">
                      <div class="col-sm-3 col-6 mb-2">
                        <small class="text-uppercase d-block fw-bold">SUPER AREA</small>
                        <small>{{$property->superArea}} sqft</small>
                      </div>
                      <div class="col-sm-3 col-6 mb-2">
                        <small class="text-uppercase d-block">STATUS</small>
                        <small>{{$property->availability}}</small>
                      </div>
                      <div class="col-sm-3 col-6 mb-2">
                        <small class="text-uppercase d-block">FLOOR</small>
                        <small>{{$property->propertyOnFloor}} out of {{$property->totalFloors}} floors</small>
                      </div>
                      <div class="col-sm-3 col-6 mb-2">
                        <small class="text-uppercase d-block">TRANSACTION</small>
                        <small>Resale</small>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="my-3">
                  @if(strlen($property->description) > 130)
                    {{substr($property->description,0,130)}}
                    <span id="dots6">...</span><span id="more6">{{substr($property->description,130,strlen($property->description))}}</span>
                    <button class="read_more_btn" onclick="myFunction(6) " id="myBtn6">Read more</button></p>
                  @else
                    {{$property->description}}
                  @endif

              </div>
            </div>

            <div class="card-footer py-2 d-md-flex align-items-center justify-content-between">
              <div>
                <p class="pb-0 mb-1 mr-2 fw-bold">{{Auth::user()->company}} <span class="">- Your Company Tagline</span></p>
              </div>
              <div>
                <a href="tel:+91{{Auth::user()->mobile}}" class="btn btn-success"><i class="fas fa-phone"></i></a>
                <a href="mailto:{{Auth::user()->email}}" class="btn btn-success"><i class="fas fa-envelope"></i></a>
                <a href="https://wa.me/+91{{Auth::user()->mobile}}" class="btn btn-success"><i class= "fa fa-whatsapp"></i></i></a>
              </div>

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
<script
      src="https://kit.fontawesome.com/4b5d72e539.js"
      crossorigin="anonymous"
    ></script>


@endsection

@endsection
