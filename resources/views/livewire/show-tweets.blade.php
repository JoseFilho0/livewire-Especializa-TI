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
        {{ $tweet->user->name }} - {{ $tweet->content }} 
        @if ($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
        @else
            <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
        @endif
        <br>
    @endforeach
            

    <div>
        {{ $tweets->links() }}
    </div>
</div>
