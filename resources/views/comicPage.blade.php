@extends('layouts.base')
@section('page-title')
    
@endsection

@section('page-content')
    <div class="comic-book-background"></div>
    <div class="container">
        <div class="img-comic">

            <img src="{{$comicBook["thumb"]}}" alt="">
        </div>
        
        <div class="box-data">
            <div class="data">
                <h1>{{$comicBook["title"]}}</h1>
                <div class="price-box">
                    <div>U.S. Price: <span class="white-color">{{$comicBook["price"]}}</span></div>
                    <div><span class="available">available</span><span class="check white-color">Check Availability</span></div>
                </div>
                <p>{{$comicBook["description"]}}</p>
            </div>
            <div class="box-advertisement">
                <h4>advertisement</h4>
                <img src="{{asset("img/adv.jpg")}}" alt="">
            </div>
        </div>
    </div>

    <div class="footer-comicPage">
        <div class="container d-flex">
            <div class="column-title">
                <h3>Talent</h3>
                <div class="list-by">
                    <h6>Art by:</h6>
                    <p>
                        @foreach ($comicBook['artists'] as $artist)
                            {{$artist}},
                        @endforeach
                    </p>
                </div>
                <div class="list-by">
                    <h6>Written by:</h6>
                    <p>
                        @foreach ($comicBook['writers'] as $writer)
                            {{$writer}},
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="column-title">
                <h3>Specs</h3>
                <div class="list-by">
                    <h6>Series:</h6>
                    <h5 class="series">
                       {{$comicBook['series']}}
                    </h5>
                </div>
                <div class="list-by">
                    <h6>U.S. Price:</h6>
                    <h5>
                       {{$comicBook['price']}}
                    </h5>
                </div>
                <div class="list-by">
                    <h6>On sale date:</h6>
                    <h5>
                       {{$comicBook['sale_date']}}
                    </h5>
                </div>
            </div>
        </div>
    </div>

    {{-- @dump($comicBook); --}}
@endsection