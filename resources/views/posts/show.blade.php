<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold">{{$post->name}}</h1>

        

        <div class="container">

            <div>
                <img src="https://2img.net/h/i265.photobucket.com/albums/ii222/Darkmast508/DSI.png" alt="">
            </div>
            <div class="text-lg text-gray-600 mb-2">
                {{$post->user->name}}
            </div>
            <div>
                <p class="text-lg text-gray-600 mb-2">{{$post->descripcion}}</p> 
                <p class="text-lg text-gray-600 mb-2">{{$post->contacto}}</p>
                
                
                
            </div>
        </div>

    </div>
</x-app-layout>