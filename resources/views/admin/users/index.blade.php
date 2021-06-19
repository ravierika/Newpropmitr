@extends('layouts.dashboardprime')

@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Agent
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
                    <li class="breadcrumb-item"><a href="/dashbo"><i class="zmdi zmdi-home"></i> {{$comp}}</a></li>
                    <li class="breadcrumb-item active">Agent</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>{{$comp}}</strong> Agents </h2>
                        
                        <ul class="header-dropdown">
                            <li class="add"> 
                                <a href="/admin/users/create" class="btn btn-primary btn-sm"><i class="zmdi zmdi-plus mr-2"></i>Add User</a>
                            </li>
                            <li class="remove">
                                <a href="" class="btn btn-primary btn-sm"><i class="zmdi zmdi-delete mr-2"></i>Delete</a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>City</th>
                                    <th>Role</th>                                        
                                    <th>Deal</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)  
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><a href="{{route('users.edit', $user->id)}}"> {{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{$user->deal}}</td>
                                    <td>{{$user->value}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                               
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table --> 
    </div>
    </div>
</section>
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