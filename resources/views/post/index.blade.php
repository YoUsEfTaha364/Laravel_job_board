<x-layout :title=$pagetitle>
      @if(session("success"))
      <div class="bg-green-50 px-3 py-2">
        {{session("success")}}
      </div>
      @endif
        
      @if(session("update"))
      <div class="bg-green-50 px-3 py-2">
        {{session("update")}}
      </div>
      @endif

      @if(session("delete"))
      <div class="bg-green-50 px-3 py-2">
        {{session("delete")}}
      </div>
      @endif
        
   
     <div class="mt-6 flex items-center justify-end gap-x-6">

    <a href="/blog/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Post</a>
  </div>
    @foreach($posts as $post)

    <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-2">
      <div>
     <h1 class="text-2xl"> <a href="/blog/{{$post->id}}"> {{$post->title}} </a></h1> 
      
      <p lass="text-1xl">  {{$post->author}}</p> 
      </div>
  
      <div>
       <a class="text-yellow-500 hover:text-gray-500 " href="/blog/{{$post->id}}/edit">Edit</a>
       <form method="POST" action="/blog/{{$post->id}}" onsubmit="return confirm('are you sure you need to delete?')" >
        @csrf
        @method("delete")
           <button type="submit" class="text-red-500 hover:text-gray-500 ">Delete</button>
       </form>
      </div>
    </div>
    @endforeach

    {{$posts->links()}}
    
    

</x-layout>  