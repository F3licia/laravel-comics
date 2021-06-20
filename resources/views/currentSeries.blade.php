@extends('layout.default')

@section('page_title', 'pag_1')

@include('partialsHtml.header')

@foreach($comicsList as $comic)
    <img src="{{$comic['thumb']}}" alt="">
    <h4>{{ $comic['title']}}</h4>
@endforeach

@include('partialsHtml.footer')