<h2> Listado de post </h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <button class="btn btn-primary" wire:click="edit({{$post->id}})">
                    editar
                </button
            </td>
            <td>
                <button wire:click="destroy( {{$post->id}} )" class="btn btn-danger">
                    eliminar
                </button>
            </td>
        </tr>

    @endforeach
    </tbody>

</table>
{{ $posts->links() }}
