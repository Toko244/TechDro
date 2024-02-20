@foreach ($section->posts as $post)
<a href="{{$post->getfullslug()}}">{{$post->translate()->title}}</a>
    <br>
@endforeach

<span><b>Section -> </b> <a href="{{$section->getfullslug()}}"> {{$section->title}}</a></span>
