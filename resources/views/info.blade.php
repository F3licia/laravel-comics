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
<div class="specs">
 
    <div class="specsCol">
       <h2>Talent</h2>
       <div class="specsSect">
           <div class="specsTag">
              Art by:
           </div>
           <div>
                @foreach($comic['artists'] as  $artist)
                <h4>{{ $artist}}</h4>
                @endforeach
           </div>
       </div>
       <div class="specsSect">
        <div class="specsTag">
           Written by:
        </div>
        <div>
             @foreach($comic['writers'] as  $writer)
             <h4>{{ $writer}}</h4>
             @endforeach
        </div>
    </div>
    </div>

    <div class="specsCol">
        <h2>Specs</h2>
        <div class="specsSect">
            <div class="specsTag">
                Series:
            </div>
            <div>      
                {{ $comic['series']}}  
            </div>
        </div>
        <div class="specsSect">
            <div class="specsTag">
                Price:
            </div>
            <div>      
                {{ $comic['price']}}  
            </div>
        </div>
        <div class="specsSect">
            <div class="specsTag">
                On Sale Date:
            </div>
            <div>      
                {{ $comic['sale_date']}}  
            </div>
        </div>
    </div>
</div>






@include('partialsHtml.footer')