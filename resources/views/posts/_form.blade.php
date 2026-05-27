@csrf

<label class="uppercase text-black-700 text-xs">Título</label>
<span>@error('title') <span class="text-red-500 text-xs">*{{ $message }}</span> @enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4 bg-gray-800"
value="{{ old('title', $post->title) }}"
>


<label class="uppercase text-black-700 text-xs">Slug</label>
<span>@error('slug') <span class="text-red-500 text-xs">*{{ $message }}</span> @enderror</span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4 bg-gray-800"
value="{{ old('slug', $post->slug) }}"
>


<label class="uppercase text-black-700 text-xs">Contenido</label>
<span>@error('body') <span class="text-red-500 text-xs">*{{ $message }}</span> @enderror</span>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4 bg-gray-800">{{ $post->body  }}</textarea>

<div class="flex justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-indigo-800 text-white  px-4 py-2 rounded">
</div>