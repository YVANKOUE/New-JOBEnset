@extends('layouts.front')

@section('content')

<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <img class="d-block w-100 h-100" src="img/couverture.jpg" alt="banner">
                <img class="d-block w-100 h-100" src="img/couverture1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container">
                    <div>
                      <form>
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>title</th>
                                <th>description</th>
                                <th>domaine</th>
                                <th>sousDomaine</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($annonces as $annonce)
                            <tr>
                                <td>{{$annonce->id}}</td>
                                <td>{{$annonce->title}}</td>
                                <td>{{$annonce->description}}</td>
                                <td>{{$annonce->domaine}}</td>
                                <td>{{$annonce->sousDomaine}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </table>
                      </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
@endsection
