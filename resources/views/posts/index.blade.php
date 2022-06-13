<x-app-layout>

<div class="container py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-grid-cols-3 gap-6">


        @foreach ($posts as $post)

        <article {{--  class="w-full h-80 bg-cover bg center" style="background-image: url({{Storage::url($post->image->url)}})"  --}} class="w-full h-80 bg-cover bg center" style="background-image: url(https://2img.net/h/i265.photobucket.com/albums/ii222/Darkmast508/DSI.png)">
         <div class="w-full h-full px-8 flex flex-col justify-center">

            <div> 
                @foreach ($post->tags as $tag)
                    <a href="" class="inline-block px-3 h-6 bg-gray-600 text-white rounded-full">{{$tag->name}}</a>
                @endforeach    
            </div>

            <h1 class="text-4xl leading-8 font-bold">
                <a href="{{route('posts.show', $post)}}">
                    {{$post->name}}
                </a>
            </h1>

         </div>
        </article>
            
        @endforeach

   
   
    </div>
    
    <div class="mt-4">

        {{$posts->links()}}

    </div>
</div>

</x-app-layout>