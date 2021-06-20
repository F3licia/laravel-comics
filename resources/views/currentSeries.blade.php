@extends('layout.default')

@section('page_title', 'pag_1')

@include('partialsHtml.header')

<div class="container">
   
    @foreach($comicsList as $comic)
        <div class="card">
            <div class="coverimg">
             <img src="{{$comic['thumb']}}" alt="">
            </div>
            <h4>{{ $comic['title']}}</h4>
        </div>
    @endforeach
    
</div>

@include('partialsHtml.footer')