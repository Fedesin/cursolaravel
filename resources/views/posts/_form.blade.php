@csrf

<label class="uppercase text-black-700 text-xs">Título</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4 bg-gray-800" value="{{ $post->title  }}">

<label class="uppercase text-black-700 text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4 bg-gray-800">{{ $post->body  }}</textarea>

<div class="flex justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver></a>

    <input type="submit" value="Enviar" class="bg-indigo-800 text-white  px-4 py-2 rounded">>
</div>