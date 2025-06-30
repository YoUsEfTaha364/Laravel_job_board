<x-layout :title=$pagetitle>

   
   
    @foreach($comments as $comment)
      {{$comment->content}}
      <br>
      {{$comment->author}}
      <br>
    <a href="blog/{{$comment->post->id}}">{{$comment->post->title}}</a>  
    @endforeach
    
    <h1>comment page</h1>

</x-layout>  