<div>
    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <h3>Atualizar imagem do perfil</h3>
        <input type="file" wire:model="photo"> <br>
        @error('photo')
            <span>{{ $message }}</span>
        @enderror <br>
        <button type="submit">Faça upload da foto</button>
    </form>
</div>
