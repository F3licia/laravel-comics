@foreach($comicsList as $comic)
<img src="{{$comic['thumb']}}" alt="">
<h4>{{ $comic['title']}}</h4>
@endforeach