<div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" wire:model="title">
    @error('title') <span>{{$mensaje}}</span> @enderror
</div>

<div class="form-group">
    <label for="body">Contenido</label>
    <textarea type="text" class="form-control" wire:model="body">

    </textarea>
    @error('title') <span>{{$mensaje}}</span> @enderror
</div>
