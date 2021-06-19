@extends('layouts.dashboardprime')

@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property Detail
                <small>Welcome to Oreo</small>
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
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Property</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <div id="slider2" class="carousel slide mb-5" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php  $property_images = json_decode($property->images);?>
                                @foreach($property_images as $sliderimage)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{URL::asset('property_images/'. $sliderimage)}}" class="img-fluid" alt="slider-listing" style="width: 665px; height: 300px;">                                </div>
                                @endforeach                     
                            </div>
                  
                            <!-- CONTROLS -->
                            <a href="#slider2" class="carousel-control-prev" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </a>
                  
                            <a href="#slider2" class="carousel-control-next" data-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </a>
                          </div>
                        <h6 class="text-success mt-3">$390,000 - $430,000</h6>
                        <h5 class="mt-0"><a href="#" class="col-blue-grey">4BHK Alexander Court,New York</a></h5>
                        <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                        <small class="text-muted"><i class="zmdi zmdi-pin mr-2"></i>245 E 20th St, New York, NY 201609</small>
                        <div class="d-flex flex-wrap justify-content-start mt-3 p-3 bg-light">
                            <a href="#" class="w100" title="Square Feet"><i class="zmdi zmdi-view-dashboard mr-2"></i><span>280</span></a>
                            <a href="#" class="w100" title="Bedroom"><i class="zmdi zmdi-hotel mr-2"></i><span>4</span></a>
                            <a href="#" class="w100" title="Parking space"><i class="zmdi zmdi-car-taxi mr-2"></i><span>2</span></a>
                            <a href="#" class="w100" title="Garages"><i class="zmdi zmdi-home mr-2"></i><span> 24H</span></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Amenities<small >Description Text Here...</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul> 
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Swimming pool</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Air conditioning</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Internet</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Radio</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Balcony</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Roof terrace</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Cable TV</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Electricity</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Terrace</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Cofee pot</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Oven</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Towelwes</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Computer</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Grill</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Parquet</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Dishwasher</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Near Green Zone</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Near Church</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Near Hospital</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Near School</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Near Shop</li>
                                    <li class="list-group-item"><i class="zmdi zmdi-check-circle mr-2"></i>Natural Gas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Location</strong> <small>Description text here...</small> </h2>
                    </div>
                    <div class="body">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=svdezAlqZP2WIeKGiLW4EUnoJvnxVP7i&amp;width=100%&amp;height=400&amp;lang=tr_TR&amp;sourceType=constructor&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="body text-center">
                        <a href="#"><img src="../assets/images/sm/avatar1.jpg" class="rounded-circle" alt="profile-image"></a>
                        <h4 class="m-t-10">Eliana Smith</h4>                        
                        <div class="col-12">
                            <ul class="d-flex justify-content-center list-unstyled">
                                <li class="w30"><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li class="w30"><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li class="w30"><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        </div>                        
                        <div class="row">
                            <div class="col-4">
                                <h5>18</h5>
                                <small>Files</small>
                            </div>
                            <div class="col-4">
                                <h5>2GB</h5>
                                <small>Used</small>
                            </div>
                            <div class="col-4">
                                <h5>65,6$</h5>
                                <small>Spent</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Request</strong> Inquiry</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mobile No.">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                        <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Location</strong></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">                        
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Price:</th>
                                        <td>$390,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Contract type: </th>
                                        <td><span class="badge badge-primary">For Sale</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bathrooms:</th>
                                        <td>1.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Square ft:</th>
                                        <td>468</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Garage Spaces:</th>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Land Size:</th>
                                        <td>721 m²</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Floors:</th>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Listed for:</th>
                                        <td>15 days</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Available:</th>
                                        <td>Immediately</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pets:</th>
                                        <td>Pets Allowed</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bedrooms:</th>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection