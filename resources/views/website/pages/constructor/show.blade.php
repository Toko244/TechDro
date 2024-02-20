<a href="{{$post->getfullslug()}}">{{$post->translate()->title}}</a>
<br>
<br>
<span><b>Section -> </b> <a href="{{$post->parent->getfullslug()}}"> {{$post->parent->title}}</a></span>
