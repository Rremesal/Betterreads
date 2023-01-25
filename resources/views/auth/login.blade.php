<x-simplelayout>
    <div class="flex flex-col items-center h-screen">

        <div class=" h-20 text-4xl mt-3">
            <span><b>Better</b>reads</span>
        </div>

        <h1 class="font-semibold text-4xl font-serif">Sign in</h1>
        <form class=" w-72" action="" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input class="border-2 border-slate-500 bg-slate-100 rounded-full px-2 py-1 w-full " type="text" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-sm text-red-500"> {{ $message }}</p>
                @enderror
                <label for="password">Password</label>
                <input class="border-2 border-slate-500 bg-slate-100 rounded-full px-2 py-1 w-full " type="password" name="password" id="password">
                <button class="bg-black my-4 text-white font-semibold rounded-full w-full p-2" type="submit">Sign in</button>
            </div>
            <div><span class="w-72">By signing in, you agree to the Betterreads <a class="text-blue-400 hover:underline" href="">Terms of Service</a> and <a class="text-blue-400 hover:underline" href="">Privacy Policy</a></span></div>
        </form>
        <div class="flex justify-center mt-3"><span>New to Betterreads?</span></div>
        <a href="{{ route('register') }}"><button class=" m-2 font-semibold rounded-full w-72 p-2 border-2 border-gray-600">Sign up</button></a>
        



    </div>

</x-simplelayout>