@extends('layout.default')

@section('page_title', 'pag_1')

@include('partialsHtml.header')

<div class="section container">
    <div class="titleCont">
        <h3>Current Series</h3>
        
    </div>
   
    @foreach($comicsList as $key => $comic)
        <div class="card">
            <a href="{{route( 'info', ['id' => $key] )}}" class="coverimg">
             <img src="{{$comic['thumb']}}"  alt="">
             <!--route accetta un secondo argomento, si passa un array asssociativo che possa combaciare col parametro inserito-->
            </a>
            <h4>{{ $comic['title']}}</h4>
        </div>
    @endforeach

    <div class="centerbuttonDiv">
        <button class="button1">load more</button>
    </div>
    
</div>

@include('partialsHtml.externalLinks')

@include('partialsHtml.footer')