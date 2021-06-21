@extends('layout.default')
@section('page_title', 'pag_1')
@include('partialsHtml.header')



<div class="section singleComicCont">
    <div class="divider">
        <div class="coverCont">
            <img src="{{$comic['thumb']}}" alt="">       
        </div>
    </div>

    <div class="fullcardInfo ">
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
    <div class="box">
        <h4>advertisement</h4>
        <img src="{{asset('/images/4dv.jpg')}}" alt="">
    </div> 
</div>
<div class="specs">
    
        <div class="specsCol">
            <div class="specsSect">
            <h2>Talent</h2>
            </div>
        <div class="specsSect">
            <div class="specsTag">
                Art by:
            </div>
            <div class="specsVal">
                <h5>
                        @foreach($comic['artists'] as  $artist)
                            @if (count($comic['artists']) === 1)
                                <span class="enlightext">{{ $artist}}</span>
                            @else
                                <span class="enlightext">{{ $artist}}</span>,
                            @endif
                        @endforeach
                </h5>
            </div>
        </div>
        <div class="specsSect">
            <div class="specsTag">
            Written by:
            </div>
            <div class="specsVal">
                <h5>
                    @foreach($comic['writers'] as  $writer)
                    @if (count($comic['writers']) === 1)
                        <span class="enlightext">{{$writer}}</span>
                    @else
                        <span class="enlightext">{{$writer}}</span>,
                    @endif
                @endforeach
                </h5>
            </div>
        </div>
        </div>

        <div class="specsCol">
            <div class="specsSect">
            <h2>Specs</h2>
            </div>
            <div class="specsSect">
                <div class="specsTag">
                    Series:
                </div>
                <div class="specsVal">      
                    <h5> 
                    <span class="enlightext">{{ $comic['series']}}
                    </h5> 
                </div>
            </div>
            <div class="specsSect">
                <div class="specsTag">
                    Price:
                </div>
                <div class="specsVal">      
                    {{ $comic['price']}}  
                </div>
            </div>
            <div class="specsSect">
                <div class="specsTag">
                    On Sale Date:
                </div>
                <div class="specsVal">      
                    {{ $comic['sale_date']}}  
                </div>
            </div>
        </div>

        
</div>

@include('partialsHtml.externalLinksMini')
@include('partialsHtml.footer')