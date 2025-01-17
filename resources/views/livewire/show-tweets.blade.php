<div>
    Show Tweets

    <p>{{ $content }}</p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" wire:model.live="content"> 
        <button type="submit">Enviar</button>
        @error('content') 
            <span>{{ $message }}</span>
        @enderror
    </form>

    <hr>

    @foreach ($tweets as $tweet)

       <div class="flex">
            <div>
                @if ($tweet->user->profile_photo_path)
                    <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . $tweet->user->profile_photo_path) }}" alt="{{ $tweet->user->name }}">
                @else
                    <img class="w-8 h-8 rounded-full" src="{{ asset('images/no-image.png') }}" alt="">
                @endif
                    
                {{ $tweet->user->name }}
            </div>

            <div>
                {{ $tweet->content }} 
                @if ($tweet->likes->count())
                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
                @else
                    <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
                @endif
            </div>
       </div>
        
    @endforeach
            

    <div>
        {{ $tweets->links() }}
    </div>
</div>
