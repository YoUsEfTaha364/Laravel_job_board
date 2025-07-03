<x-layout :title=$pagetitle>

       {{-- Post Body --}}
    <div class="max-w-3xl mx-auto py-6">
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
            <p class="text-gray-800 text-base leading-relaxed">{{ $posts->author }}</p>
            <br>
            <p class="text-gray-800 text-base leading-relaxed">{{ $posts->title }}</p>
            <br>
            <p class="text-gray-800 text-base leading-relaxed">{{ $posts->body }}</p>
        </div>
    </div>

    {{-- Comments Section --}}
    <div class="max-w-3xl mx-auto mt-8 space-y-4">
        <h2 class="text-xl font-semibold text-gray-800">Comments ({{ $posts->comments->count() }})</h2>

        @foreach ($posts->comments as $comment)
            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="font-medium text-gray-900">{{ $comment->author }}</span>
                    <span class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <p class="mt-2 text-gray-700 text-sm">{{ $comment->content }}</p>
            </div>
        @endforeach
    </div>


    <div class="max-w-3xl mx-auto mt-10">
        <form method="POST" action="/comment" class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
            @csrf
            <h2 class="text-lg font-semibold text-gray-800 mb-1">Create New Comment</h2>
            <p class="text-sm text-gray-500 mb-6">This form lets you publish a new comment</p>

            <input type="hidden" name="post_id" value="{{ $posts->id }}" />

            {{-- Author --}}
            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input value="{{old("author")}}" type="text" name="author" id="author"
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm px-3 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>

          @error("author")
          <span class="text-red-500">{{$message}}</span>
          @enderror
            {{-- Content --}}
            <div class="mb-6">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" id="content" rows="4"
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm px-3 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old("content")}}</textarea>
            </div>
             @error("content")
          <span class="text-red-500">{{$message}}</span>
          @enderror
            {{-- Buttons --}}
            <div class="flex justify-end gap-x-4">
                <a href="/blog" class="text-sm font-semibold text-gray-600 hover:underline">Cancel</a>
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold py-2 px-4 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </form>
    </div>

    {{-- Optional: Create comment via separate route --}}
    <div class="max-w-3xl mx-auto mt-6 text-right">
        <a href="/comment/create"
            class="inline-block bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold py-2 px-4 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Create comment
        </a>
    </div>


    {{-- {{ $posts->body }}
    <br>
    <br>

    
     @foreach ($posts->comments as $comment)
        {{ $comment->author }}
        <br>


        {{ $comment->content }}
        <br>
    @endforeach


    <form method="post" action="/comment">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">create new comment</h2>
                <p class="mt-1 text-sm/6 text-gray-600">this form to publish new comment</p>


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">

                        <label for="author" class="block text-sm/6 font-medium text-gray-900">Author </label>
                        <div class="mt-2">
                            <input type="text" name="author" id="author" autocomplete="given-name"
                                class=" block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm " />
                        </div>

                        <input type="hidden" name="post_id" value="{{$posts->id}}" />

                        <div class="col-span-full">


                            <label for="content" class="block text-sm/6 font-medium text-gray-900">Content</label>
                            <div class="mt-2">
                                <textarea name="content" id="content" rows="3"
                                    class=" 'outline-gray-300' block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>

                        </div>


                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="/blog" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>

    </form>




    <a href="/comment/create/"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create
        comment</a>
 --}}

</x-layout>
