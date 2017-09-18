
@foreach ($sindex as $in)
<hr>
  {{$in->titlehead}}<br>
  {{$in->deschead}}<br>
  {{$in->link}}<br>

  <img src="storage/header/{{$in->imgback}}" width="300px" height="200px" alt="">
  <img src="storage/header/{{$in->imgvid}}" width="300px" height="200px" alt="">
  <a href="/myjejaring/{{$in->id}}/edit">Edit</a>
  <hr>
@endforeach
