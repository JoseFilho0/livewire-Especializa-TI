<div>
    Show Tweets

    <p>{{ $message }}</p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" wire:model.live="message"> 
        <button type="submit">Enviar</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
</div>
