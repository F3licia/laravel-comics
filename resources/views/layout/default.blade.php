@yield('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> <!--asset = public-->
</head>
<body>
    <div class="topperbar">
         <div class="mini-menu"><p>testo qui</p></div>
    </div>
    <div class="header">
    <img src="{{asset('/images/dc-logo.png')}}" alt="">


            <ul>           
                <li>
                    <a href="{{ route('characters') }}">
                        characters
                    </a>
                    <a href="{{ route('comics') }}">
                        comics
                    </a>
                    <a href="{{ route('movies') }}">
                        movies
                    </a>
                    <a href="{{ route('tv') }}">
                       tv
                    </a>
                    <a href="{{ route('games') }}">
                       games
                    </a>
                    <a href="{{ route('collectibles') }}">
                        collectibles
                    </a>
                    <a href="{{ route('video') }}">
                        video
                     </a>
                     <a href="{{ route('fans') }}">
                        fans
                     </a>
                     <a href="{{ route('news') }}">
                         news
                     </a>
                     <a href="{{ route('shop') }}">
                        shop
                    </a>
                </li>
            </ul>
    </div>
    <div class="hero"></div>
    

    
</body>
</html>

