<x-layout>
    <section class="px-6 py-8">
        <x-nav />
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In</h1>
            <form action="/login" method="post">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label class="block mb-2 uppercase font-bold text-xs text-gay-700" for="password">Password</label>
                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>    
                <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-2" type="submit" name="submit">Submit</button>
            </div>

            </form>

        </main>

    </section>
</x-layout>    