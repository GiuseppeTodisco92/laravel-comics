@extends('layouts.base')

@section('page-title')
   
@endsection

@section('page-content')
    @dump($comics)
    <ul>
        @foreach ($comics as $comic)
        <li>
            <x-card-comics :image="$comic['thumb']" :title="$comic['title']" />
        </li>
        @endforeach
    </ul>
   

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

