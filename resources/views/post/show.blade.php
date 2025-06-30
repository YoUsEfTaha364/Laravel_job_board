<x-layout :title=$pagetitle>

   @foreach($posts->comments as $comment)
   {{$comment->content}}
  @endforeach
   
    <h1>show page</h1>

</x-layout>  