<div class="topperbar">
    <div class="mini-nav">
        <p>dc power visa</p>
     <div>
        <select name="" id="" form="">
            <option value="0">additional dc site</option>
            <option value="1">additional dc site</option>
          </select>
     </div>  
    </div>
</div>

{{--da provare poi
    @php
    function setLinkClass($pagename){
        $routename= Request::route()->getName();
        return $routename == $pagename ? "active" : "";
    }
@endphp--}}


<div class="section  header">
        <a href="{{ route('serie in corso') }}">
          <img src="{{asset('/images/dc-logo.png')}}" alt="">
        </a>
       <ul class="listnav">           
           <li>
               <a href="{{ route('characters') }}" class="{{Request::route()->getName() == 'characters'? 'active' : ''}}">
                   characters
               </a>
            </li>
            <li>
               <a href="{{ route('comics') }}">
                   comics
               </a>
            </li>
            <li>
               <a href="{{ route('movies') }}">
                   movies
               </a>
            </li>
            <li>
               <a href="{{ route('tv') }}">
                  tv
               </a>
            </li>
            <li>
               <a href="{{ route('games') }}">
                  games
               </a>
            </li>
            <li>
               <a href="{{ route('collectibles') }}">
                   collectibles
               </a>
            </li>
            <li>
               <a href="{{ route('video') }}">
                   video
                </a>
            </li>
            <li>
                <a href="{{ route('fans') }}">
                   fans
                </a>
            </li>
            <li>
                <a href="{{ route('news') }}">
                    news
                </a>
            </li>
            <li>
                <a href="{{ route('shop') }}">
                   shop
               </a>
           </li>
       </ul>

       <div class="searchbar">
           <input type="text" placeholder="Search &#x1F50E;&#xFE0E;">
       </div>
</div>
<div class="hero"></div>