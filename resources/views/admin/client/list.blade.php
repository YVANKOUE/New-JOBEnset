@extends('admin.adminlayout')

@section('title')
    {{ config('app.name') }} | @lang('Users')
@endsection


{{-- @section('navigation')
    <!--begin::Page Heading-->
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><a href="{{route('users.index')}}">@lang('Users Management')</a></h5>
        <!--end::Page Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('users.index') }}" class="text-muted">@lang('Users')</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page Heading-->
@endsection --}}


@section('Content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">@lang('Jobs list')

                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-User">
                                <thead>
                                    <tr>
                                        <th width="10">

                                        </th>
                                        <th>@lang('client mail')</th>
                                        <th>@lang('Domain')</th>
                                        <th>@lang('Sous domain')</th>
                                        <th>Date publication</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($annonces as $annonce)
                                    @php
                                        $recuperation = DB::table('clients')->where('id' , $annonce->client_id)->pluck('email');
                                    @endphp
                                        <tr data-entry-id="{{$annonce->id }}">
                                            <td>{{ $annonce->id }}</td>
                                            <td>{{$recuperation[0]}}</td>
                                            <td>{{ $annonce->domaine}}</td>
                                            <td>{{ $annonce->sous_domaine }}</td>
                                            <td>{{ $annonce->created_at }}</td>
                                            <td>
                                                <button class="btn btn" style="background-color: #187DE4;" ><a style="color:white;" href="">Postuler</a> </button>  
                                                <button class="btn btn" style="background-color: #187DE4;" ><a style="color:white;" href="">Voir plus</a> </button>   
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

