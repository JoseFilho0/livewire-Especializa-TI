<div class="container-lg px-4">
    <h1 class="text-xl font-semibold py-4">Tweets</h1>

    <form method="post" wire:submit.prevent="create" class="flex flex-col items-start gap-2 bg-white p-5 rounded-xl mb-5">
        <p>{{ $content }}</p>
        
        <input type="text" wire:model.live="content" class="border border-gray-400 bg-gray-100 rounded-lg w-full h-10 lg:h-14"> 
        <button type="submit" class="bg-blue-600 text-white px-5 py-1 rounded-lg lg:px-10 lg:py-2">Enviar</button>
        @error('content') 
            <span>{{ $message }}</span>
        @enderror
    </form>

    <div class="flex flex-col gap-4">
    @foreach ($tweets as $tweet)

       <div class="flex gap-2 bg-white px-4 py-2 rounded-lg">
            <div>
                @if ($tweet->user->profile_photo_path)
                    <img class="max-w-8 max-h-8 min-w-8 min-h-8 rounded-full lg:max-w-10 lg:min-w-10 lg:max-h-12 lg:min-h-10" src="{{ asset('storage/' . $tweet->user->profile_photo_path) }}" alt="{{ $tweet->user->name }}">
                @else
                    <img class="max-w-8 max-h-8 min-w-8 min-h-8 rounded-full lg:max-w-10 lg:min-w-10 lg:max-h-10 lg:min-h-10" src="{{ asset('images/no-image.png') }}" alt="">
                @endif
            </div>

            <div class="flex flex-col">
                <div class="leading-[18px]">{{ $tweet->content }}</div> 
                
                @if ($tweet->likes->count())
                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})" class="text-xs text-red-500">(Descurtir)</a>
                @else
                    <a href="#" wire:click.prevent="like({{ $tweet->id }})" class="text-xs text-blue-600">(Curtir)</a>
                @endif
            </div>
       </div>
        
    @endforeach
    </div>
            

    <div class="mt-4">
        {{ $tweets->links() }}
    </div>
</div>
