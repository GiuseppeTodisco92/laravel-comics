@extends('layouts.base')

@section('page-title')
   
@endsection

@section('page-content')
    <div class="comic-box">
        <div class="container">
            <ul class="img-list">
                @foreach ($comics as $index => $comic)
         
                <li>
                   <a href="{{route('comicPage',['id' => $index])}}"> 
                    <x-card-comics :image="$comic['thumb']" :title="$comic['title']" />
                </a>
                </li>
                @endforeach
            </ul>

        </div>

    </div>
   

    <div class="footer-top">
        <ul >
          <li><a href="#"><img src="{{asset("img/buy-comics-digital-comics.png")}}" alt=""> digital comics</a></li>
          <li><a href="#"><img src="{{asset("img/buy-comics-merchandise.png")}}" alt=""> dc merchandise</a></li>
          <li><a href="#"><img src="{{asset("img/buy-comics-subscriptions.png")}}" alt=""> subscription</a></li>
          <li><a href="#"><img src="{{asset("img/buy-comics-shop-locator.png")}}" alt=""> comic shop locator</a></li>
          <li><a href="#"><img src="{{asset("img/buy-dc-power-visa.svg")}}" alt=""> dc power visa</a></li>
        </ul>
    </div>
@endsection

