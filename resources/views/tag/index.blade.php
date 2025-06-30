<x-layout :title=$pagetitle>

   

    @foreach($tags as $tag)
      {{$tag->title}}
     <br>
    @endforeach
    
    <h1>tag page</h1>

</x-layout>  