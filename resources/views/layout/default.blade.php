@yield('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="//db.onlinewebfonts.com/c/60d534f9b4ded0f0b50514c27ee3e83a?family=250072c23613fe0b+-+subset+of+Greta+Sans+Pro+Bld" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> <!--asset = public-->
</head>
<body>
    @include('partialsHtml.header')
    <!--1)partials -> 2)layout -> 3)home -->
    @include('partialsHtml.footer')
    
</body>
</html>

