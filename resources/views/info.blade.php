@extends('layout.default')
@section('page_title', 'pag_1')
@include('partialsHtml.header')



<div class="section singleComicCont">
  
    <div class="divider">
        <div class="coverCont">
            <img src="{{$comic['thumb']}}" alt="">       
        </div>
    </div>

    <div class="fullcardInfo">
        <h1>{{ $comic['title']}}</h1>
        <div class="buyButtons">
            <button class="button3">
               <span> U.S. Price: $19.99</span>
               <span> AVAILABLE</span>
            </button>
            <button class="button3-2">Check availability</button>
        </div>
        
        <p>{{ $comic['description']}}</p>
    </div>
       
</div>



@include('partialsHtml.footer')