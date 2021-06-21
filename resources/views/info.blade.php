@extends('layout.default')

@section('page_title', 'pag_1')

@include('partialsHtml.header')

<div class="section singleComicCont">
  
<div class="coverCont">
        <img src="{{$comic['thumb']}}" alt="">       
    </div>

    <div class="fullcardInfo">
        <h4>{{ $comic['title']}}</h4>
    </div>
       
</div>



@include('partialsHtml.footer')