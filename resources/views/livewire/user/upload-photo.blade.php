<div class="container-lg px-4">
    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <h3 class="text-xl font-semibold py-4">Atualizar imagem do perfil</h3>
        
        @if($photo)
            <img class="w-3/4 h-44 lg:w-[300px] lg:h-52" src="{{ $photo->temporaryUrl() }}" alt="{{ $photo->getClientOriginalName() }}">
        @endif

        <input type="file" wire:model="photo" class="bg-gray-100 border-gray-400 my-4"> <br>
        @error('photo')
            <span>{{ $message }}</span>
        @enderror 
        <button type="submit" class="bg-blue-600 text-white px-5 py-1 rounded-lg">Faça upload da foto</button>
    </form>
</div>
