<x-layout>
    <section class="px-6 py-8">
        <x-nav />
        <div class="max-w-sm mx-auto">
            <form class="formpost" action="/admin/posts/{{ $post->id}}/edit" method="post" enctype="multipart/form-data">
               @csrf
               @method('PATCH')
        <div class="mb-6">
            <label class="block mb-2 uppecase font-bold text-gray-700" for="title">Title</label>
            <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" value="{{ old('title') ? old('title') : $post->title }}" required>
            @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppecase font-bold text-gray-700" for="excerpt">Excerpt</label>
            <textarea class="border border-gray-400 p-2 w-full" type="text" name="excerpt" id="excerpt" required>
                {{ old('excerpt') ? old('excerpt') : $post->excerpt }}
            </textarea>
            @error('excerpt')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
           <label class="block mb-2 uppecase font-bold text-gray-700" for="body">Body</label>
           <textarea class="border border-gray-400 p-2 w-full" type="text" name="body" id="body" required>
            {{ old('body') ? old('body') : $post->body }}
           </textarea>
           @error('body')
               <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
           @enderror
       </div>
       <div class="mb-6">
           <label class="block mb-2 uppecase font-bold text-gray-700" for="thumbnail">Image</label>
           <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" id="thumbnail" value="{{ old('thumbnail') ? old('thumbnail') : $post->thumbnail}}" >
           <img src="{{ $post->thumbnail ?  asset('storage/'.$post->thumbnail) : asset('storage/lary-avatar.svg') }}" alt="thumbnail"width="56" height="63">
           @error('thumbnail')
               <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
           @enderror
       </div>
       <div class="mb-6">
           <label class="block mb-2 uppecase font-bold text-gray-700" for="category_id">Category</label>
           <select name="category_id" id="category_id">
               @php
                   $categories = \App\Models\Category::all();
               @endphp
               @foreach ($categories as $category)
                   <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }} >{{ ucwords($category->name) }}</option>
               @endforeach
           </select>
       </div>
       <div class="mb-6">
           <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-2" type="submit" name="submit">Submit</button>
       </div>
            </form>
        </div>
    </section>   
   </x-layout>