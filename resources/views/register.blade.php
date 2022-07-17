<x-layout>
    

    <x-nav />
    <section class="px-8 py-9">
    <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl bg-grey-100 dark:bg-grey-900 border border-grey-200">
        <h1 class="text-center font-bold text-xl">Register</h1>
        <!-- /resources/views/post/create.blade.php -->
 
<!-- Create Post Form -->
        <form action="/register" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gay-700" for="name">Name</label>
                <input class="border border-gray-400 p-2 w-full"
                 type="text" name="name" id="name" value="{{ old('name')}}" required>
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block mb-2 uppercase font-bold text-xs text-gay-700" for="username">Userame</label>
                <input class="border border-gray-400 p-2 w-full"
                 type="text" name="username" id="username" value="{{ old('username')}}" required>
                @error('username')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label class="block mb-2 uppercase font-bold text-xs text-gay-700" for="email">Email</label>
                <input class="border border-gray-400 p-2 w-full"
                 type="email" name="email" id="email" value="{{ old('email')}}" required>
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label class="block mb-2 uppercase font-bold text-xs text-gay-700" for="password">Password</label>
                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <br>
                <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-2" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </main>
    </section>
    
</x-layout>    