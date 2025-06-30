<x-layout :title=$pagetitle>

   

    @foreach($posts as $post)

    <br>
     <span>post author:  {{$post->author}}</span> 
      <br>
      <span>post title:  {{$post->title}}</span> 
       <br>
    <span>post body:  {{$post->body}}</span> 
     <br>
      <br>
      
    @endforeach

    {{$posts->links()}}
    
    <h1>blog page</h1>

</x-layout>  